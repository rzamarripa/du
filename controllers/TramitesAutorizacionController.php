<?php

namespace app\controllers;

use Yii;
use app\models\TramitesAutorizacion;
use app\models\TramitesAutorizacionSearch;
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
 * TramitesAutorizacionController implements the CRUD actions for TramitesAutorizacion model.
 */
class TramitesAutorizacionController extends Controller
{

    private $__tipoTramite;

    public function tipoDeTramite()
    {
        if(empty($this->__tipoTramite))
        {
            $model = new TramitesAutorizacion();
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
     * Lists all TramitesAutorizacion models.
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
        $tramites = TramitesAutorizacion::find()->where(['tipoTramiteid' => '2008'])->all();
       
        return $this->render('index',['tramites'=>$tramites]);
    }

    /**
     * Displays a single TramitesAutorizacion model.
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
        if (($model = TramitesAutorizacion::findOne($id)) === null)  
            $model = new TramitesAutorizacion(); 
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
        
        $id=Yii::$app->request->post()['TramitesAutorizacion']['id']; 
        $pasoIndex = Yii::$app->request->post()['paso']; 
        if (($model = TramitesAutorizacion::findOne($id)) === null)  
            $model = new TramitesAutorizacion(); 
        
 
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

        
        if($pasoIndex==3){
            try {
                $var_p2Constancia = UploadedFile::getInstance($model, 'p2Constancia');
                if(!empty($var_p2Constancia )){
                    $model->p2Constancia=$this->salvarImagen($encabezado,"Constancia",$var_p2Constancia);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5TituloPropiedad = UploadedFile::getInstance($model, 'p5TituloPropiedad');
                if(!empty($var_p5TituloPropiedad )){
                    $model->p5TituloPropiedad=$this->salvarImagen($encabezado,"Titulo de Propiedad",$var_p5TituloPropiedad);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoLocalizacion = UploadedFile::getInstance($model, 'p5PlanoLocalizacion');
                if(!empty($var_p5PlanoLocalizacion )){
                    $model->p5PlanoLocalizacion=$this->salvarImagen($encabezado,"Plano de Localizacion",$var_p5PlanoLocalizacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5PlanoTopogra = UploadedFile::getInstance($model, 'p5PlanoTopogra');
                if(!empty($var_p5PlanoTopogra )){
                    $model->p5PlanoTopogra=$this->salvarImagen($encabezado,"Plano Topografico",$var_p5PlanoTopogra);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==5){
            try {
                $var_p5AnteproyectoLotificacionVialidad = UploadedFile::getInstance($model, 'p5AnteproyectoLotificacionVialidad');
                if(!empty($var_p5AnteproyectoLotificacionVialidad )){
                    $model->p5AnteproyectoLotificacionVialidad=$this->salvarImagen($encabezado,"Anteproyecto de Lotificacion de Vialidad",$var_p5AnteproyectoLotificacionVialidad);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==7){
            try {
                $var_p7Aprobacion = UploadedFile::getInstance($model, 'p7Aprobacion');
                if(!empty($var_p7Aprobacion )){
                    $model->p7Aprobacion=$this->salvarImagen($encabezado,"Aprobacion",$var_p7Aprobacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Solicitud = UploadedFile::getInstance($model, 'p8Solicitud');
                if(!empty($var_p8Solicitud )){
                    $model->p8Solicitud=$this->salvarImagen($encabezado,"Solicitud",$var_p8Solicitud);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8AcrediteCaracter = UploadedFile::getInstance($model, 'p8AcrediteCaracter');
                if(!empty($var_p8AcrediteCaracter )){
                    $model->p8AcrediteCaracter=$this->salvarImagen($encabezado,"Acredite Caracter",$var_p8AcrediteCaracter);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8ActaConstitutiva = UploadedFile::getInstance($model, 'p8ActaConstitutiva');
                if(!empty($var_p8ActaConstitutiva )){
                    $model->p8ActaConstitutiva=$this->salvarImagen($encabezado,"Acta Constitutiva",$var_p8ActaConstitutiva);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8LibertadGravamen = UploadedFile::getInstance($model, 'p8LibertadGravamen');
                if(!empty($var_p8LibertadGravamen )){
                    $model->p8LibertadGravamen=$this->salvarImagen($encabezado,"Libertad de Gravamen",$var_p8LibertadGravamen);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Minuta = UploadedFile::getInstance($model, 'p8Minuta');
                if(!empty($var_p8Minuta )){
                    $model->p8Minuta=$this->salvarImagen($encabezado,"Minuta",$var_p8Minuta);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8PlanoNomenclatura = UploadedFile::getInstance($model, 'p8PlanoNomenclatura');
                if(!empty($var_p8PlanoNomenclatura )){
                    $model->p8PlanoNomenclatura=$this->salvarImagen($encabezado,"Plano Nomenclatura",$var_p8PlanoNomenclatura);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8FactibilidadJapac = UploadedFile::getInstance($model, 'p8FactibilidadJapac');
                if(!empty($var_p8FactibilidadJapac )){
                    $model->p8FactibilidadJapac=$this->salvarImagen($encabezado,"Factibilidad de Japac",$var_p8FactibilidadJapac);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8FactibilidadCFE = UploadedFile::getInstance($model, 'p8FactibilidadCFE');
                if(!empty($var_p8FactibilidadCFE )){
                    $model->p8FactibilidadCFE=$this->salvarImagen($encabezado,"Factibilidad de CFE",$var_p8FactibilidadCFE);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8EstudiosHidrologico = UploadedFile::getInstance($model, 'p8EstudiosHidrologico');
                if(!empty($var_p8EstudiosHidrologico )){
                    $model->p8EstudiosHidrologico=$this->salvarImagen($encabezado,"Estudios de Hidrologico",$var_p8EstudiosHidrologico);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Alumbrado = UploadedFile::getInstance($model, 'p8Alumbrado');
                if(!empty($var_p8Alumbrado )){
                    $model->p8Alumbrado=$this->salvarImagen($encabezado,"Alumbrado",$var_p8Alumbrado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8ProteccionCivil = UploadedFile::getInstance($model, 'p8ProteccionCivil');
                if(!empty($var_p8ProteccionCivil )){
                    $model->p8ProteccionCivil=$this->salvarImagen($encabezado,"Proteccion Civil",$var_p8ProteccionCivil);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==8){
            try {
                $var_p8Vialidad = UploadedFile::getInstance($model, 'p8Vialidad');
                if(!empty($var_p8Vialidad )){
                    $model->p8Vialidad=$this->salvarImagen($encabezado,"Vialidad",$var_p8Vialidad);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==10){
            try {
                $var_p10Autorizacion = UploadedFile::getInstance($model, 'p10Autorizacion');
                if(!empty($var_p10Autorizacion )){
                    $model->p10Autorizacion=$this->salvarImagen($encabezado,"Autorizacion",$var_p10Autorizacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==2){
            try {
                $var_p3Expediente = UploadedFile::getInstance($model, 'p3Expediente');
                if(!empty($var_p3Expediente )){
                    $model->p3Expediente=$this->salvarImagen($encabezado,"Expediente",$var_p3Expediente);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==7){
            try {
                $var_p7PlanoLotificacionVialidad = UploadedFile::getInstance($model, 'p7PlanoLotificacionVialidad');
                if(!empty($var_p7PlanoLotificacionVialidad )){
                    $model->p7PlanoLotificacionVialidad=$this->salvarImagen($encabezado,"Plano Lotificacion y Vialidad",$var_p7PlanoLotificacionVialidad);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_P11MemoriaFraccionamiento = UploadedFile::getInstance($model, 'P11MemoriaFraccionamiento');
                if(!empty($var_P11MemoriaFraccionamiento )){
                    $model->P11MemoriaFraccionamiento=$this->salvarImagen($encabezado,"Memoria Fraccionamiento",$var_P11MemoriaFraccionamiento);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11EstudioMecanicaEstructura = UploadedFile::getInstance($model, 'p11EstudioMecanicaEstructura');
                if(!empty($var_p11EstudioMecanicaEstructura )){
                    $model->p11EstudioMecanicaEstructura=$this->salvarImagen($encabezado,"Estudio de Mecanica Estructural",$var_p11EstudioMecanicaEstructura);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11MemoriaAguaAlcantarillado = UploadedFile::getInstance($model, 'p11MemoriaAguaAlcantarillado');
                if(!empty($var_p11MemoriaAguaAlcantarillado )){
                    $model->p11MemoriaAguaAlcantarillado=$this->salvarImagen($encabezado,"Memoria Agua Alcantarillado",$var_p11MemoriaAguaAlcantarillado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11MemoriaElectrificacion = UploadedFile::getInstance($model, 'p11MemoriaElectrificacion');
                if(!empty($var_p11MemoriaElectrificacion )){
                    $model->p11MemoriaElectrificacion=$this->salvarImagen($encabezado,"Memoria de Electrificacion",$var_p11MemoriaElectrificacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11MemoriaInfraestructura = UploadedFile::getInstance($model, 'p11MemoriaInfraestructura');
                if(!empty($var_p11MemoriaInfraestructura )){
                    $model->p11MemoriaInfraestructura=$this->salvarImagen($encabezado,"Memoria de Infraestructura",$var_p11MemoriaInfraestructura);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11MemoriaHidrologico = UploadedFile::getInstance($model, 'p11MemoriaHidrologico');
                if(!empty($var_p11MemoriaHidrologico )){
                    $model->p11MemoriaHidrologico=$this->salvarImagen($encabezado,"Memoria de Hidrologica",$var_p11MemoriaHidrologico);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11Presupuesto = UploadedFile::getInstance($model, 'p11Presupuesto');
                if(!empty($var_p11Presupuesto )){
                    $model->p11Presupuesto=$this->salvarImagen($encabezado,"Presupuesto",$var_p11Presupuesto);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11EstimarPlazo = UploadedFile::getInstance($model, 'p11EstimarPlazo');
                if(!empty($var_p11EstimarPlazo )){
                    $model->p11EstimarPlazo=$this->salvarImagen($encabezado,"Estimar Plazo",$var_p11EstimarPlazo);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PagoSupervision = UploadedFile::getInstance($model, 'p11PagoSupervision');
                if(!empty($var_p11PagoSupervision )){
                    $model->p11PagoSupervision=$this->salvarImagen($encabezado,"Pago Supervision",$var_p11PagoSupervision);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11GarantiaCumplimiento = UploadedFile::getInstance($model, 'p11GarantiaCumplimiento');
                if(!empty($var_p11GarantiaCumplimiento )){
                    $model->p11GarantiaCumplimiento=$this->salvarImagen($encabezado,"Garantia de Cumplimiento",$var_p11GarantiaCumplimiento);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11OtorgarEscrituras = UploadedFile::getInstance($model, 'p11OtorgarEscrituras');
                if(!empty($var_p11OtorgarEscrituras )){
                    $model->p11OtorgarEscrituras=$this->salvarImagen($encabezado,"Otorgar Escrituras",$var_p11OtorgarEscrituras);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoLocalizacion = UploadedFile::getInstance($model, 'p11PlanoLocalizacion');
                if(!empty($var_p11PlanoLocalizacion )){
                    $model->p11PlanoLocalizacion=$this->salvarImagen($encabezado,"Plano de Lozalizacion",$var_p11PlanoLocalizacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoTopografico = UploadedFile::getInstance($model, 'p11PlanoTopografico');
                if(!empty($var_p11PlanoTopografico )){
                    $model->p11PlanoTopografico=$this->salvarImagen($encabezado,"Plano Topografico",$var_p11PlanoTopografico);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoLotificacion = UploadedFile::getInstance($model, 'p11PlanoLotificacion');
                if(!empty($var_p11PlanoLotificacion )){
                    $model->p11PlanoLotificacion=$this->salvarImagen($encabezado,"Plano de Lotificacion",$var_p11PlanoLotificacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoTrazo = UploadedFile::getInstance($model, 'p11PlanoTrazo');
                if(!empty($var_p11PlanoTrazo )){
                    $model->p11PlanoTrazo=$this->salvarImagen($encabezado,"Plano de Trazo",$var_p11PlanoTrazo);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoPerfiles = UploadedFile::getInstance($model, 'p11PlanoPerfiles');
                if(!empty($var_p11PlanoPerfiles )){
                    $model->p11PlanoPerfiles=$this->salvarImagen($encabezado,"Plano de Perfiles",$var_p11PlanoPerfiles);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoAguaPotable = UploadedFile::getInstance($model, 'p11PlanoAguaPotable');
                if(!empty($var_p11PlanoAguaPotable )){
                    $model->p11PlanoAguaPotable=$this->salvarImagen($encabezado,"Plano de Agua Potable",$var_p11PlanoAguaPotable);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoElectrificacion = UploadedFile::getInstance($model, 'p11PlanoElectrificacion');
                if(!empty($var_p11PlanoElectrificacion )){
                    $model->p11PlanoElectrificacion=$this->salvarImagen($encabezado,"Plano de Electrificacion",$var_p11PlanoElectrificacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoAlumbrado = UploadedFile::getInstance($model, 'p11PlanoAlumbrado');
                if(!empty($var_p11PlanoAlumbrado )){
                    $model->p11PlanoAlumbrado=$this->salvarImagen($encabezado,"Plano de Alumbrado",$var_p11PlanoAlumbrado);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11PlanoArborizacion = UploadedFile::getInstance($model, 'p11PlanoArborizacion');
                if(!empty($var_p11PlanoArborizacion )){
                    $model->p11PlanoArborizacion=$this->salvarImagen($encabezado,"Plano Arborizacion",$var_p11PlanoArborizacion);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11ResolucionImpactoAmbiental = UploadedFile::getInstance($model, 'p11ResolucionImpactoAmbiental');
                if(!empty($var_p11ResolucionImpactoAmbiental )){
                    $model->p11ResolucionImpactoAmbiental=$this->salvarImagen($encabezado,"Resolucion de Impacto Ambiental",$var_p11ResolucionImpactoAmbiental);

            }
            } catch (Exception $e) {
                
            }
        }
        if($pasoIndex==11){
            try {
                $var_p11ProyectoVialTransporte = UploadedFile::getInstance($model, 'p11ProyectoVialTransporte');
                if(!empty($var_p11ProyectoVialTransporte )){
                    $model->p11ProyectoVialTransporte=$this->salvarImagen($encabezado,"Proyecto vial y Transporte",$var_p11ProyectoVialTransporte);

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
     * Creates a new TramitesAutorizacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TramitesAutorizacion();
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing TramitesAutorizacion model.
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
     * Deletes an existing TramitesAutorizacion model.
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
     * Finds the TramitesAutorizacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TramitesAutorizacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TramitesAutorizacion::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
