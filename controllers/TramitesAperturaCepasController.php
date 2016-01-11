<?php

namespace app\controllers;

use Yii;
use app\models\TramitesAperturaCepas;
use app\models\TramitesAperturaCepasSearch;
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
 * TramitesAperturaCepasController implements the CRUD actions for TramitesAperturaCepas model.
 */
class TramitesAperturaCepasController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesAperturaCepas();
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
     * Lists all TramitesAperturaCepas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $tramites = TramitesAperturaCepas::find()->where(['tipoTramiteid' => '3014'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesAperturaCepas model.
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
        if (($model = TramitesAperturaCepas::findOne($id)) === null)  
            $model = new TramitesAperturaCepas(); 
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
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $tipoDocumento = utf8_decode($tipoDocumento);
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
        
        $id=Yii::$app->request->post()['TramitesAlineamiento']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesAlineamiento::findOne($id)) === null)  
            $model = new TramitesAlineamiento(); 
        
 
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

        if($pasoIndex==1){
            try {
                $var_p1DirectorResponsable = UploadedFile::getInstance($model, 'p1DirectorResponsable');
                if(!empty($var_p1DirectorResponsable )){
                    $model->p1DirectorResponsable=$this->salvarImagen($encabezado,"Director Responsable",$var_p1DirectorResponsable);            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1PlanoTrayectoria = UploadedFile::getInstance($model, 'p1PlanoTrayectoria');
                if(!empty($var_p1PlanoTrayectoria )){
                    $model->p1PlanoTrayectoria=$this->salvarImagen($encabezado,"Plano Trayectoria",$var_p1PlanoTrayectoria);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1ProgramaObra = UploadedFile::getInstance($model, 'p1ProgramaObra');
                if(!empty($var_p1ProgramaObra )){
                    $model->p1ProgramaObra=$this->salvarImagen($encabezado,"Programa Obra",$var_p1ProgramaObra);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1PresupuestoObra = UploadedFile::getInstance($model, 'p1PresupuestoObra');
                if(!empty($var_p1PresupuestoObra )){
                    $model->p1PresupuestoObra=$this->salvarImagen($encabezado,"Presupuesto Obra",$var_p1PresupuestoObra);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1AnuenciaVecinos = UploadedFile::getInstance($model, 'p1AnuenciaVecinos');
                if(!empty($var_p1AnuenciaVecinos )){
                    $model->p1AnuenciaVecinos=$this->salvarImagen($encabezado,"Anuencia Vecinos",$var_p1AnuenciaVecinos);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1Fianza = UploadedFile::getInstance($model, 'p1Fianza');
                if(!empty($var_p1Fianza )){
                    $model->p1Fianza=$this->salvarImagen($encabezado,"Fianza",$var_p1Fianza);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==1){
            try {
                $var_p1Pago = UploadedFile::getInstance($model, 'p1Pago');
                if(!empty($var_p1Pago )){
                    $model->p1Pago=$this->salvarImagen($encabezado,"Pago",$var_p1Pago);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Expediente = UploadedFile::getInstance($model, 'p2Expediente');
                if(!empty($var_p2Expediente )){
                    $model->p2Expediente=$this->salvarImagen($encabezado,"Expediente",$var_p2Expediente);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3Resolutivo = UploadedFile::getInstance($model, 'p3Resolutivo');
                if(!empty($var_p3Resolutivo )){
                    $model->p3Resolutivo=$this->salvarImagen($encabezado,"Resolucion",$var_p3Resolutivo);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3Pago = UploadedFile::getInstance($model, 'p3Pago');
                if(!empty($var_p3Pago )){
                    $model->p3Pago=$this->salvarImagen($encabezado,"Pago",$var_p3Pago);            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5AperturasCepas = UploadedFile::getInstance($model, 'p5AperturasCepas');
                if(!empty($var_p5AperturasCepas )){
                    $model->p5AperturasCepas=$this->salvarImagen($encabezado,"Aperturas Cepas",$var_p5AperturasCepas);            }
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
     * Creates a new TramitesAperturaCepas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesAperturaCepas();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesAperturaCepas model.
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
     * Deletes an existing TramitesAperturaCepas model.
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
     * Finds the TramitesAperturaCepas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesAperturaCepas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesAperturaCepas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
