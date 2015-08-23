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
        
            
            return [[['constanciaZonificacion', 'contruccionNueva', 'ampliacion', 'remodelacion', 'regularizacion', 'aperturaEmpresa', 'licUsoSuelo', 'relotificacion', 'autorizacionFracc', 'regimenCondominio', 'certificadoOcupacion', 'otros', 'solicitud', 'escrituras', 'reciboDerechos', 'estadoPredial', 'croquisUbicacion', 'alineamiento', 'croquisActual', 'copiaPropuestaRelitificacion', 'predioCuadroConstruccion', 'copiasProyecto', 'constanciaZonificacion2', 'calculoEstructural', 'constanciaTramiteTelmex', 'serviciosJapac', 'servicioCFE', 'dictamenAmbiental', 'dictamenVial', 'opinionBomberos', 'dictamenPC', 'dictamenINAH', 'dictamenSEPyC', 'anuenciaTortilla', 'aprovacionAeronautica', 'anuenciaVecinos', 'polizaSeguro', 'dictamenCultural', 'otros1', 'otros2', 'otros3'], 'integer'],
                [['especifique', 'nombre', 'direccion', 'telefono', 'correo', 'firma', 'usoActual', 'usoSolicitado', 'descripcionProceso', 'cajonesEstacionamiento', 'claveCatastral', 'calle', 'coloniaFraccionamiento', 'numeroOficial', 'numeroInterior', 'poblado', 'sindicatura', 'claveCatastral2', 'superficiePredio', 'norte', 'sur', 'oriente', 'poniente', 'nombreSolicitante', 'direccionSolicitante', 'telefonoSolicitante', 'correoSolicitante', 'firmaSolicitante', 'plantaBaja', 'plantaAlta', 'segundoNivel', 'otros4', 'plantaBaja1', 'plantaAlta1', 'plantaAlta2', 'segundoNivel1', 'otros5', 'total', 'total1', 'observaciones', 'sellos', 'nombreGestor', 'direccionGestor', 'telefonoGestor', 'correoGestor', 'firmaGestor'], 'string'],
                [['constanciaZonificacion', 'contruccionNueva', 'ampliacion', 'remodelacion', 'regularizacion', 'aperturaEmpresa', 'licUsoSuelo', 'relotificacion', 'autorizacionFracc', 'regimenCondominio', 'certificadoOcupacion', 'otros', 'especifique', 'nombre', 'direccion', 'telefono', 'correo', 'firma', 'usoActual', 'usoSolicitado', 'descripcionProceso', 'cajonesEstacionamiento', 'solicitud', 'escrituras', 'claveCatastral', 'reciboDerechos', 'estadoPredial', 'croquisUbicacion', 'alineamiento', 'croquisActual', 'copiaPropuestaRelitificacion', 'predioCuadroConstruccion', 'copiasProyecto', 'constanciaZonificacion2', 'calculoEstructural', 'constanciaTramiteTelmex', 'serviciosJapac', 'servicioCFE', 'dictamenAmbiental', 'dictamenVial', 'opinionBomberos', 'dictamenPC', 'dictamenINAH', 'dictamenSEPyC', 'anuenciaTortilla', 'aprovacionAeronautica', 'anuenciaVecinos', 'polizaSeguro', 'dictamenCultural', 'otros1', 'otros2', 'otros3', 'calle', 'coloniaFraccionamiento', 'numeroOficial', 'numeroInterior', 'poblado', 'sindicatura', 'claveCatastral2', 'superficiePredio', 'norte', 'sur', 'oriente', 'poniente', 'nombreSolicitante', 'direccionSolicitante', 'telefonoSolicitante', 'correoSolicitante', 'firmaSolicitante', 'plantaBaja', 'plantaAlta', 'segundoNivel', 'otros4', 'plantaBaja1', 'plantaAlta1', 'plantaAlta2', 'segundoNivel1', 'otros5', 'total', 'total1', 'observaciones', 'sellos', 'nombreGestor', 'direccionGestor', 'telefonoGestor', 'correoGestor', 'firmaGestor'], 'required', 'on'=>'3'],
                [['especifique', 'direccion', 'descripcionProceso', 'direccionSolicitante', 'observaciones', 'sellos', 'direccionGestor'], 'string', 'max' => 500],
                [['nombre', 'correo', 'firma', 'usoActual', 'usoSolicitado', 'calle', 'coloniaFraccionamiento', 'poblado', 'sindicatura', 'nombreSolicitante', 'correoSolicitante', 'firmaSolicitante', 'nombreGestor', 'correoGestor', 'firmaGestor'], 'string', 'max' => 50],
                [['telefono', 'cajonesEstacionamiento', 'numeroOficial', 'numeroInterior', 'telefonoSolicitante', 'telefonoGestor'], 'string', 'max' => 20],
                [['claveCatastral', 'claveCatastral2'], 'string', 'max' => 30],
                [['superficiePredio', 'norte', 'sur', 'oriente', 'poniente', 'plantaBaja', 'plantaAlta', 'segundoNivel', 'otros4', 'plantaBaja1', 'plantaAlta1', 'plantaAlta2', 'segundoNivel1', 'otros5', 'total', 'total1'], 'string', 'max' => 8]];

        
            
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
            'constanciaZonificacion' => 'Constancia de Zonificacion',
            'contruccionNueva' => 'Construccion Nueva',
            'ampliacion' => 'Ampliacion',
            'remodelacion' => 'Remodelacion',
            'regularizacion' => 'Regularizacion',
            'aperturaEmpresa' => 'Apertura de Empresa',
            'licUsoSuelo' => 'Licencia de Uso de Suelo',
            'relotificacion' => 'Relotificacion y/o Fusion de Predio',
            'autorizacionFracc' => 'Autorizacion de Fraccionamiento',
            'regimenCondominio' => 'Regimen en Condominio',
            'certificadoOcupacion' => 'Certificado de Ocupacion',
            'otros' => 'Otros',
            'especifique' => 'Especifique',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'firma' => 'Firma',
            'usoActual' => 'Uso Actual',
            'usoSolicitado' => 'Uso Solicitado',
            'descripcionProceso' => 'Descripcion del Proceso',
            'cajonesEstacionamiento' => 'No. Cajones de Estacionamiento con que cuenta el Establecimiento',
            'solicitud' => 'Solicitud',
            'escrituras' => 'Copia de Escrituras',
            'claveCatastral' => 'Clave Catastral',
            'reciboDerechos' => 'Recibo de Pago de Derechos Correspondientes',
            'estadoPredial' => 'Estado de Cuenta o Recibo de Predial al Corriente',
            'croquisUbicacion' => 'Croquis de Ubicacion',
            'alineamiento' => 'Alineamiento y Numero Oficial',
            'croquisActual' => 'Croquis del Estado Actual del Predio',
            'copiaPropuestaRelitificacion' => '2 Copias de la Propuesta de Relotificacion y/o Fusion',
            'predioCuadroConstruccion' => 'Predio con Cuadro de Construccion, Impreso y Digital',
            'copiasProyecto' => '2 Copias del Proyecto Arquitectonico Impresas Anexar CD con el Proyecto (Autocad 2004)',
            'constanciaZonificacion2' => 'Constancia de Zonificacion',
            'calculoEstructural' => 'Calculo Estructural',
            'constanciaTramiteTelmex' => 'Constancia de Tramite de Pemex',
            'serviciosJapac' => 'Servicios de Agua Potable Japac',
            'servicioCFE' => 'Servicio de Energia Electrica CFE',
            'dictamenAmbiental' => 'Dictamen de Impacto Ambiental',
            'dictamenVial' => 'Dictamen de Impacto Vial',
            'opinionBomberos' => 'Opinion Favorable de Bomberos',
            'dictamenPC' => 'Dictamen Procedente de la Unidad de Proteccion Civil',
            'dictamenINAH' => 'Dictamen Favorable del INAH',
            'dictamenSEPyC' => 'Dictamen Procedente de SEP Y C',
            'anuenciaTortilla' => 'Anuencia de la Union Industria de la Masa y la Tortilla',
            'aprovacionAeronautica' => 'Aprobacion de la Direccion de Aeronautica Civil',
            'anuenciaVecinos' => 'Anuencia de Vecinos',
            'polizaSeguro' => 'Poliza de Seguros Contra Daños a Terceros',
            'dictamenCultural' => 'Dictamen de Seguridad Estructural',
            'otros1' => 'Otros',
            'otros2' => 'otros',
            'otros3' => 'otros',
            'calle' => 'calle',
            'coloniaFraccionamiento' => 'fraccionamiento o colonia',
            'numeroOficial' => 'numero oficial',
            'numeroInterior' => 'numero interior',
            'poblado' => 'Poblado',
            'sindicatura' => 'Sindicatura',
            'claveCatastral2' => 'Clave Catastral',
            'superficiePredio' => 'Superficie del predio',
            'norte' => 'Norte',
            'sur' => 'sur',
            'oriente' => 'oriente',
            'poniente' => 'poniente',
            'nombreSolicitante' => 'Nombre',
            'direccionSolicitante' => 'Direccion',
            'telefonoSolicitante' => 'telefono',
            'correoSolicitante' => 'Correo',
            'firmaSolicitante' => 'Firma',
            'plantaBaja' => 'plantabaja',
            'plantaAlta' => 'plantaalta',
            'segundoNivel' => 'segundonivel',
            'otros4' => 'otros',
            'plantaBaja1' => 'plantabaja',
            'plantaAlta1' => 'plantaalta',
            'plantaAlta2' => 'plantaalta',
            'segundoNivel1' => 'segundonivel',
            'otros5' => 'otros',
            'total' => 'total',
            'total1' => 'total1',
            'observaciones' => 'observaciones',
            'sellos' => 'sellos',
            'nombreGestor' => 'Nombre',
            'direccionGestor' => 'Direccion',
            'telefonoGestor' => 'telefono',
            'correoGestor' => 'Correo',
            'firmaGestor' => 'Firma',
        ];
    }

    public function getConstanciaZonificacion()
    {
        return (bool) $this->retriveAttr(1007,3)->valor; 
    }
    public function setConstanciaZonificacion($value)
    {   
        $atributo=$this->retriveAttr(1007,3);
        $atributo->valor = $value;
    }
    public function getContruccionNueva()
    {
        return (bool) $this->retriveAttr(1008,3)->valor; 
    }
    public function setContruccionNueva($value)
    {   
        $atributo=$this->retriveAttr(1008,3);
        $atributo->valor = $value;
    }
    public function getAmpliacion()
    {
        return (bool) $this->retriveAttr(1009,3)->valor; 
    }
    public function setAmpliacion($value)
    {   
        $atributo=$this->retriveAttr(1009,3);
        $atributo->valor = $value;
    }
    public function getRemodelacion()
    {
        return (bool) $this->retriveAttr(1010,3)->valor; 
    }
    public function setRemodelacion($value)
    {   
        $atributo=$this->retriveAttr(1010,3);
        $atributo->valor = $value;
    }
    public function getRegularizacion()
    {
        return (bool) $this->retriveAttr(1011,3)->valor; 
    }
    public function setRegularizacion($value)
    {   
        $atributo=$this->retriveAttr(1011,3);
        $atributo->valor = $value;
    }
    public function getAperturaEmpresa()
    {
        return (bool) $this->retriveAttr(1012,3)->valor; 
    }
    public function setAperturaEmpresa($value)
    {   
        $atributo=$this->retriveAttr(1012,3);
        $atributo->valor = $value;
    }
    public function getLicUsoSuelo()
    {
        return (bool) $this->retriveAttr(1013,3)->valor; 
    }
    public function setLicUsoSuelo($value)
    {   
        $atributo=$this->retriveAttr(1013,3);
        $atributo->valor = $value;
    }
    public function getRelotificacion()
    {
        return (bool) $this->retriveAttr(1014,3)->valor; 
    }
    public function setRelotificacion($value)
    {   
        $atributo=$this->retriveAttr(1014,3);
        $atributo->valor = $value;
    }
    public function getAutorizacionFracc()
    {
        return (bool) $this->retriveAttr(1015,3)->valor; 
    }
    public function setAutorizacionFracc($value)
    {   
        $atributo=$this->retriveAttr(1015,3);
        $atributo->valor = $value;
    }
    public function getRegimenCondominio()
    {
        return (bool) $this->retriveAttr(1016,3)->valor; 
    }
    public function setRegimenCondominio($value)
    {   
        $atributo=$this->retriveAttr(1016,3);
        $atributo->valor = $value;
    }
    public function getCertificadoOcupacion()
    {
        return (bool) $this->retriveAttr(1017,3)->valor; 
    }
    public function setCertificadoOcupacion($value)
    {   
        $atributo=$this->retriveAttr(1017,3);
        $atributo->valor = $value;
    }
    public function getOtros()
    {
        return (bool) $this->retriveAttr(1018,3)->valor; 
    }
    public function setOtros($value)
    {   
        $atributo=$this->retriveAttr(1018,3);
        $atributo->valor = $value;
    }
    public function getEspecifique()
    {
        return (string) $this->retriveAttr(1019,3)->valor; 
    }
    public function setEspecifique($value)
    {   
        $atributo=$this->retriveAttr(1019,3);
        $atributo->valor = $value;
    }
    public function getNombre()
    {
        return (string) $this->retriveAttr(1020,3)->valor; 
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(1020,3);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(1021,3)->valor; 
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(1021,3);
        $atributo->valor = $value;
    }
    public function getTelefono()
    {
        return (string) $this->retriveAttr(1022,3)->valor; 
    }
    public function setTelefono($value)
    {   
        $atributo=$this->retriveAttr(1022,3);
        $atributo->valor = $value;
    }
    public function getCorreo()
    {
        return (string) $this->retriveAttr(1023,3)->valor; 
    }
    public function setCorreo($value)
    {   
        $atributo=$this->retriveAttr(1023,3);
        $atributo->valor = $value;
    }
    public function getFirma()
    {
        return (string) $this->retriveAttr(1024,3)->valor; 
    }
    public function setFirma($value)
    {   
        $atributo=$this->retriveAttr(1024,3);
        $atributo->valor = $value;
    }
    public function getUsoActual()
    {
        return (string) $this->retriveAttr(1025,3)->valor; 
    }
    public function setUsoActual($value)
    {   
        $atributo=$this->retriveAttr(1025,3);
        $atributo->valor = $value;
    }
    public function getUsoSolicitado()
    {
        return (string) $this->retriveAttr(1026,3)->valor; 
    }
    public function setUsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1026,3);
        $atributo->valor = $value;
    }
    public function getDescripcionProceso()
    {
        return (string) $this->retriveAttr(1027,3)->valor; 
    }
    public function setDescripcionProceso($value)
    {   
        $atributo=$this->retriveAttr(1027,3);
        $atributo->valor = $value;
    }
    public function getCajonesEstacionamiento()
    {
        return (string) $this->retriveAttr(1028,3)->valor; 
    }
    public function setCajonesEstacionamiento($value)
    {   
        $atributo=$this->retriveAttr(1028,3);
        $atributo->valor = $value;
    }
    public function getSolicitud()
    {
        return (bool) $this->retriveAttr(1029,3)->valor; 
    }
    public function setSolicitud($value)
    {   
        $atributo=$this->retriveAttr(1029,3);
        $atributo->valor = $value;
    }
    public function getEscrituras()
    {
        return (bool) $this->retriveAttr(1030,3)->valor; 
    }
    public function setEscrituras($value)
    {   
        $atributo=$this->retriveAttr(1030,3);
        $atributo->valor = $value;
    }
    public function getClaveCatastral()
    {
        return (string) $this->retriveAttr(1031,3)->valor; 
    }
    public function setClaveCatastral($value)
    {   
        $atributo=$this->retriveAttr(1031,3);
        $atributo->valor = $value;
    }
    public function getReciboDerechos()
    {
        return (bool) $this->retriveAttr(1032,3)->valor; 
    }
    public function setReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1032,3);
        $atributo->valor = $value;
    }
    public function getEstadoPredial()
    {
        return (bool) $this->retriveAttr(1033,3)->valor; 
    }
    public function setEstadoPredial($value)
    {   
        $atributo=$this->retriveAttr(1033,3);
        $atributo->valor = $value;
    }
    public function getCroquisUbicacion()
    {
        return (bool) $this->retriveAttr(1034,3)->valor; 
    }
    public function setCroquisUbicacion($value)
    {   
        $atributo=$this->retriveAttr(1034,3);
        $atributo->valor = $value;
    }
    public function getAlineamiento()
    {
        return (bool) $this->retriveAttr(1035,3)->valor; 
    }
    public function setAlineamiento($value)
    {   
        $atributo=$this->retriveAttr(1035,3);
        $atributo->valor = $value;
    }
    public function getCroquisActual()
    {
        return (bool) $this->retriveAttr(1036,3)->valor; 
    }
    public function setCroquisActual($value)
    {   
        $atributo=$this->retriveAttr(1036,3);
        $atributo->valor = $value;
    }
    public function getCopiaPropuestaRelitificacion()
    {
        return (bool) $this->retriveAttr(1037,3)->valor; 
    }
    public function setCopiaPropuestaRelitificacion($value)
    {   
        $atributo=$this->retriveAttr(1037,3);
        $atributo->valor = $value;
    }
    public function getPredioCuadroConstruccion()
    {
        return (bool) $this->retriveAttr(1038,3)->valor; 
    }
    public function setPredioCuadroConstruccion($value)
    {   
        $atributo=$this->retriveAttr(1038,3);
        $atributo->valor = $value;
    }
    public function getCopiasProyecto()
    {
        return (bool) $this->retriveAttr(1039,3)->valor; 
    }
    public function setCopiasProyecto($value)
    {   
        $atributo=$this->retriveAttr(1039,3);
        $atributo->valor = $value;
    }
    public function getConstanciaZonificacion2()
    {
        return (bool) $this->retriveAttr(1040,3)->valor; 
    }
    public function setConstanciaZonificacion2($value)
    {   
        $atributo=$this->retriveAttr(1040,3);
        $atributo->valor = $value;
    }
    public function getCalculoEstructural()
    {
        return (bool) $this->retriveAttr(1041,3)->valor; 
    }
    public function setCalculoEstructural($value)
    {   
        $atributo=$this->retriveAttr(1041,3);
        $atributo->valor = $value;
    }
    public function getConstanciaTramiteTelmex()
    {
        return (bool) $this->retriveAttr(1042,3)->valor; 
    }
    public function setConstanciaTramiteTelmex($value)
    {   
        $atributo=$this->retriveAttr(1042,3);
        $atributo->valor = $value;
    }
    public function getServiciosJapac()
    {
        return (bool) $this->retriveAttr(1043,3)->valor; 
    }
    public function setServiciosJapac($value)
    {   
        $atributo=$this->retriveAttr(1043,3);
        $atributo->valor = $value;
    }
    public function getServicioCFE()
    {
        return (bool) $this->retriveAttr(1044,3)->valor; 
    }
    public function setServicioCFE($value)
    {   
        $atributo=$this->retriveAttr(1044,3);
        $atributo->valor = $value;
    }
    public function getDictamenAmbiental()
    {
        return (bool) $this->retriveAttr(1045,3)->valor; 
    }
    public function setDictamenAmbiental($value)
    {   
        $atributo=$this->retriveAttr(1045,3);
        $atributo->valor = $value;
    }
    public function getDictamenVial()
    {
        return (bool) $this->retriveAttr(1046,3)->valor; 
    }
    public function setDictamenVial($value)
    {   
        $atributo=$this->retriveAttr(1046,3);
        $atributo->valor = $value;
    }
    public function getOpinionBomberos()
    {
        return (bool) $this->retriveAttr(1047,3)->valor; 
    }
    public function setOpinionBomberos($value)
    {   
        $atributo=$this->retriveAttr(1047,3);
        $atributo->valor = $value;
    }
    public function getDictamenPC()
    {
        return (bool) $this->retriveAttr(1048,3)->valor; 
    }
    public function setDictamenPC($value)
    {   
        $atributo=$this->retriveAttr(1048,3);
        $atributo->valor = $value;
    }
    public function getDictamenINAH()
    {
        return (bool) $this->retriveAttr(1049,3)->valor; 
    }
    public function setDictamenINAH($value)
    {   
        $atributo=$this->retriveAttr(1049,3);
        $atributo->valor = $value;
    }
    public function getDictamenSEPyC()
    {
        return (bool) $this->retriveAttr(1050,3)->valor; 
    }
    public function setDictamenSEPyC($value)
    {   
        $atributo=$this->retriveAttr(1050,3);
        $atributo->valor = $value;
    }
    public function getAnuenciaTortilla()
    {
        return (bool) $this->retriveAttr(1051,3)->valor; 
    }
    public function setAnuenciaTortilla($value)
    {   
        $atributo=$this->retriveAttr(1051,3);
        $atributo->valor = $value;
    }
    public function getAprovacionAeronautica()
    {
        return (bool) $this->retriveAttr(1052,3)->valor; 
    }
    public function setAprovacionAeronautica($value)
    {   
        $atributo=$this->retriveAttr(1052,3);
        $atributo->valor = $value;
    }
    public function getAnuenciaVecinos()
    {
        return (bool) $this->retriveAttr(1053,3)->valor; 
    }
    public function setAnuenciaVecinos($value)
    {   
        $atributo=$this->retriveAttr(1053,3);
        $atributo->valor = $value;
    }
    public function getPolizaSeguro()
    {
        return (bool) $this->retriveAttr(1054,3)->valor; 
    }
    public function setPolizaSeguro($value)
    {   
        $atributo=$this->retriveAttr(1054,3);
        $atributo->valor = $value;
    }
    public function getDictamenCultural()
    {
        return (bool) $this->retriveAttr(1055,3)->valor; 
    }
    public function setDictamenCultural($value)
    {   
        $atributo=$this->retriveAttr(1055,3);
        $atributo->valor = $value;
    }
    public function getOtros1()
    {
        return (bool) $this->retriveAttr(1056,3)->valor; 
    }
    public function setOtros1($value)
    {   
        $atributo=$this->retriveAttr(1056,3);
        $atributo->valor = $value;
    }
    public function getOtros2()
    {
        return (bool) $this->retriveAttr(1057,3)->valor; 
    }
    public function setOtros2($value)
    {   
        $atributo=$this->retriveAttr(1057,3);
        $atributo->valor = $value;
    }
    public function getOtros3()
    {
        return (bool) $this->retriveAttr(1058,3)->valor; 
    }
    public function setOtros3($value)
    {   
        $atributo=$this->retriveAttr(1058,3);
        $atributo->valor = $value;
    }
    public function getCalle()
    {
        return (string) $this->retriveAttr(1059,3)->valor; 
    }
    public function setCalle($value)
    {   
        $atributo=$this->retriveAttr(1059,3);
        $atributo->valor = $value;
    }
    public function getColoniaFraccionamiento()
    {
        return (string) $this->retriveAttr(1060,3)->valor; 
    }
    public function setColoniaFraccionamiento($value)
    {   
        $atributo=$this->retriveAttr(1060,3);
        $atributo->valor = $value;
    }
    public function getNumeroOficial()
    {
        return (string) $this->retriveAttr(1061,3)->valor; 
    }
    public function setNumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(1061,3);
        $atributo->valor = $value;
    }
    public function getNumeroInterior()
    {
        return (string) $this->retriveAttr(1062,3)->valor; 
    }
    public function setNumeroInterior($value)
    {   
        $atributo=$this->retriveAttr(1062,3);
        $atributo->valor = $value;
    }
    public function getPoblado()
    {
        return (string) $this->retriveAttr(1063,3)->valor; 
    }
    public function setPoblado($value)
    {   
        $atributo=$this->retriveAttr(1063,3);
        $atributo->valor = $value;
    }
    public function getSindicatura()
    {
        return (string) $this->retriveAttr(1064,3)->valor; 
    }
    public function setSindicatura($value)
    {   
        $atributo=$this->retriveAttr(1064,3);
        $atributo->valor = $value;
    }
    public function getClaveCatastral2()
    {
        return (string) $this->retriveAttr(1065,3)->valor; 
    }
    public function setClaveCatastral2($value)
    {   
        $atributo=$this->retriveAttr(1065,3);
        $atributo->valor = $value;
    }
    public function getSuperficiePredio()
    {
        return (string) $this->retriveAttr(1066,3)->valor; 
    }
    public function setSuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1066,3);
        $atributo->valor = $value;
    }
    public function getNorte()
    {
        return (string) $this->retriveAttr(1067,3)->valor; 
    }
    public function setNorte($value)
    {   
        $atributo=$this->retriveAttr(1067,3);
        $atributo->valor = $value;
    }
    public function getSur()
    {
        return (string) $this->retriveAttr(1068,3)->valor; 
    }
    public function setSur($value)
    {   
        $atributo=$this->retriveAttr(1068,3);
        $atributo->valor = $value;
    }
    public function getOriente()
    {
        return (string) $this->retriveAttr(1069,3)->valor; 
    }
    public function setOriente($value)
    {   
        $atributo=$this->retriveAttr(1069,3);
        $atributo->valor = $value;
    }
    public function getPoniente()
    {
        return (string) $this->retriveAttr(1070,3)->valor; 
    }
    public function setPoniente($value)
    {   
        $atributo=$this->retriveAttr(1070,3);
        $atributo->valor = $value;
    }
    public function getNombreSolicitante()
    {
        return (string) $this->retriveAttr(1071,3)->valor; 
    }
    public function setNombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1071,3);
        $atributo->valor = $value;
    }
    public function getDireccionSolicitante()
    {
        return (string) $this->retriveAttr(1072,3)->valor; 
    }
    public function setDireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1072,3);
        $atributo->valor = $value;
    }
    public function getTelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1073,3)->valor; 
    }
    public function setTelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1073,3);
        $atributo->valor = $value;
    }
    public function getCorreoSolicitante()
    {
        return (string) $this->retriveAttr(1074,3)->valor; 
    }
    public function setCorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1074,3);
        $atributo->valor = $value;
    }
    public function getFirmaSolicitante()
    {
        return (string) $this->retriveAttr(1075,3)->valor; 
    }
    public function setFirmaSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1075,3);
        $atributo->valor = $value;
    }
    public function getPlantaBaja()
    {
        return (string) $this->retriveAttr(1076,3)->valor; 
    }
    public function setPlantaBaja($value)
    {   
        $atributo=$this->retriveAttr(1076,3);
        $atributo->valor = $value;
    }
    public function getPlantaAlta()
    {
        return (string) $this->retriveAttr(1077,3)->valor; 
    }
    public function setPlantaAlta($value)
    {   
        $atributo=$this->retriveAttr(1077,3);
        $atributo->valor = $value;
    }
    public function getSegundoNivel()
    {
        return (string) $this->retriveAttr(1078,3)->valor; 
    }
    public function setSegundoNivel($value)
    {   
        $atributo=$this->retriveAttr(1078,3);
        $atributo->valor = $value;
    }
    public function getOtros4()
    {
        return (string) $this->retriveAttr(1079,3)->valor; 
    }
    public function setOtros4($value)
    {   
        $atributo=$this->retriveAttr(1079,3);
        $atributo->valor = $value;
    }
    public function getPlantaBaja1()
    {
        return (string) $this->retriveAttr(1080,3)->valor; 
    }
    public function setPlantaBaja1($value)
    {   
        $atributo=$this->retriveAttr(1080,3);
        $atributo->valor = $value;
    }
    public function getPlantaAlta1()
    {
        return (string) $this->retriveAttr(1081,3)->valor; 
    }
    public function setPlantaAlta1($value)
    {   
        $atributo=$this->retriveAttr(1081,3);
        $atributo->valor = $value;
    }
    public function getPlantaAlta2()
    {
        return (string) $this->retriveAttr(1082,3)->valor; 
    }
    public function setPlantaAlta2($value)
    {   
        $atributo=$this->retriveAttr(1082,3);
        $atributo->valor = $value;
    }
    public function getSegundoNivel1()
    {
        return (string) $this->retriveAttr(1083,3)->valor; 
    }
    public function setSegundoNivel1($value)
    {   
        $atributo=$this->retriveAttr(1083,3);
        $atributo->valor = $value;
    }
    public function getOtros5()
    {
        return (string) $this->retriveAttr(1084,3)->valor; 
    }
    public function setOtros5($value)
    {   
        $atributo=$this->retriveAttr(1084,3);
        $atributo->valor = $value;
    }
    public function getTotal()
    {
        return (string) $this->retriveAttr(1085,3)->valor; 
    }
    public function setTotal($value)
    {   
        $atributo=$this->retriveAttr(1085,3);
        $atributo->valor = $value;
    }
    public function getTotal1()
    {
        return (string) $this->retriveAttr(1086,3)->valor; 
    }
    public function setTotal1($value)
    {   
        $atributo=$this->retriveAttr(1086,3);
        $atributo->valor = $value;
    }
    public function getObservaciones()
    {
        return (string) $this->retriveAttr(1087,3)->valor; 
    }
    public function setObservaciones($value)
    {   
        $atributo=$this->retriveAttr(1087,3);
        $atributo->valor = $value;
    }
    public function getSellos()
    {
        return (string) $this->retriveAttr(1088,3)->valor; 
    }
    public function setSellos($value)
    {   
        $atributo=$this->retriveAttr(1088,3);
        $atributo->valor = $value;
    }
    public function getNombreGestor()
    {
        return (string) $this->retriveAttr(1089,3)->valor; 
    }
    public function setNombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1089,3);
        $atributo->valor = $value;
    }
    public function getDireccionGestor()
    {
        return (string) $this->retriveAttr(1090,3)->valor; 
    }
    public function setDireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1090,3);
        $atributo->valor = $value;
    }
    public function getTelefonoGestor()
    {
        return (string) $this->retriveAttr(1091,3)->valor; 
    }
    public function setTelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1091,3);
        $atributo->valor = $value;
    }
    public function getCorreoGestor()
    {
        return (string) $this->retriveAttr(1092,3)->valor; 
    }
    public function setCorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1092,3);
        $atributo->valor = $value;
    }
    public function getFirmaGestor()
    {
        return (string) $this->retriveAttr(1093,3)->valor; 
    }
    public function setFirmaGestor($value)
    {   
        $atributo=$this->retriveAttr(1093,3);
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
