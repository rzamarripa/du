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
use yii\filters\AccessControl; 
use yii\web\UploadedFile;

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
                        'actions' => ['index','view','constancia','imprimir'],
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
    public function actionIndex()
    {
        $tramites =TramiteUsoDeSuelo::find()->where(['tipoTramiteid' => '2003'])->all();
       
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


                 
    public function actionSalvar() { 
        
        $id=Yii::$app->request->post()['TramiteUsoDeSuelo']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramiteUsoDeSuelo::findOne($id)) === null)  
            $model = new TramiteUsoDeSuelo(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 

        
        if($pasoIndex==2){
            try {
                $var_p2Escrituras = UploadedFile::getInstance($model, 'p2Escrituras');
                if(!empty($var_p2Escrituras )){
                    $ext = end((explode(".", $var_p2Escrituras->name)));
                    $model->p2Escrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Escrituras;
                    $var_p2Escrituras->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ReciboDerechos = UploadedFile::getInstance($model, 'p2ReciboDerechos');
                if(!empty($var_p2ReciboDerechos )){
                    $ext = end((explode(".", $var_p2ReciboDerechos->name)));
                    $model->p2ReciboDerechos = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ReciboDerechos;
                    $var_p2ReciboDerechos->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Alineamiento = UploadedFile::getInstance($model, 'p2Alineamiento');
                if(!empty($var_p2Alineamiento )){
                    $ext = end((explode(".", $var_p2Alineamiento->name)));
                    $model->p2Alineamiento = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Alineamiento;
                    $var_p2Alineamiento->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProyectoArquitectonico = UploadedFile::getInstance($model, 'p2ProyectoArquitectonico');
                if(!empty($var_p2ProyectoArquitectonico )){
                    $ext = end((explode(".", $var_p2ProyectoArquitectonico->name)));
                    $model->p2ProyectoArquitectonico = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ProyectoArquitectonico;
                    $var_p2ProyectoArquitectonico->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ImpactoAmbiental = UploadedFile::getInstance($model, 'p2ImpactoAmbiental');
                if(!empty($var_p2ImpactoAmbiental )){
                    $ext = end((explode(".", $var_p2ImpactoAmbiental->name)));
                    $model->p2ImpactoAmbiental = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ImpactoAmbiental;
                    $var_p2ImpactoAmbiental->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ImpactoVial = UploadedFile::getInstance($model, 'p2ImpactoVial');
                if(!empty($var_p2ImpactoVial )){
                    $ext = end((explode(".", $var_p2ImpactoVial->name)));
                    $model->p2ImpactoVial = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ImpactoVial;
                    $var_p2ImpactoVial->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2OpinionBomberos = UploadedFile::getInstance($model, 'p2OpinionBomberos');
                if(!empty($var_p2OpinionBomberos )){
                    $ext = end((explode(".", $var_p2OpinionBomberos->name)));
                    $model->p2OpinionBomberos = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2OpinionBomberos;
                    $var_p2OpinionBomberos->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2ProteccionCivil = UploadedFile::getInstance($model, 'p2ProteccionCivil');
                if(!empty($var_p2ProteccionCivil )){
                    $ext = end((explode(".", $var_p2ProteccionCivil->name)));
                    $model->p2ProteccionCivil = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ProteccionCivil;
                    $var_p2ProteccionCivil->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Inah = UploadedFile::getInstance($model, 'p2Inah');
                if(!empty($var_p2Inah )){
                    $ext = end((explode(".", $var_p2Inah->name)));
                    $model->p2Inah = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Inah;
                    $var_p2Inah->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Sepyc = UploadedFile::getInstance($model, 'p2Sepyc');
                if(!empty($var_p2Sepyc )){
                    $ext = end((explode(".", $var_p2Sepyc->name)));
                    $model->p2Sepyc = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Sepyc;
                    $var_p2Sepyc->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Masa = UploadedFile::getInstance($model, 'p2Masa');
                if(!empty($var_p2Masa )){
                    $ext = end((explode(".", $var_p2Masa->name)));
                    $model->p2Masa = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Masa;
                    $var_p2Masa->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Aeronautica = UploadedFile::getInstance($model, 'p2Aeronautica');
                if(!empty($var_p2Aeronautica )){
                    $ext = end((explode(".", $var_p2Aeronautica->name)));
                    $model->p2Aeronautica = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Aeronautica;
                    $var_p2Aeronautica->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p2Vecinos = UploadedFile::getInstance($model, 'p2Vecinos');
                if(!empty($var_p2Vecinos )){
                    $ext = end((explode(".", $var_p2Vecinos->name)));
                    $model->p2Vecinos = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Vecinos;
                    $var_p2Vecinos->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5Constancia = UploadedFile::getInstance($model, 'p5Constancia');
                if(!empty($var_p5Constancia )){
                    $ext = end((explode(".", $var_p5Constancia->name)));
                    $model->p5Constancia = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p5Constancia;
                    $var_p5Constancia->saveAs($path);
            }
            } catch (Exception $e) {
                
            }
        }
                 
                
        if ($model->load(Yii::$app->request->post()) ) { 
                    
            if($model->salvarPaso($pasoIndex)) { 
                $model->__salvando = 0;  
                return $model; 
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
