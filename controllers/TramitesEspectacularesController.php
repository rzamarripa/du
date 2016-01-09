<?php

namespace app\controllers;

use Yii;
use app\models\TramitesEspectaculares;
use app\models\TramitesEspectacularesSearch;
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
 * TramitesEspectacularesController implements the CRUD actions for TramitesEspectaculares model.
 */
class TramitesEspectacularesController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesEspectaculares();
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
     * Lists all TramitesEspectaculares models.
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
        $tramites = TramitesEspectaculares::find()->where(['tipoTramiteid' => '2006'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesEspectaculares model.
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
        if (($model = TramitesEspectaculares::findOne($id)) === null)  
            $model = new TramitesEspectaculares(); 
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
        
        $id=Yii::$app->request->post()['TramitesEspectaculares']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesEspectaculares::findOne($id)) === null)  
            $model = new TramitesEspectaculares(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
        if(empty($model->encabezadoImagen))
                $encabezado = new EncabezadoImagenes();
            else
                $encabezado = $model->encabezadoImagen;
            $encabezado->tramite_id=$model->id;
            $encabezado->claveCatastral= "";
            $encabezado->nombreSolicitante= "";
            $encabezado->nombrePropietario= "";
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            $encabezado->save();  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            try {
                $var_p2Memoria = UploadedFile::getInstance($model, 'p2Memoria');
                if(!empty($var_p2Memoria )){
                    $model->p2Memoria=$this->salvarImagen($encabezado,"Memoria",$var_p2Memoria);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Poliza = UploadedFile::getInstance($model, 'p2Poliza');
                if(!empty($var_p2Poliza )){
                    $model->p2Poliza=$this->salvarImagen($encabezado,"Poliza",$var_p2Poliza);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Propiedad = UploadedFile::getInstance($model, 'p2Propiedad');
                if(!empty($var_p2Propiedad )){
                    $model->p2Propiedad=$this->salvarImagen($encabezado,"Propiedad",$var_p2Propiedad);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2PagoImpuesto = UploadedFile::getInstance($model, 'p2PagoImpuesto');
                if(!empty($var_p2PagoImpuesto )){
                    $model->p2PagoImpuesto=$this->salvarImagen($encabezado,"Pago de Impuesto",$var_p2PagoImpuesto);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2CartaAutorizacion = UploadedFile::getInstance($model, 'p2CartaAutorizacion');
                if(!empty($var_p2CartaAutorizacion )){
                    $model->p2CartaAutorizacion=$this->salvarImagen($encabezado,"Carta de Autorizacion",$var_p2CartaAutorizacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2CartaCompromiso = UploadedFile::getInstance($model, 'p2CartaCompromiso');
                if(!empty($var_p2CartaCompromiso )){
                    $model->p2CartaCompromiso=$this->salvarImagen($encabezado,"Carta de Compromiso",$var_p2CartaCompromiso);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2LicenciaConstruccion = UploadedFile::getInstance($model, 'p2LicenciaConstruccion');
                if(!empty($var_p2LicenciaConstruccion )){
                    $model->p2LicenciaConstruccion=$this->salvarImagen($encabezado,"Licencia de Contrsuccion",$var_p2LicenciaConstruccion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2AutorizacionProteccionCivil = UploadedFile::getInstance($model, 'p2AutorizacionProteccionCivil');
                if(!empty($var_p2AutorizacionProteccionCivil )){
                    $model->p2AutorizacionProteccionCivil=$this->salvarImagen($encabezado,"Autorizacion de Proteccion Civil",$var_p2AutorizacionProteccionCivil);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==4){
            try {
                $var_p4ReciboPago = UploadedFile::getInstance($model, 'p4ReciboPago');
                if(!empty($var_p4ReciboPago )){
                    $model->p4ReciboPago=$this->salvarImagen($encabezado,"Recibo de Pago",$var_p4ReciboPago);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==6){
            try {
                $var_p6Permiso = UploadedFile::getInstance($model, 'p6Permiso');
                if(!empty($var_p6Permiso )){
                    $model->p6Permiso=$this->salvarImagen($encabezado,"Permiso",$var_p6Permiso);

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
     * Creates a new TramitesEspectaculares model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesEspectaculares();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesEspectaculares model.
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
     * Deletes an existing TramitesEspectaculares model.
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
     * Finds the TramitesEspectaculares model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesEspectaculares the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesEspectaculares::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
