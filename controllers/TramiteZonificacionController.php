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
//agregar este use
use app\models\EncabezadoImagenes;
use yii\filters\AccessControl; 
use yii\web\UploadedFile;
//agregar este use
use app\models\Imagenes;
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
                        //declarar en todos el view-imagen
                        'actions' => ['index','view','constancia','imprimir','view-imagen' ,' filtro'],
                        'allow' =>$permisos[USUARIOS::$LEER],
                        
                    ],
                    [
                        'actions' => ['salvar','create'],
                        'allow' => $permisos[USUARIOS::$CREAR],
                        
                    ],
                    [
                        'actions' => ['update','atras','filtro'],
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

    //todos los controladores llevan esta funcion
    function mssql_escape($data) {
        if(is_numeric($data))
          return $data;
       // print_r($data);
        $unpacked = unpack('H*hex', $data);
        //print_r($unpacked);
        //print_r(pack('H*', $unpacked['hex']));
        return   $unpacked['hex'];
    }

    public function actionIndex(){
       
        $tramites = TramiteZonificacion::find()->where(['tipoTramiteid' => '2002'])->all();
       
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
        //echo strlen($idm->imagen)." ";
        $idm->encabezado_id = $encabezado->id;
        $idm->tipoDocumento=$tipoDocumento;
        $idm->save();
        return strval($idm->id);
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
        /////
        //copiar a todos los controladorores
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
        ///// 
        \Yii::$app->response->format = 'json'; 
         if($pasoIndex==5){
            

            try {
                $constancia = UploadedFile::getInstance($model, 'p4Constancia');
                if(!empty($constancia)){
                    $model->p4Constancia=$this->salvarImagen($encabezado,"Constancia Zonificacion",$constancia);
                    $model->estatusId=2;
                }
            } catch (Exception $e) {
                
            }
         }
         if($pasoIndex==4){
            try {
                $p4ExpSupervisor = UploadedFile::getInstance($model, 'p4ExpSupervisor');
                if(!empty($p4ExpSupervisor)){
                    $model->p4ExpSupervisor=$this->salvarImagen($encabezado,"Expediente Supervisor",$p4ExpSupervisor);
                }
            }
            catch (CDbException $ex) {
                print_r( $ex);
            } 
            catch (\Exception $e) {
                print_r( $e);
            }
        }
         if($pasoIndex==2){
            
            //print_r($model->encabezadoImagen);


            //print_r($encabezado->attributes);

            try {
                $escrituras = UploadedFile::getInstance($model, 'p2Escrituras');
                if(!empty($escrituras)){ 
                    //copiar pero cambialo mamon si no vas a hacer un desmadre
                    $model->p2Escrituras=$this->salvarImagen($encabezado,"Escrituras",$escrituras);
                }

                $reciboDerechos = UploadedFile::getInstance($model, 'p2ReciboDerechos');
                if(!empty($reciboDerechos)){
                    $model->p2ReciboDerechos=$this->salvarImagen($encabezado,"Recibo Derechos",$reciboDerechos);
                }
             
                $croquisUbicacion = UploadedFile::getInstance($model, 'p2CroquisUbicacion');
                if(!empty($croquisUbicacion)){
                    $model->p2CroquisUbicacion=$this->salvarImagen($encabezado,"Croquis Ubicacion",$croquisUbicacion);
                }

                $pago = UploadedFile::getInstance($model, 'p2Pago');
                if(!empty($pago)){
                    $model->p2Pago=$this->salvarImagen($encabezado,"Pago",$pago);
                }

                

            }
            catch (CDbException $ex) {
                print_r( $ex);
            } 
            catch (\Exception $e) {
                print_r( $e);
            }
            //print_r($idm);

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

    public function actionFiltro()
      {  
        $model = new TramiteZonificacion();
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
        $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        $TramiteZonificacion = TramiteZonificacion::find()->where('fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->all();
        echo count($TramiteZonificacion);
        return $this->render('index',['TramiteZonificacion'=>$TramiteZonificacion,'model'=>$model,'boton'=>$boton]);
      }
}
