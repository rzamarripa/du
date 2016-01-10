<?php

namespace app\controllers;

use Yii;
use app\models\TramitesNumeroOficial;
use app\models\TramitesNumeroOficialSearch;
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
 * TramitesNumeroOficialController implements the CRUD actions for TramitesNumeroOficial model.
 */
class TramitesNumeroOficialController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesNumeroOficial();
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
     * Lists all TramitesNumeroOficial models.
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
        $tramites = TramitesNumeroOficial::find()->where(['tipoTramiteid' => '3009'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesNumeroOficial model.
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
        if (($model = TramitesNumeroOficial::findOne($id)) === null)  
            $model = new TramitesNumeroOficial(); 
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
        
        $id=Yii::$app->request->post()['TramitesNumeroOficial']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesNumeroOficial::findOne($id)) === null)  
            $model = new TramitesNumeroOficial(); 
        
 
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
            $encabezado->nombreSolicitante= $model->p1NombrePropietario;
            $encabezado->nombrePropietario= $model->p1NombrePropietario;
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            $encabezado->save();  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            try {
                $var_p2CopiaEscritura = UploadedFile::getInstance($model, 'p2CopiaEscritura');
                if(!empty($var_p2CopiaEscritura )){
                    $model->p2CopiaEscritura=$this->salvarImagen($encabezado,"Escrituras",$var_p2CopiaEscritura);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Croquis = UploadedFile::getInstance($model, 'p2Croquis');
                if(!empty($var_p2Croquis )){
                    $model->p2Croquis=$this->salvarImagen($encabezado,"Croquis",$var_p2Croquis);

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
        if($pasoIndex==4){
            try {
                $var_p4Resolutivo = UploadedFile::getInstance($model, 'p4Resolutivo');
                if(!empty($var_p4Resolutivo )){
                    $model->p4Resolutivo=$this->salvarImagen($encabezado,"Resolutivo",$var_p4Resolutivo);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==6){
            try {
                $var_p6NumeroOficial = UploadedFile::getInstance($model, 'p6NumeroOficial');
                if(!empty($var_p6NumeroOficial )){
                    $model->p6NumeroOficial=$this->salvarImagen($encabezado,"Numero Oficial",$var_p6NumeroOficial);

            }
            } catch (Exception $e) {
                
            }
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
            if($pasoIndex==7)
                $model->estatusId=2;    
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $datos; 
            } 
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramitesNumeroOficial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesNumeroOficial();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesNumeroOficial model.
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
     * Deletes an existing TramitesNumeroOficial model.
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
     * Finds the TramitesNumeroOficial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesNumeroOficial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesNumeroOficial::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
