<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tramites".
 *
 * @property integer $id
 * @property integer $pasoActualId
 * @property integer $tipoTramiteId
 *
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class TramiteZonificacion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2002; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1_nombreSolicitante', 'p1_direccionSolicitante', 'p1_telefonoSolicitante', 'p1_correoSolicitante', 'p1_firmaSolicitante', 'p1_usoActual', 'p1_usoSolicitado', 'p1_descriProceso', 'p1_noCajones', 'p2_escrituras', 'p2_reciboDerechos', 'p2_croquisUbicacion', 'p1_callePredio', 'p1_coloniaPredio', 'p1_numeroOficialPredio', 'p1_numeroInteriorPredio', 'p1_pobladoPredio', 'p1_sindicaturaPredio', 'p1_claveCatastralPredio', 'p1_superficiePredio', 'p1_nortePredio', 'p1_surPredio', 'p1_orientePredio', 'p1_ponientePredio', 'p1_nombrePropietario', 'p1_direccionPropietario', 'p1_telefonoPropietario', 'p1_correoPropietario', 'p1_firmaPropietario', 'p1_plantabajaConstruida', 'p1_plantaaltaConstruida', 'p1_segundonivelConstruida', 'p1_otrosConstruida', 'p1_plantabajaXConstruir', 'p1_plantaaltaXConstruir', 'p1_segundonivelXConstruir', 'p1_otrosXConstruir', 'p1_totalConstruida', 'p1_totalXConstruir', 'p1_observaciones', 'p1_nombreGestor', 'p1_direccionGestor', 'p1_telefonoGestor', 'p1_correoGestor', 'p1_firmaGestor', 'solicitud', 'escrituras', 'reciboDerechos', 'croquisUbicacion', 'p2_pago', 'p4_imprimir'], 'string'],
                [['p3_pago', 'p3_escrituras', 'p3_reciboDerechos', 'p3_croquisUbicacion'], 'integer'],
                [['p3_pago', 'p3_escrituras', 'p3_reciboDerechos', 'p3_croquisUbicacion'], 'required', 'on'=>'5'],
                [['p1_nombreSolicitante', 'p1_correoSolicitante', 'p1_firmaSolicitante', 'p1_usoActual', 'p1_usoSolicitado', 'p1_callePredio', 'p1_coloniaPredio', 'p1_pobladoPredio', 'p1_sindicaturaPredio', 'p1_nombrePropietario', 'p1_correoPropietario', 'p1_firmaPropietario', 'p1_nombreGestor', 'p1_correoGestor', 'p1_firmaGestor'], 'string', 'max' => 50],
                [['p1_direccionSolicitante', 'p1_descriProceso', 'p1_direccionPropietario', 'p1_observaciones', 'p1_direccionGestor'], 'string', 'max' => 500],
                [['p1_telefonoSolicitante', 'p1_noCajones', 'p1_numeroOficialPredio', 'p1_numeroInteriorPredio', 'p1_telefonoPropietario', 'p1_telefonoGestor'], 'string', 'max' => 20],
                [['p2_escrituras', 'p2_reciboDerechos', 'p2_croquisUbicacion', 'solicitud', 'escrituras', 'reciboDerechos', 'croquisUbicacion', 'p2_pago', 'p4_imprimir'], 'string', 'max' => 1],
                [['p1_claveCatastralPredio'], 'string', 'max' => 30],
                [['p1_superficiePredio', 'p1_nortePredio', 'p1_surPredio', 'p1_orientePredio', 'p1_ponientePredio', 'p1_plantabajaConstruida', 'p1_plantaaltaConstruida', 'p1_segundonivelConstruida', 'p1_otrosConstruida', 'p1_plantabajaXConstruir', 'p1_plantaaltaXConstruir', 'p1_segundonivelXConstruir', 'p1_otrosXConstruir', 'p1_totalConstruida', 'p1_totalXConstruir'], 'string', 'max' => 8]];

        
            
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pasoActualId' => 'Paso Actual ID',
            'tipoTramiteId' => 'Tipo Tramite ID',
            'p1_nombreSolicitante' => 'Nombre',
            'p1_direccionSolicitante' => 'Direccion',
            'p1_telefonoSolicitante' => 'Telefono',
            'p1_correoSolicitante' => 'Correo',
            'p1_firmaSolicitante' => 'Firma',
            'p1_usoActual' => 'Uso Actual',
            'p1_usoSolicitado' => 'Uso Solicitado',
            'p1_descriProceso' => 'Descripción del Proceso',
            'p1_noCajones' => 'No. Cajones de Estacionamiento con que cuenta el Establecimiento',
            'p2_escrituras' => 'Copia de Escrituras',
            'p2_reciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'p2_croquisUbicacion' => 'Croquis de Ubicacion',
            'p1_callePredio' => 'calle',
            'p1_coloniaPredio' => 'fraccionamiento o colonia',
            'p1_numeroOficialPredio' => 'numero oficial',
            'p1_numeroInteriorPredio' => 'numero interior',
            'p1_pobladoPredio' => 'Poblado',
            'p1_sindicaturaPredio' => 'Sindicatura',
            'p1_claveCatastralPredio' => 'Clave Catastral',
            'p1_superficiePredio' => 'Superficie del predio',
            'p1_nortePredio' => 'Norte',
            'p1_surPredio' => 'sur',
            'p1_orientePredio' => 'oriente',
            'p1_ponientePredio' => 'poniente',
            'p1_nombrePropietario' => 'Nombre',
            'p1_direccionPropietario' => 'Direccion',
            'p1_telefonoPropietario' => 'telefono',
            'p1_correoPropietario' => 'Correo',
            'p1_firmaPropietario' => 'Firma',
            'p1_plantabajaConstruida' => 'plantabaja',
            'p1_plantaaltaConstruida' => 'plantaalta',
            'p1_segundonivelConstruida' => 'segundonivel',
            'p1_otrosConstruida' => 'otros',
            'p1_plantabajaXConstruir' => 'plantabaja',
            'p1_plantaaltaXConstruir' => 'plantaalta',
            'p1_segundonivelXConstruir' => 'segundonivel',
            'p1_otrosXConstruir' => 'otros',
            'p1_totalConstruida' => 'total',
            'p1_totalXConstruir' => 'total1',
            'p1_observaciones' => 'observaciones',
            'p1_nombreGestor' => 'Nombre',
            'p1_direccionGestor' => 'Direccion',
            'p1_telefonoGestor' => 'telefono',
            'p1_correoGestor' => 'Correo',
            'p1_firmaGestor' => 'Firma',
            'p3_pago' => 'Solicitud',
            'p3_escrituras' => 'Copia de Escrituras',
            'p3_reciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'p3_croquisUbicacion' => 'Croquis de Ubicacion',
            'solicitud' => 'Solicitud',
            'escrituras' => 'Copia de Escrituras',
            'reciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'croquisUbicacion' => 'Croquis de Ubicacion',
            'p2_pago' => 'Pago',
            'p4_imprimir' => 'Imprimir',
        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1020,3)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1020,3);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1021,3)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1021,3);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1022,3)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1022,3);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1023,3)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1023,3);
        $atributo->valor = $value;
    }
    public function getP1FirmaSolicitante()
    {
        return (string) $this->retriveAttr(1024,3)->valor; 
    }
    public function setP1FirmaSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1024,3);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1025,3)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1025,3);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1026,3)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1026,3);
        $atributo->valor = $value;
    }
    public function getP1DescriProceso()
    {
        return (string) $this->retriveAttr(1027,3)->valor; 
    }
    public function setP1DescriProceso($value)
    {   
        $atributo=$this->retriveAttr(1027,3);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1028,3)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1028,3);
        $atributo->valor = $value;
    }
    public function getP2Escrituras()
    {
        return (string) $this->retriveAttr(1030,4)->valor; 
    }
    public function setP2Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1030,4);
        $atributo->valor = $value;
    }
    public function getP2ReciboDerechos()
    {
        return (string) $this->retriveAttr(1032,4)->valor; 
    }
    public function setP2ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1032,4);
        $atributo->valor = $value;
    }
    public function getP2CroquisUbicacion()
    {
        return (string) $this->retriveAttr(1034,4)->valor; 
    }
    public function setP2CroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1034,4);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1059,3)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1059,3);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1060,3)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1060,3);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficialPredio()
    {
        return (string) $this->retriveAttr(1061,3)->valor; 
    }
    public function setP1NumeroOficialPredio($value)
    {   
        $atributo=$this->retriveAttr(1061,3);
        $atributo->valor = $value;
    }
    public function getP1NumeroInteriorPredio()
    {
        return (string) $this->retriveAttr(1062,3)->valor; 
    }
    public function setP1NumeroInteriorPredio($value)
    {   
        $atributo=$this->retriveAttr(1062,3);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1063,3)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1063,3);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1064,3)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1064,3);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1065,3)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1065,3);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (string) $this->retriveAttr(1066,3)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1066,3);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (string) $this->retriveAttr(1067,3)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1067,3);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (string) $this->retriveAttr(1068,3)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1068,3);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (string) $this->retriveAttr(1069,3)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1069,3);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (string) $this->retriveAttr(1070,3)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1070,3);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietario()
    {
        return (string) $this->retriveAttr(1071,3)->valor; 
    }
    public function setP1NombrePropietario($value)
    {   
        $atributo=$this->retriveAttr(1071,3);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietario()
    {
        return (string) $this->retriveAttr(1072,3)->valor; 
    }
    public function setP1DireccionPropietario($value)
    {   
        $atributo=$this->retriveAttr(1072,3);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietario()
    {
        return (string) $this->retriveAttr(1073,3)->valor; 
    }
    public function setP1TelefonoPropietario($value)
    {   
        $atributo=$this->retriveAttr(1073,3);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietario()
    {
        return (string) $this->retriveAttr(1074,3)->valor; 
    }
    public function setP1CorreoPropietario($value)
    {   
        $atributo=$this->retriveAttr(1074,3);
        $atributo->valor = $value;
    }
    public function getP1FirmaPropietario()
    {
        return (string) $this->retriveAttr(1075,3)->valor; 
    }
    public function setP1FirmaPropietario($value)
    {   
        $atributo=$this->retriveAttr(1075,3);
        $atributo->valor = $value;
    }
    public function getP1PlantabajaConstruida()
    {
        return (string) $this->retriveAttr(1076,3)->valor; 
    }
    public function setP1PlantabajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1076,3);
        $atributo->valor = $value;
    }
    public function getP1PlantaaltaConstruida()
    {
        return (string) $this->retriveAttr(1077,3)->valor; 
    }
    public function setP1PlantaaltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1077,3);
        $atributo->valor = $value;
    }
    public function getP1SegundonivelConstruida()
    {
        return (string) $this->retriveAttr(1078,3)->valor; 
    }
    public function setP1SegundonivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1078,3);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (string) $this->retriveAttr(1079,3)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1079,3);
        $atributo->valor = $value;
    }
    public function getP1PlantabajaXConstruir()
    {
        return (string) $this->retriveAttr(1080,3)->valor; 
    }
    public function setP1PlantabajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1080,3);
        $atributo->valor = $value;
    }
    public function getP1PlantaaltaXConstruir()
    {
        return (string) $this->retriveAttr(1081,3)->valor; 
    }
    public function setP1PlantaaltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1081,3);
        $atributo->valor = $value;
    }
    public function getP1SegundonivelXConstruir()
    {
        return (string) $this->retriveAttr(1083,3)->valor; 
    }
    public function setP1SegundonivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1083,3);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (string) $this->retriveAttr(1084,3)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1084,3);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (string) $this->retriveAttr(1085,3)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1085,3);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (string) $this->retriveAttr(1086,3)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1086,3);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1087,3)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1087,3);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1089,3)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1089,3);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1090,3)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1090,3);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1091,3)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1091,3);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1092,3)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1092,3);
        $atributo->valor = $value;
    }
    public function getP1FirmaGestor()
    {
        return (string) $this->retriveAttr(1093,3)->valor; 
    }
    public function setP1FirmaGestor($value)
    {   
        $atributo=$this->retriveAttr(1093,3);
        $atributo->valor = $value;
    }
    public function getP3Pago()
    {
        return (bool) $this->retriveAttr(1094,5)->valor; 
    }
    public function setP3Pago($value)
    {   
        $atributo=$this->retriveAttr(1094,5);
        $atributo->valor = $value;
    }
    public function getP3Escrituras()
    {
        return (bool) $this->retriveAttr(1095,5)->valor; 
    }
    public function setP3Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1095,5);
        $atributo->valor = $value;
    }
    public function getP3ReciboDerechos()
    {
        return (bool) $this->retriveAttr(1096,5)->valor; 
    }
    public function setP3ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1096,5);
        $atributo->valor = $value;
    }
    public function getP3CroquisUbicacion()
    {
        return (bool) $this->retriveAttr(1098,5)->valor; 
    }
    public function setP3CroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1098,5);
        $atributo->valor = $value;
    }
    public function getSolicitud()
    {
        return (string) $this->retriveAttr(1123,6)->valor; 
    }
    public function setSolicitud($value)
    {   
        $atributo=$this->retriveAttr(1123,6);
        $atributo->valor = $value;
    }
    public function getEscrituras()
    {
        return (string) $this->retriveAttr(1124,6)->valor; 
    }
    public function setEscrituras($value)
    {   
        $atributo=$this->retriveAttr(1124,6);
        $atributo->valor = $value;
    }
    public function getReciboDerechos()
    {
        return (string) $this->retriveAttr(1125,6)->valor; 
    }
    public function setReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1125,6);
        $atributo->valor = $value;
    }
    public function getCroquisUbicacion()
    {
        return (string) $this->retriveAttr(1126,6)->valor; 
    }
    public function setCroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1126,6);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return (string) $this->retriveAttr(1127,4)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(1127,4);
        $atributo->valor = $value;
    }
    public function getP4Imprimir()
    {
        return (string) $this->retriveAttr(1128,7)->valor; 
    }
    public function setP4Imprimir($value)
    {   
        $atributo=$this->retriveAttr(1128,7);
        $atributo->valor = $value;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasoActual()
    {
        return $this->hasOne(PasosTramite::className(), ['id' => 'pasoActualId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTramite()
    {
        $this->tipoTramiteId = $this->tipoDeTramite();
        return $this->hasOne(TiposTramite::className(), ['id' => 'tipoTramiteId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresTramites()
    {
        return $this->hasMany(ValoresTramite::className(), ['tramiteId' => 'id']);
    }
}
