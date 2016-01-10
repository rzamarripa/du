<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tramites".
 *
 * @property integer $id
 * @property integer $pasoActualId
 * @property integer $tipoTramiteId
 * @property string $fechaCreacion
 * @property string $fechaModificacion
 * @property string $observaciones
 * @property integer $estatusId
 *
 * @property Estatus $estatus
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class TramitesRelotificacionFracc extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2010; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p2CertificacionCabildo', 'p2PlanoAprobado', 'p2PlanoPropuesta', 'p2Pago', 'p4Observaciones', 'p5Constancia', 'p4Expediente'], 'string'],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1NorOrientePredio', 'p1SurOrientePredio', 'p1NorPonientePredio', 'p1SurPonientePredio'], 'double'],
                [['p3CertificacionCabildo', 'p3PlanoAprobado', 'p3PlanoPropuesta', 'p3Pago', 'p4Supervision'], 'integer'],
                [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescripcionProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaBajaXConstruir', 'p1PlantaAltaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor'], 'required', 'on'=>'53'],
                [['p2CertificacionCabildo', 'p2PlanoAprobado', 'p2PlanoPropuesta', 'p2Pago'], 'required', 'on'=>'54'],
                [['p3CertificacionCabildo', 'p3PlanoAprobado', 'p3PlanoPropuesta', 'p3Pago'], 'required', 'on'=>'55'],
                [['p4Supervision', 'p4Observaciones'], 'required', 'on'=>'56'],
                [['p5Constancia'], 'required', 'on'=>'57'],
                [['p1NombreSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1CallePredio', 'p1ColoniaPredio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietarios', 'p1CorreoPropietarios', 'p1NombreGestor', 'p1CorreoGestor'], 'string', 'max' => 50],
                [['p1DireccionSolicitante', 'p1DescripcionProceso', 'p1DireccionPropietarios', 'p1Observaciones', 'p1DireccionGestor', 'p4Observaciones'], 'string', 'max' => 500],
                [['p1TelefonoSolicitante', 'p1NoCajones', 'p1NumeroOficial', 'p1NumeroInterio', 'p1TelefonoPropietarios', 'p1TelefonoGestor'], 'string', 'max' => 20],
                [['p1ClaveCatastralPredio'], 'string', 'max' => 30]];

        
            
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
            'fechaCreacion' => 'Fecha Creación',
            'fechaModificacion' => 'Fecha Modificación',
            'observaciones' => 'Observaciones',
            'estatusId' => 'Estatus ID',
            'p1NombreSolicitante' => 'Nombre',
            'p1DireccionSolicitante' => 'Dirección',
            'p1TelefonoSolicitante' => 'Telefono',
            'p1CorreoSolicitante' => 'Correo',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
	           'p1DescripcionProceso' => 'Descripción del Proyecto',
            'p1NoCajones' => 'No. de Cajones con que cuenta el Establecimiento',
            'p1CallePredio' => 'Calle',
            'p1ColoniaPredio' => 'Fraccionamiento o Colonia',
            'p1NumeroOficial' => 'Número Oficial',
            'p1NumeroInterio' => 'Número Interior',
            'p1PobladoPredio' => 'Poblado',
            'p1SindicaturaPredio' => 'Sindicatura',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1SuperficiePredio' => 'Superficie de Predio',
            'p1NortePredio' => 'Norte',
            'p1SurPredio' => 'Sur',
            'p1OrientePredio' => 'Oriente',
            'p1PonientePredio' => 'Poniente',
            'p1NombrePropietarios' => 'Nombre',
            'p1DireccionPropietarios' => 'Dirección',
            'p1TelefonoPropietarios' => 'Teléfono',
            'p1CorreoPropietarios' => 'Correo',
            'p1PlantaBajaConstruida' => 'Planta Baja',
            'p1PlantaAltaConstruida' => 'Planta Alta',
            'p1SegundoNivelConstruida' => 'Segundo Nivel',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'Total Construida',
            'p1PlantaBajaXConstruir' => 'Planta Baja',
            'p1PlantaAltaXConstruir' => 'Planta Alta',
            'p1SegundoNivelXConstruir' => 'Segundo Nivel',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'Total Por Construir',
            'p1Observaciones' => 'Observaciones',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Dirección',
            'p1TelefonoGestor' => 'Teléfono',
            'p1CorreoGestor' => 'Correo',
            'p2CertificacionCabildo' => 'Certificación de H. Cabildo',
            'p2PlanoAprobado' => 'Plano Aprobado',
            'p2PlanoPropuesta' => 'Plano Propuesta',
            'p2Pago' => 'Pago',
            'p3CertificacionCabildo' => 'Certificación de H. Cabildo',
            'p3PlanoAprobado' => 'Plano Aprobado',
            'p3PlanoPropuesta' => 'Plano Propuesta',
            'p3Pago' => 'Pago',
            'p4Supervision' => 'Supervision',
            'p4Observaciones' => 'Observaciones',
            'p5Constancia' => 'Constancia',
           'p1NorOrientePredio' => 'NorOriente', 
           'p1SurOrientePredio' => 'SurOriente', 
           'p1NorPonientePredio' => 'NorPoniente', 
           'p1SurPonientePredio' => 'SurPoniente', 
           'p4Expediente' => 'Expediente',
        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1590,53)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1590,53);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1591,53)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1591,53);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1592,53)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1592,53);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1593,53)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1593,53);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1594,53)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1594,53);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1595,53)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1595,53);
        $atributo->valor = $value;
    }
    public function getP1DescripcionProceso()
    {
        return (string) $this->retriveAttr(1596,53)->valor; 
    }
    public function setP1DescripcionProceso($value)
    {   
        $atributo=$this->retriveAttr(1596,53);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1597,53)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1597,53);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1598,53)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1598,53);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1599,53)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1599,53);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficial()
    {
        return (string) $this->retriveAttr(1600,53)->valor; 
    }
    public function setP1NumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(1600,53);
        $atributo->valor = $value;
    }
    public function getP1NumeroInterio()
    {
        return (string) $this->retriveAttr(1601,53)->valor; 
    }
    public function setP1NumeroInterio($value)
    {   
        $atributo=$this->retriveAttr(1601,53);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1602,53)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1602,53);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1603,53)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1603,53);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1604,53)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1604,53);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (float) $this->retriveAttr(1605,53)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1605,53);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(1606,53)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1606,53);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(1607,53)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1607,53);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(1608,53)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1608,53);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(1609,53)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1609,53);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(1610,53)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(1610,53);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(1611,53)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1611,53);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(1612,53)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1612,53);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietarios()
    {
        return (string) $this->retriveAttr(1613,53)->valor; 
    }
    public function setP1CorreoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1613,53);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(1614,53)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1614,53);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(1615,53)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1615,53);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelConstruida()
    {
        return (float) $this->retriveAttr(1616,53)->valor; 
    }
    public function setP1SegundoNivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1616,53);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(1617,53)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1617,53);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(1618,53)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1618,53);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(1619,53)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1619,53);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(1620,53)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1620,53);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelXConstruir()
    {
        return (float) $this->retriveAttr(1621,53)->valor; 
    }
    public function setP1SegundoNivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1621,53);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(1622,53)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1622,53);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(1623,53)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1623,53);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1624,53)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1624,53);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1625,53)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1625,53);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1626,53)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1626,53);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1627,53)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1627,53);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1628,53)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1628,53);
        $atributo->valor = $value;
    }
    public function getP2CertificacionCabildo()
    {
        return  $this->retriveAttr(1629,54)->valor; 
    }
    public function setP2CertificacionCabildo($value)
    {   
        $atributo=$this->retriveAttr(1629,54);
        $atributo->valor = $value;
    }
    public function getP2PlanoAprobado()
    {
        return  $this->retriveAttr(1630,54)->valor; 
    }
    public function setP2PlanoAprobado($value)
    {   
        $atributo=$this->retriveAttr(1630,54);
        $atributo->valor = $value;
    }
    public function getP2PlanoPropuesta()
    {
        return  $this->retriveAttr(1631,54)->valor; 
    }
    public function setP2PlanoPropuesta($value)
    {   
        $atributo=$this->retriveAttr(1631,54);
        $atributo->valor = $value;
    }
    public function getP2Pago()
    {
        return  $this->retriveAttr(1632,54)->valor; 
    }
    public function setP2Pago($value)
    {   
        $atributo=$this->retriveAttr(1632,54);
        $atributo->valor = $value;
    }
    public function getP3CertificacionCabildo()
    {
        return (int) $this->retriveAttr(1633,55)->valor; 
    }
    public function setP3CertificacionCabildo($value)
    {   
        $atributo=$this->retriveAttr(1633,55);
        $atributo->valor = $value;
    }
    public function getP3PlanoAprobado()
    {
        return (int) $this->retriveAttr(1634,55)->valor; 
    }
    public function setP3PlanoAprobado($value)
    {   
        $atributo=$this->retriveAttr(1634,55);
        $atributo->valor = $value;
    }
    public function getP3PlanoPropuesta()
    {
        return (int) $this->retriveAttr(1635,55)->valor; 
    }
    public function setP3PlanoPropuesta($value)
    {   
        $atributo=$this->retriveAttr(1635,55);
        $atributo->valor = $value;
    }
    public function getP3Pago()
    {
        return (int) $this->retriveAttr(1636,55)->valor; 
    }
    public function setP3Pago($value)
    {   
        $atributo=$this->retriveAttr(1636,55);
        $atributo->valor = $value;
    }
    public function getP4Supervision()
    {
        return (int) $this->retriveAttr(1637,56)->valor; 
    }
    public function setP4Supervision($value)
    {   
        $atributo=$this->retriveAttr(1637,56);
        $atributo->valor = $value;
    }
    public function getP4Observaciones()
    {
        return (string) $this->retriveAttr(1638,56)->valor; 
    }
    public function setP4Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1638,56);
        $atributo->valor = $value;
    }
    public function getP5Constancia()
    {
        return  $this->retriveAttr(1639,57)->valor; 
    }
    public function setP5Constancia($value)
    {   
        $atributo=$this->retriveAttr(1639,57);
        $atributo->valor = $value;
    }
   public function getP1NorOrientePredio() 
   { 
       return (float) $this->retriveAttr(3492,53)->valor;  
   } 
   public function setP1NorOrientePredio($value) 
   {   
       $atributo=$this->retriveAttr(3492,53); 
       $atributo->valor = $value; 
   } 
   public function getP1SurOrientePredio() 
   { 
       return (float) $this->retriveAttr(3493,53)->valor;  
   } 
   public function setP1SurOrientePredio($value) 
   {   
       $atributo=$this->retriveAttr(3493,53); 
       $atributo->valor = $value; 
   } 
   public function getP1NorPonientePredio() 
   { 
       return (float) $this->retriveAttr(3494,53)->valor;  
   } 
   public function setP1NorPonientePredio($value) 
   {   
       $atributo=$this->retriveAttr(3494,53); 
       $atributo->valor = $value; 
   } 
   public function getP1SurPonientePredio() 
   { 
       return (float) $this->retriveAttr(3495,53)->valor;  
   } 
   public function setP1SurPonientePredio($value) 
   {   
       $atributo=$this->retriveAttr(3495,53); 
       $atributo->valor = $value;
   }
   public function getP4Expediente()
   {
       return $this->retriveAttr(3497,56)->valor;
   }
   public function setP4Expediente($value)
   { 
       $atributo=$this->retriveAttr(3497,56);
       $atributo->valor = $value;
   }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatusId']);
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
    //esto es generico
    public function getEncabezadoImagen()
    {
        return $this->hasOne(EncabezadoImagenes::className(), ['tramite_id' => 'id']);
    }

}
