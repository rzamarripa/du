<?php

namespace app\controllers;

use Yii;
use app\models\TramitesRegimenCondominio;
use app\models\TramitesRegimenCondominioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use app\models\PasosTramite;
use app\models\EncabezadoImagenes;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;
use app\models\Imagenes;

/**
 * TramitesRegimenCondominioController implements the CRUD actions for TramitesRegimenCondominio model.
 */
class TramitesRegimenCondominioController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesRegimenCondominio();
            $this->__tipoTramite = $model->tipoDeTramite();
        }
        return $this->__tipoTramite;
    }
    public function behaviors()
    {
        $permisos = USUARIOS::permisosTramite($this->tipoDeTramite());
        return [
                 
            'access' => [
                'class' => AccessControl::className(),
                
                'rules' => [
                    [
                        'actions' => ['index','view','imprimir','view-imagen'],
                        'allow' =>$permisos[USUARIOS::$LEER],
                        
                    ],
                    [
                        'actions' => ['salvar','create'],
                        'allow' => $permisos[USUARIOS::$CREAR],
                        
                    ],
                    [
                        'actions' => ['update','atras'],
                        'allow' => $permisos[USUARIOS::$ACTUALIZAR],
                        
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => $permisos[USUARIOS::$BORRAR],
                        
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TramitesRegimenCondominio models.
     * @return mixed
     */
    function mssql_escape($data) {
        if(is_numeric($data))
          return $data;
       // print_r($data);
        $unpacked = unpack('H*hex', $data);
        //print_r($unpacked);
        //print_r(pack('H*', $unpacked['hex']));
        return   $unpacked['hex'];
    }
    
    public function actionIndex()
    {
        $tramites = TramitesRegimenCondominio::find()->where(['tipoTramiteid' => '3012'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesRegimenCondominio model.
     * @param integer $id
     * @return mixed
     */
 
    public function actionImprimir($id) 
    { 
        $pdf = Yii::$app->pdf; 
        $pdf->content = $this->renderpartial('_imprimir',['model' => $this->findModel($id)]); 
        return $pdf->render(); 
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    //Esta funcion la llevan todos los controladores, cuidado con el modelo
    public function actionViewImagen($tipoDocumento,$id)
    {
        if (($model = TramitesRegimenCondominio::findOne($id)) === null)  
            $model = new TramitesRegimenCondominio(); 
        //print_r($model->encabezadoImagen);
        if(empty($model->encabezadoImagen))
            $encabezado = new EncabezadoImagenes();
        else
            $encabezado = $model->encabezadoImagen;
        $idm=null;
        foreach ($encabezado->imagenes as $imagen) {
           // print_r($imagen);
            if($imagen->tipoDocumento==$tipoDocumento)
                $idm=$imagen;
        }
        header("Content-Type: image/jpeg");
        echo pack("H*",$idm->imagen);
    }

    //Esta funcion la llevan todos los controladores
    private function salvarImagen($encabezado,$tipoDocumento,$documento){
        $idm=null;
        foreach ($encabezado->imagenes as $imagen) {
            if($imagen->tipoDocumento==$tipoDocumento)
                $idm=$imagen;
        }
        if(empty($idm)) 
            $idm= new Imagenes();
                    //print_r($idm);
        $ext = end((explode(".", $documento->name)));
        $content=file_get_contents($documento->tempName);
        $idm->imagen = $this->mssql_escape($content);//$content;
        $idm->encabezado_id = $encabezado->id;
        $idm->tipoDocumento=$tipoDocumento;
        $idm->save();
        return strval($idm->id);
    }
                 

    public function actionSalvar() { 
        
        $id=Yii::$app->request->post()['TramitesRegimenCondominio']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesRegimenCondominio::findOne($id)) === null)  
            $model = new TramitesRegimenCondominio(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
        if(empty($model->encabezadoImagen))
                $encabezado = new EncabezadoImagenes();
            else
                $encabezado = $model->encabezadoImagen;
            $encabezado->tramite_id=$model->id;
            $encabezado->claveCatastral= $model->p1ClaveCatastralPredio;
            $encabezado->nombreSolicitante= $model->p1NombreSolicitante;
            $encabezado->nombrePropietario= $model->p1NombrePropietarios;
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            $encabezado->save();  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            try {
                $var_p2Escrituras = UploadedFile::getInstance($model, 'p2Escrituras');
                if(!empty($var_p2Escrituras )){
                    $model->p2Escrituras=$this->salvarImagen($encabezado,"Escrituras",$var_p2Escrituras);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Predial = UploadedFile::getInstance($model, 'p2Predial');
                if(!empty($var_p2Predial )){
                    $model->p2Predial=$this->salvarImagen($encabezado,"Predial",$var_p2Predial);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Planos = UploadedFile::getInstance($model, 'p2Planos');
                if(!empty($var_p2Planos )){
                    $model->p2Planos=$this->salvarImagen($encabezado,"Planos",$var_p2Planos);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2TablaAreas = UploadedFile::getInstance($model, 'p2TablaAreas');
                if(!empty($var_p2TablaAreas )){
                    $model->p2TablaAreas=$this->salvarImagen($encabezado,"Tabla de Areas",$var_p2TablaAreas);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Pago = UploadedFile::getInstance($model, 'p2Pago');
                if(!empty($var_p2Pago )){
                    $model->p2Pago=$this->salvarImagen($encabezado,"Pago",$var_p2Pago);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3Resolutivo = UploadedFile::getInstance($model, 'p3Resolutivo');
                if(!empty($var_p3Resolutivo )){
                    $model->p3Resolutivo=$this->salvarImagen($encabezado,"Resolutivo",$var_p3Resolutivo);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5RegimenCondominio = UploadedFile::getInstance($model, 'p5RegimenCondominio');
                if(!empty($var_p5RegimenCondominio )){
                    $model->p5RegimenCondominio=$this->salvarImagen($encabezado,"Regimen en Condominio",$var_p5RegimenCondominio);

            }
            } catch (Exception $e) {
                
            }
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $datos; 
            } 
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramitesRegimenCondominio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesRegimenCondominio();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesRegimenCondominio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        return $this->render('update', [
                'model' => $model,
            ]);
    }
    public function actionAtras()
    {
        \Yii::$app->response->format = 'json'; 
         
        $id=Yii::$app->request->post()['id']; 
        $model = $this->findModel($id);
        $model->__salvando=1;
        $model->observaciones = Yii::$app->request->post()['observacion']; 
        $pasos=PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->all();
        $pasoIndex = Yii::$app->request->post()['pasoatras']; 
        for ($i=0; $i <$pasoIndex ; $i++) { 
            $paso = $pasos[$i];
        }
        $model->pasoActualId=$paso->id;
        $model->estatusId=3;
        $model->save();
        $model->__salvando=0;
        return $model;


    }


    /**
     * Deletes an existing TramitesRegimenCondominio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TramitesRegimenCondominio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesRegimenCondominio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesRegimenCondominio::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
