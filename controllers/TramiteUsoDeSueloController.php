<?php

namespace app\controllers;

use Yii;
use app\models\TramiteUsoDeSuelo;
use app\models\TramiteUsoDeSueloSearch;
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
 * TramiteUsoDeSueloController implements the CRUD actions for TramiteUsoDeSuelo model.
 */
class TramiteUsoDeSueloController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramiteUsoDeSuelo();
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
     * Lists all TramiteUsoDeSuelo models.
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
        $tramites = TramiteUsoDeSuelo::find()->where(['tipoTramiteid' => '2003'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramiteUsoDeSuelo model.
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
        if (($model = TramiteUsoDeSuelo::findOne($id)) === null)  
            $model = new TramiteUsoDeSuelo(); 
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
        
        $id=Yii::$app->request->post()['TramiteUsoDeSuelo']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramiteUsoDeSuelo::findOne($id)) === null)  
            $model = new TramiteUsoDeSuelo(); 
        
 
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
                $var_p2ReciboDerechos = UploadedFile::getInstance($model, 'p2ReciboDerechos');
                if(!empty($var_p2ReciboDerechos )){
                    $model->p2ReciboDerechos=$this->salvarImagen($encabezado,"Recibo de Derechos",$var_p2ReciboDerechos);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Alineamiento = UploadedFile::getInstance($model, 'p2Alineamiento');
                if(!empty($var_p2Alineamiento )){
                    $model->p2Alineamiento=$this->salvarImagen($encabezado,"Alineamiento",$var_p2Alineamiento);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProyectoArquitectonico = UploadedFile::getInstance($model, 'p2ProyectoArquitectonico');
                if(!empty($var_p2ProyectoArquitectonico )){
                    $model->p2ProyectoArquitectonico=$this->salvarImagen($encabezado,"Proyecto Arquitectónico",$var_p2ProyectoArquitectonico);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ImpactoAmbiental = UploadedFile::getInstance($model, 'p2ImpactoAmbiental');
                if(!empty($var_p2ImpactoAmbiental )){
                    $model->p2ImpactoAmbiental=$this->salvarImagen($encabezado,"Impacto Ambiental",$var_p2ImpactoAmbiental);            
						}
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ImpactoVial = UploadedFile::getInstance($model, 'p2ImpactoVial');
                if(!empty($var_p2ImpactoVial )){
                    $model->p2ImpactoVial=$this->salvarImagen($encabezado,"Impacto Vial",$var_p2ImpactoVial);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2OpinionBomberos = UploadedFile::getInstance($model, 'p2OpinionBomberos');
                if(!empty($var_p2OpinionBomberos )){
                    $model->p2OpinionBomberos=$this->salvarImagen($encabezado,"Opinion Bomberos",$var_p2OpinionBomberos);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProteccionCivil = UploadedFile::getInstance($model, 'p2ProteccionCivil');
                if(!empty($var_p2ProteccionCivil )){
                    $model->p2ProteccionCivil=$this->salvarImagen($encabezado,"Protección Civil",$var_p2ProteccionCivil);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Inah = UploadedFile::getInstance($model, 'p2Inah');
                if(!empty($var_p2Inah )){
                    $model->p2Inah=$this->salvarImagen($encabezado,"INAH",$var_p2Inah);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Sepyc = UploadedFile::getInstance($model, 'p2Sepyc');
                if(!empty($var_p2Sepyc )){
                    $model->p2Sepyc=$this->salvarImagen($encabezado,"SepyC",$var_p2Sepyc);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Masa = UploadedFile::getInstance($model, 'p2Masa');
                if(!empty($var_p2Masa )){
                    $model->p2Masa=$this->salvarImagen($encabezado,"Masa y Tortilla",$var_p2Masa);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Aeronautica = UploadedFile::getInstance($model, 'p2Aeronautica');
                if(!empty($var_p2Aeronautica )){
                    $model->p2Aeronautica=$this->salvarImagen($encabezado,"Aeronautica",$var_p2Aeronautica);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Vecinos = UploadedFile::getInstance($model, 'p2Vecinos');
                if(!empty($var_p2Vecinos )){
                    $model->p2Vecinos=$this->salvarImagen($encabezado,"Vecinos",$var_p2Vecinos);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            $model->estatusId=2;
            try {
                $var_p5Constancia = UploadedFile::getInstance($model, 'p5Constancia');
                if(!empty($var_p5Constancia )){
                    $model->p5Constancia=$this->salvarImagen($encabezado,"Constancia",$var_p5Constancia);
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
     * Creates a new TramiteUsoDeSuelo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramiteUsoDeSuelo();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramiteUsoDeSuelo model.
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
     * Deletes an existing TramiteUsoDeSuelo model.
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
     * Finds the TramiteUsoDeSuelo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramiteUsoDeSuelo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramiteUsoDeSuelo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
