<?php

namespace app\controllers;

use Yii;
use app\models\TramitesRecepcion;
use app\models\TramitesRecepcionSearch;
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
 * TramitesRecepcionController implements the CRUD actions for TramitesRecepcion model.
 */
class TramitesRecepcionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesRecepcion();
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
                        'actions' => ['index','view','imprimir'],
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
     * Lists all TramitesRecepcion models.
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
        $tramites = TramitesRecepcion::find()->where(['tipoTramiteid' => '2009'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesRecepcion model.
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
        if (($model = TramitesRecepcion::findOne($id)) === null)  
            $model = new TramitesRecepcion(); 
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
        
        $id=Yii::$app->request->post()['TramitesRecepcion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesRecepcion::findOne($id)) === null)  
            $model = new TramitesRecepcion(); 
        
 
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
            $encabezado->nombrePropietario= $model->p1NombrePropietario;
            $encabezado->fechaRegistro= $model->fechaCreacion;
            $encabezado->fechaCarga= $model->fechaModificacion;
            $encabezado->save();  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==3){
            try {
                $var_p5SolicitudPresidenteMuni = UploadedFile::getInstance($model, 'p5SolicitudPresidenteMuni');
                if(!empty($var_p5SolicitudPresidenteMuni )){
                    $model->p5SolicitudPresidenteMuni=$this->salvarImagen($encabezado,"Solicitud",$var_p5SolicitudPresidenteMuni);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3CertificadoCabildo = UploadedFile::getInstance($model, 'p3CertificadoCabildo');
                if(!empty($var_p3CertificadoCabildo )){
                    $model->p3CertificadoCabildo=$this->salvarImagen($encabezado,"Certificado de cabildo",$var_p3CertificadoCabildo);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5PlanoLotificacion = UploadedFile::getInstance($model, 'p5PlanoLotificacion');
                if(!empty($var_p5PlanoLotificacion )){
                    $model->p5PlanoLotificacion=$this->salvarImagen($encabezado,"Plano Lotificacion",$var_p5PlanoLotificacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionJapac = UploadedFile::getInstance($model, 'p5RecepcionJapac');
                if(!empty($var_p5RecepcionJapac )){
                    $model->p5RecepcionJapac=$this->salvarImagen($encabezado,"Recepcion de Japac",$var_p5RecepcionJapac);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3ActaRecepcion = UploadedFile::getInstance($model, 'p3ActaRecepcion');
                if(!empty($var_p3ActaRecepcion )){
                    $model->p3ActaRecepcion=$this->salvarImagen($encabezado,"Acta de Recepcion",$var_p3ActaRecepcion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecno = UploadedFile::getInstance($model, 'p3MemoriaTecno');
                if(!empty($var_p3MemoriaTecno )){
                    $model->p3MemoriaTecno=$this->salvarImagen($encabezado,"Memoria",$var_p3MemoriaTecno);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoAgua = UploadedFile::getInstance($model, 'p3PlanoAgua');
                if(!empty($var_p3PlanoAgua )){
                    $model->p3PlanoAgua=$this->salvarImagen($encabezado,"Plano de Agua",$var_p3PlanoAgua);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoAlcantarillado = UploadedFile::getInstance($model, 'p3PlanoAlcantarillado');
                if(!empty($var_p3PlanoAlcantarillado )){
                    $model->p3PlanoAlcantarillado=$this->salvarImagen($encabezado,"Plano Alcantarillado",$var_p3PlanoAlcantarillado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionCfe = UploadedFile::getInstance($model, 'p5RecepcionCfe');
                if(!empty($var_p5RecepcionCfe )){
                    $model->p5RecepcionCfe=$this->salvarImagen($encabezado,"Recepcion CFE",$var_p5RecepcionCfe);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3ActaRecepcionCfe = UploadedFile::getInstance($model, 'p3ActaRecepcionCfe');
                if(!empty($var_p3ActaRecepcionCfe )){
                    $model->p3ActaRecepcionCfe=$this->salvarImagen($encabezado,"Acta de Recepcion CFE",$var_p3ActaRecepcionCfe);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3CartaCompromiso = UploadedFile::getInstance($model, 'p3CartaCompromiso');
                if(!empty($var_p3CartaCompromiso )){
                    $model->p3CartaCompromiso=$this->salvarImagen($encabezado,"Carta Compromiso",$var_p3CartaCompromiso);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecnoCfe = UploadedFile::getInstance($model, 'p3MemoriaTecnoCfe');
                if(!empty($var_p3MemoriaTecnoCfe )){
                    $model->p3MemoriaTecnoCfe=$this->salvarImagen($encabezado,"Memoria Tecno CFE",$var_p3MemoriaTecnoCfe);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoCfe = UploadedFile::getInstance($model, 'p3PlanoCfe');
                if(!empty($var_p3PlanoCfe )){
                    $model->p3PlanoCfe=$this->salvarImagen($encabezado,"Plano CFE",$var_p3PlanoCfe);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionAlumbrado = UploadedFile::getInstance($model, 'p5RecepcionAlumbrado');
                if(!empty($var_p5RecepcionAlumbrado )){
                    $model->p5RecepcionAlumbrado=$this->salvarImagen($encabezado,"Recepcion de Alumbrado",$var_p5RecepcionAlumbrado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3OficioRecepcion = UploadedFile::getInstance($model, 'p3OficioRecepcion');
                if(!empty($var_p3OficioRecepcion )){
                    $model->p3OficioRecepcion=$this->salvarImagen($encabezado,"Oficio de Recepcion",$var_p3OficioRecepcion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecnoAlumbrado = UploadedFile::getInstance($model, 'p3MemoriaTecnoAlumbrado');
                if(!empty($var_p3MemoriaTecnoAlumbrado )){
                    $model->p3MemoriaTecnoAlumbrado=$this->salvarImagen($encabezado,"Memoria Tecno Alumbrado",$var_p3MemoriaTecnoAlumbrado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3PlanoAlumbrado = UploadedFile::getInstance($model, 'p3PlanoAlumbrado');
                if(!empty($var_p3PlanoAlumbrado )){
                    $model->p3PlanoAlumbrado=$this->salvarImagen($encabezado,"Plano Alumbrado",$var_p3PlanoAlumbrado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5RecepcionCivil = UploadedFile::getInstance($model, 'p5RecepcionCivil');
                if(!empty($var_p5RecepcionCivil )){
                    $model->p5RecepcionCivil=$this->salvarImagen($encabezado,"Recepcion Civil",$var_p5RecepcionCivil);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3ActaTecnica = UploadedFile::getInstance($model, 'p3ActaTecnica');
                if(!empty($var_p3ActaTecnica )){
                    $model->p3ActaTecnica=$this->salvarImagen($encabezado,"Acta Tecnica",$var_p3ActaTecnica);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3MemoriaTecnoCivil = UploadedFile::getInstance($model, 'p3MemoriaTecnoCivil');
                if(!empty($var_p3MemoriaTecnoCivil )){
                    $model->p3MemoriaTecnoCivil=$this->salvarImagen($encabezado,"Memoria Tecno Civil",$var_p3MemoriaTecnoCivil);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5PlanoObras = UploadedFile::getInstance($model, 'p5PlanoObras');
                if(!empty($var_p5PlanoObras )){
                    $model->p5PlanoObras=$this->salvarImagen($encabezado,"Plano Obras",$var_p5PlanoObras);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3Donaciones = UploadedFile::getInstance($model, 'p3Donaciones');
                if(!empty($var_p3Donaciones )){
                    $model->p3Donaciones=$this->salvarImagen($encabezado,"Donaciones",$var_p3Donaciones);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p3EscriturasPublica = UploadedFile::getInstance($model, 'p3EscriturasPublica');
                if(!empty($var_p3EscriturasPublica )){
                    $model->p3EscriturasPublica=$this->salvarImagen($encabezado,"Escritura Publica",$var_p3EscriturasPublica);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==3){
            try {
                $var_p5PlanoPoligono = UploadedFile::getInstance($model, 'p5PlanoPoligono');
                if(!empty($var_p5PlanoPoligono )){
                    $model->p5PlanoPoligono=$this->salvarImagen($encabezado,"Plano Poligono",$var_p5PlanoPoligono);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p7Recepcion = UploadedFile::getInstance($model, 'p7Recepcion');
                if(!empty($var_p7Recepcion )){
                    $model->p7Recepcion=$this->salvarImagen($encabezado,"Recepcion",$var_p7Recepcion);

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
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($datos=$model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $datos; 
            } 
        } 
         
        return null; 
    } 


    /**
     * Creates a new TramitesRecepcion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesRecepcion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesRecepcion model.
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
     * Deletes an existing TramitesRecepcion model.
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
     * Finds the TramitesRecepcion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesRecepcion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesRecepcion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
