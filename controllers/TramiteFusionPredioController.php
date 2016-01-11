<?php

namespace app\controllers;

use Yii;
use app\models\TramiteFusionPredio;
use app\models\TramiteFusionPredioSearch;
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
 * TramiteFusionPredioController implements the CRUD actions for TramiteFusionPredio model.
 */
class TramiteFusionPredioController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramiteFusionPredio();
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
     * Lists all TramiteFusionPredio models.
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
        $tramites = TramiteFusionPredio::find()->where(['tipoTramiteid' => '2005'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramiteFusionPredio model.
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
        if (($model = TramiteZonificacion::findOne($id)) === null)  
            $model = new TramiteZonificacion(); 
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
        //echo strlen($idm->imagen);
        header("Content-Type: image/jpeg");
        echo pack("H*",$idm->imagen);
    }

    //Esta funcion la llevan todos los controladores
    private function salvarImagen($encabezado,$tipoDocumento,$documento,$consecutivo){
        $idm=null;
        
        $idm= new Imagenes();
                    //print_r($idm);
        $ext = end((explode(".", $documento->name)));
        $content=file_get_contents($documento->tempName);
        $idm->imagen = $this->mssql_escape($content);//$content;
        $idm->encabezado_id = $encabezado->id;
        $idm->consecutivo = intval($consecutivo);
        $idm->tipoDocumento=$tipoDocumento;
        $idm->save();
        return strval($idm->id);
    }
                 
    private function cancelarSalvar($transaction,$mensaje)
    {
        //$transaction->rollBack();
        return $mensaje;
    }
    private function salvarArchivos($transaction,$model,$encabezado,$atributo,$tipoDocumento)
    {
            try {
                $iterArchivos=0;
                $connection=Yii::$app->db;
                $connection ->createCommand()
                ->delete('Imagenes', "encabezado_id = {$encabezado->id} and tipoDocumento ='{$tipoDocumento}'")
                ->execute();

                foreach ($encabezado->imagenes as $imagen) {
                    if($imagen->tipoDocumento==$tipoDocumento)
                        $imagen->delete();
                }
                $archivo = UploadedFile::getInstance($model, $atributo.'['.$iterArchivos.']');
                while(!empty($archivo)){
                    $iterArchivos++;
                    if(!$this->salvarImagen($encabezado,$tipoDocumento,$archivo,$iterArchivos))
                        return $this->cancelarSalvar($transaction,'Error al Salvar '.$tipoDocumento);
                    $archivo = UploadedFile::getInstance($model, $atributo.'['.$iterArchivos.']');
                }
                
            } 
            catch (yii\base\Exception $e) {
                return $this->cancelarSalvar($transaction,$e);
            }
            catch(Exception $e){
                return $this->cancelarSalvar($transaction,$e);
            }
            $model[$atributo]=strval($iterArchivos);
            return 1;

    }
    
    public function actionSalvar() { 
        
        $id=Yii::$app->request->post()['TramiteFusionPredio']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramiteFusionPredio::findOne($id)) === null)  
            $model = new TramiteFusionPredio(); 
        
 
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
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Escrituras',$model->getAttributeLabel('p2Escrituras'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1'); 
        }
        if($pasoIndex==2){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2ReciboDerechos',$model->getAttributeLabel('p2ReciboDerechos'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
        }
        if($pasoIndex==2){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2CroquisUbicacion',$model->getAttributeLabel('p2CroquisUbicacion'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
        }
        if($pasoIndex==2){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Pago',$model->getAttributeLabel('p2Pago'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
        }
        if($pasoIndex==2){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2Alineamiento',$model->getAttributeLabel('p2Alineamiento'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
        }
        if($pasoIndex==2){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p2PropuestaRelotificacion',$model->getAttributeLabel('p2PropuestaRelotificacion'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
        }
        if($pasoIndex==4){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p4ExpSupervisor',$model->getAttributeLabel('p4ExpSupervisor'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
        }
        
        if($pasoIndex==5){
	         $error=$this->salvarArchivos($transaction,$model,$encabezado,'p5Constancia',$model->getAttributeLabel('p5Constancia'));
	         if(gettype($error) == "string")
                return $this->cancelarSalvar($transaction,'Error al Salvar 1');
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
     * Creates a new TramiteFusionPredio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramiteFusionPredio();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramiteFusionPredio model.
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
     * Deletes an existing TramiteFusionPredio model.
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
     * Finds the TramiteFusionPredio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramiteFusionPredio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramiteFusionPredio::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
