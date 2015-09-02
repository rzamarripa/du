<?php

namespace app\controllers;

use Yii;
use app\models\TramiteZonificacion;
use app\models\TramiteZonificacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\USUARIOS;
use app\models\PasosTramite;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;
/**
 * TramiteZonificacionController implements the CRUD actions for TramiteZonificacion model.
 */
class TramiteZonificacionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramiteZonificacion();
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
     * Lists all TramiteZonificacion models.
     * @return mixed
     */

    public function actionIndex(){
       
        $tramites = TramiteZonificacion::find()->all();
       
        return $this->render('index',['tramites'=>$tramites]);
        
    }
  

    /**
     * Displays a single TramiteZonificacion model.
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
               
        $id=Yii::$app->request->post()['TramiteZonificacion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramiteZonificacion::findOne($id)) === null)  
            $model = new TramiteZonificacion(); 
        
 
        $model->fechaModificacion = date('d-m-Y H:i:s');

        $model->estatusId=1;
        $model->observaciones="";


        $model->__salvando = 1;  
         
        \Yii::$app->response->format = 'json'; 
         
         if($pasoIndex==2){
            
            try {
                $escrituras = UploadedFile::getInstance($model, 'p2Escrituras');
                if(!empty($escrituras)){
                    $ext = end((explode(".", $escrituras->name)));
                    $model->p2Escrituras = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Escrituras;
                    $escrituras->saveAs($path);
                }

                $reciboDerechos = UploadedFile::getInstance($model, 'p2ReciboDerechos');
                if(!empty($reciboDerechos)){
                    $ext = end((explode(".", $reciboDerechos->name)));
                    $model->p2ReciboDerechos = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2ReciboDerechos;
                    $reciboDerechos->saveAs($path);
                }
             
                $croquisUbicacion = UploadedFile::getInstance($model, 'p2CroquisUbicacion');
                if(!empty($croquisUbicacion)){
                    $ext = end((explode(".", $croquisUbicacion->name)));
                    $model->p2CroquisUbicacion = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2CroquisUbicacion;
                    $croquisUbicacion->saveAs($path);
                }

                $pago = UploadedFile::getInstance($model, 'p2Pago');
                if(!empty($pago)){
                    $ext = end((explode(".", $pago->name)));
                    $model->p2Pago = Yii::$app->security->generateRandomString().".pdf";
                    $path = Yii::getAlias('@app').'/web/archivo/'. $model->p2Pago;
                    $pago->saveAs($path);
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
     * Creates a new TramiteZonificacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramiteZonificacion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramiteZonificacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //echo 'http://localhost/'.$model->p2Escrituras;
        //$model->p2Escrituras = UploadedFile::getInstanceByName('http://localhost/'.$model->p2Escrituras);
        //print_r($model->p2Escrituras);
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
    public function actionConstancia($id)
    {
        $model= $this->findModel($id);
        if($model->estatusId==1 )
        {
            if( $model->pasoActual->secuencia==4)
            {
                $model->estatusId=2;
                $model->fechaModificacion = date('d-m-Y H:i:s');
                $model->__salvando = 1;  
                $model->save();
                $model->__salvando = 0;
            }
            else
            {
                return 'No Disponible';
            }

        }
        $pdf = Yii::$app->pdf;
        $pdf->content = $this->renderPartial('constancia',['model'=>$model]);
        return $pdf->render();
    }

    /**
     * Deletes an existing TramiteZonificacion model.
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
     * Finds the TramiteZonificacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramiteZonificacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramiteZonificacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
