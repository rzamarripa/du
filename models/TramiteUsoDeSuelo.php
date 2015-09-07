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

class TramiteUsoDeSuelo extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2003; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1Observaciones', 'p1Sellos', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor'], 'string','on'=>8],
                [['p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaAltaXConstruir', 'p1PlantaBajaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir'], 'double','on'=>8],
                [['p2Escrituras', 'p2ReciboDerechos', 'p2Alineamiento', 'p2ProyectoArquitectonico', 'p2ImpactoAmbiental', 'p2ImpactoVial', 'p2OpinionBomberos', 'p2ProteccionCivil', 'p2Inah', 'p2Sepyc', 'p2Masa', 'p2Aeronautica', 'p2Vecinos'], 'string','on'=>9],
                [['p3Escrituras', 'p3ReciboDerechos', 'p3Alineamiento', 'p3ProyectoArquitectonico', 'p3ImpactoAmbiental', 'p3ImpactoVial', 'p3OpinionBomberos', 'p3ProteccionCivil', 'p3Inah', 'p3Sepyc', 'p3Masa', 'p3Aeronautica', 'p3Vecinos'], 'integer','on'=>10],
                [['p4Imprimir'], 'string','on'=>11],
                [['p1NombreSolicitante', 'p1DireccionSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1NoCajones', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1ClaveCatastralPredio', 'p1SuperficiePredio', 'p1NortePredio', 'p1SurPredio', 'p1OrientePredio', 'p1PonientePredio', 'p1NombrePropietarios', 'p1DireccionPropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1PlantaBajaConstruida', 'p1PlantaAltaConstruida', 'p1SegundoNivelConstruida', 'p1OtrosConstruida', 'p1TotalConstruida', 'p1PlantaAltaXConstruir', 'p1PlantaBajaXConstruir', 'p1SegundoNivelXConstruir', 'p1OtrosXConstruir', 'p1TotalXConstruir', 'p1Observaciones', 'p1Sellos', 'p1NombreGestor', 'p1DireccionGestor', 'p1TelefonoGestor', 'p1CorreoGestor'], 'required', 'on'=>'8'],
                [['p2Escrituras', 'p2ReciboDerechos', 'p2Alineamiento', 'p2ProyectoArquitectonico', 'p2ImpactoAmbiental', 'p2ImpactoVial', 'p2OpinionBomberos', 'p2ProteccionCivil', 'p2Inah', 'p2Sepyc', 'p2Masa', 'p2Aeronautica', 'p2Vecinos'], 'required', 'on'=>'9'],
                [['p3Escrituras', 'p3ReciboDerechos', 'p3Alineamiento', 'p3ProyectoArquitectonico', 'p3ImpactoAmbiental', 'p3ImpactoVial', 'p3OpinionBomberos', 'p3ProteccionCivil', 'p3Inah', 'p3Sepyc', 'p3Masa', 'p3Aeronautica', 'p3Vecinos'], 'required', 'on'=>'10'],
                [['p4Imprimir'], 'required', 'on'=>'11'],
                [['p1NombreSolicitante', 'p1TelefonoSolicitante', 'p1CorreoSolicitante', 'p1UsoActual', 'p1UsoSolicitado', 'p1DescriProceso', 'p1CallePredio', 'p1ColoniaPredio', 'p1NumeroOficial', 'p1NumeroInterio', 'p1PobladoPredio', 'p1SindicaturaPredio', 'p1NombrePropietarios', 'p1TelefonoPropietarios', 'p1CorreoPropietarios', 'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1NombreGestor', 'p1TelefonoGestor', 'p1CorreoGestor', 'p1FirmaGestor'], 'string', 'max' => 50,'on'=>8],
                [['p1DireccionSolicitante', 'p1DireccionPropietarios', 'p1Observaciones', 'p1Sellos', 'p1DireccionGestor'], 'string', 'max' => 500,'on'=>8],
                [['p1NoCajones'], 'string', 'max' => 20,'on'=>8],
                [['p1ClaveCatastralPredio'], 'string', 'max' => 30,'on'=>8],
                [['p4Imprimir'], 'string', 'max' => 1,'on'=>11]];

//'p1FirmaSolicitante', 'p1FirmaPropietarios', 'p1FirmaGestor'
            
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
            'fechaCreacion' => 'Fecha Creacion',
            'fechaModificacion' => 'Fecha Modificacion',
            'observaciones' => 'Observaciones',
            'estatusId' => 'Estatus ID',
            'p1NombreSolicitante' => 'Nombre',
            'p1DireccionSolicitante' => 'Direccion',
            'p1TelefonoSolicitante' => 'Telefono',
            'p1CorreoSolicitante' => 'Correo',
            'p1UsoActual' => 'Uso Actual',
            'p1UsoSolicitado' => 'Uso Solicitado',
            'p1DescriProceso' => 'Descripción del Proceso',
            'p1NoCajones' => 'No. de Cajones con que cuenta el Establecimiento',
            'p1CallePredio' => 'Calle',
            'p1ColoniaPredio' => 'Fraccionamiento o Colonia',
            'p1NumeroOficial' => 'Numero Oficial',
            'p1NumeroInterio' => 'Numero Interior',
            'p1PobladoPredio' => 'Poblado',
            'p1SindicaturaPredio' => 'Sindicatura',
            'p1ClaveCatastralPredio' => 'Clave Catastral',
            'p1SuperficiePredio' => 'Superficie de Predio',
            'p1NortePredio' => 'Norte',
            'p1SurPredio' => 'Sur',
            'p1OrientePredio' => 'Oriente',
            'p1PonientePredio' => 'Poniente',
            'p1NombrePropietarios' => 'Nombre',
            'p1DireccionPropietarios' => 'Direccion',
            'p1TelefonoPropietarios' => 'Telefono',
            'p1CorreoPropietarios' => 'Correo',
            'p1FirmaSolicitante' => 'Firma',
            'p1FirmaPropietarios' => 'Firma',
            'p1PlantaBajaConstruida' => 'Planta Baja',
            'p1PlantaAltaConstruida' => 'Planta Alta',
            'p1SegundoNivelConstruida' => 'Segundo Nivel',
            'p1OtrosConstruida' => 'Otros',
            'p1TotalConstruida' => 'Total',
            'p1PlantaAltaXConstruir' => 'Planta Alta',
            'p1PlantaBajaXConstruir' => 'Planta Baja',
            'p1SegundoNivelXConstruir' => 'Segundo Nivel',
            'p1OtrosXConstruir' => 'Otros',
            'p1TotalXConstruir' => 'Total',
            'p1Observaciones' => 'Observaciones',
            'p1Sellos' => 'Sellos',
            'p1NombreGestor' => 'Nombre',
            'p1DireccionGestor' => 'Direccion',
            'p1TelefonoGestor' => 'Telefono',
            'p1CorreoGestor' => 'Correo',
            'p1FirmaGestor' => 'Firma',
            'p2Escrituras' => 'Copia de Escrituras',
            'p2ReciboDerechos' => 'Recibo de Pago Derechos Correspondientes',
            'p2Alineamiento' => 'Alineamiento y Numero Oficial',
            'p2ProyectoArquitectonico' => '2 Copias del Proyecto Arquitectónico Impresas Anexar CD con el Proyecto (Autocad 2004)',
            'p2ImpactoAmbiental' => 'Dictamen de Impacto Ambiental',
            'p2ImpactoVial' => 'Dictamen de Impacto Vial',
            'p2OpinionBomberos' => 'Opinion Favorable de Bombero',
            'p2ProteccionCivil' => 'Dictamen Procedente de la Unidad de Protección Civil',
            'p2Inah' => 'Dictamen Favorable de INAH',
            'p2Sepyc' => 'Dictamen Procedente de SEP y C',
            'p2Masa' => 'Anuencia de la Union de la Masa y la Tortilla',
            'p2Aeronautica' => 'Aprobación de la Dirección de Aeronáutica Civil',
            'p2Vecinos' => 'Anuencia de Vecinos',
            'p3Escrituras' => 'Copia de Escrituras',
            'p3ReciboDerechos' => 'Recibo de Pago Derechos Correspondientes',
            'p3Alineamiento' => 'Alineamiento y Numero Oficial',
            'p3ProyectoArquitectonico' => '2 Copias del Proyecto Arquitectónico Impresas Anexar CD con el Proyecto (Autocad 2004)',
            'p3ImpactoAmbiental' => 'Dictamen de Impacto Ambiental',
            'p3ImpactoVial' => 'Dictamen de Impacto Vial',
            'p3OpinionBomberos' => 'Opinion Favorable de Bombero',
            'p3ProteccionCivil' => 'Dictamen Procedente de la Unidad de Protección Civil',
            'p3Inah' => 'Dictamen Favorable de INAH',
            'p3Sepyc' => 'Dictamen Procedente de SEP y C',
            'p3Masa' => 'Anuencia de la Union de la Masa y la Tortilla',
            'p3Aeronautica' => 'Aprobación de la Dirección de Aeronáutica Civil',
            'p3Vecinos' => 'Anuencia de Vecinos',
            'p4Imprimir' => 'Imprimir',
        ];
    }

    public function getP1NombreSolicitante()
    {
        return (string) $this->retriveAttr(1129,8)->valor; 
    }
    public function setP1NombreSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1129,8);
        $atributo->valor = $value;
    }
    public function getP1DireccionSolicitante()
    {
        return (string) $this->retriveAttr(1130,8)->valor; 
    }
    public function setP1DireccionSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1130,8);
        $atributo->valor = $value;
    }
    public function getP1TelefonoSolicitante()
    {
        return (string) $this->retriveAttr(1131,8)->valor; 
    }
    public function setP1TelefonoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1131,8);
        $atributo->valor = $value;
    }
    public function getP1CorreoSolicitante()
    {
        return (string) $this->retriveAttr(1132,8)->valor; 
    }
    public function setP1CorreoSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1132,8);
        $atributo->valor = $value;
    }
    public function getP1UsoActual()
    {
        return (string) $this->retriveAttr(1133,8)->valor; 
    }
    public function setP1UsoActual($value)
    {   
        $atributo=$this->retriveAttr(1133,8);
        $atributo->valor = $value;
    }
    public function getP1UsoSolicitado()
    {
        return (string) $this->retriveAttr(1134,8)->valor; 
    }
    public function setP1UsoSolicitado($value)
    {   
        $atributo=$this->retriveAttr(1134,8);
        $atributo->valor = $value;
    }
    public function getP1DescriProceso()
    {
        return (string) $this->retriveAttr(1135,8)->valor; 
    }
    public function setP1DescriProceso($value)
    {   
        $atributo=$this->retriveAttr(1135,8);
        $atributo->valor = $value;
    }
    public function getP1NoCajones()
    {
        return (string) $this->retriveAttr(1136,8)->valor; 
    }
    public function setP1NoCajones($value)
    {   
        $atributo=$this->retriveAttr(1136,8);
        $atributo->valor = $value;
    }
    public function getP1CallePredio()
    {
        return (string) $this->retriveAttr(1137,8)->valor; 
    }
    public function setP1CallePredio($value)
    {   
        $atributo=$this->retriveAttr(1137,8);
        $atributo->valor = $value;
    }
    public function getP1ColoniaPredio()
    {
        return (string) $this->retriveAttr(1138,8)->valor; 
    }
    public function setP1ColoniaPredio($value)
    {   
        $atributo=$this->retriveAttr(1138,8);
        $atributo->valor = $value;
    }
    public function getP1NumeroOficial()
    {
        return (string) $this->retriveAttr(1139,8)->valor; 
    }
    public function setP1NumeroOficial($value)
    {   
        $atributo=$this->retriveAttr(1139,8);
        $atributo->valor = $value;
    }
    public function getP1NumeroInterio()
    {
        return (string) $this->retriveAttr(1140,8)->valor; 
    }
    public function setP1NumeroInterio($value)
    {   
        $atributo=$this->retriveAttr(1140,8);
        $atributo->valor = $value;
    }
    public function getP1PobladoPredio()
    {
        return (string) $this->retriveAttr(1141,8)->valor; 
    }
    public function setP1PobladoPredio($value)
    {   
        $atributo=$this->retriveAttr(1141,8);
        $atributo->valor = $value;
    }
    public function getP1SindicaturaPredio()
    {
        return (string) $this->retriveAttr(1142,8)->valor; 
    }
    public function setP1SindicaturaPredio($value)
    {   
        $atributo=$this->retriveAttr(1142,8);
        $atributo->valor = $value;
    }
    public function getP1ClaveCatastralPredio()
    {
        return (string) $this->retriveAttr(1143,8)->valor; 
    }
    public function setP1ClaveCatastralPredio($value)
    {   
        $atributo=$this->retriveAttr(1143,8);
        $atributo->valor = $value;
    }
    public function getP1SuperficiePredio()
    {
        return (float) $this->retriveAttr(1144,8)->valor; 
    }
    public function setP1SuperficiePredio($value)
    {   
        $atributo=$this->retriveAttr(1144,8);
        $atributo->valor = $value;
    }
    public function getP1NortePredio()
    {
        return (float) $this->retriveAttr(1145,8)->valor; 
    }
    public function setP1NortePredio($value)
    {   
        $atributo=$this->retriveAttr(1145,8);
        $atributo->valor = $value;
    }
    public function getP1SurPredio()
    {
        return (float) $this->retriveAttr(1146,8)->valor; 
    }
    public function setP1SurPredio($value)
    {   
        $atributo=$this->retriveAttr(1146,8);
        $atributo->valor = $value;
    }
    public function getP1OrientePredio()
    {
        return (float) $this->retriveAttr(1147,8)->valor; 
    }
    public function setP1OrientePredio($value)
    {   
        $atributo=$this->retriveAttr(1147,8);
        $atributo->valor = $value;
    }
    public function getP1PonientePredio()
    {
        return (float) $this->retriveAttr(1148,8)->valor; 
    }
    public function setP1PonientePredio($value)
    {   
        $atributo=$this->retriveAttr(1148,8);
        $atributo->valor = $value;
    }
    public function getP1NombrePropietarios()
    {
        return (string) $this->retriveAttr(1149,8)->valor; 
    }
    public function setP1NombrePropietarios($value)
    {   
        $atributo=$this->retriveAttr(1149,8);
        $atributo->valor = $value;
    }
    public function getP1DireccionPropietarios()
    {
        return (string) $this->retriveAttr(1150,8)->valor; 
    }
    public function setP1DireccionPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1150,8);
        $atributo->valor = $value;
    }
    public function getP1TelefonoPropietarios()
    {
        return (string) $this->retriveAttr(1151,8)->valor; 
    }
    public function setP1TelefonoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1151,8);
        $atributo->valor = $value;
    }
    public function getP1CorreoPropietarios()
    {
        return (string) $this->retriveAttr(1152,8)->valor; 
    }
    public function setP1CorreoPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1152,8);
        $atributo->valor = $value;
    }
    public function getP1FirmaSolicitante()
    {
        return (string) $this->retriveAttr(1153,8)->valor; 
    }
    public function setP1FirmaSolicitante($value)
    {   
        $atributo=$this->retriveAttr(1153,8);
        $atributo->valor = $value;
    }
    public function getP1FirmaPropietarios()
    {
        return (string) $this->retriveAttr(1154,8)->valor; 
    }
    public function setP1FirmaPropietarios($value)
    {   
        $atributo=$this->retriveAttr(1154,8);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaConstruida()
    {
        return (float) $this->retriveAttr(1155,8)->valor; 
    }
    public function setP1PlantaBajaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1155,8);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaConstruida()
    {
        return (float) $this->retriveAttr(1156,8)->valor; 
    }
    public function setP1PlantaAltaConstruida($value)
    {   
        $atributo=$this->retriveAttr(1156,8);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelConstruida()
    {
        return (float) $this->retriveAttr(1157,8)->valor; 
    }
    public function setP1SegundoNivelConstruida($value)
    {   
        $atributo=$this->retriveAttr(1157,8);
        $atributo->valor = $value;
    }
    public function getP1OtrosConstruida()
    {
        return (float) $this->retriveAttr(1158,8)->valor; 
    }
    public function setP1OtrosConstruida($value)
    {   
        $atributo=$this->retriveAttr(1158,8);
        $atributo->valor = $value;
    }
    public function getP1TotalConstruida()
    {
        return (float) $this->retriveAttr(1159,8)->valor; 
    }
    public function setP1TotalConstruida($value)
    {   
        $atributo=$this->retriveAttr(1159,8);
        $atributo->valor = $value;
    }
    public function getP1PlantaAltaXConstruir()
    {
        return (float) $this->retriveAttr(1160,8)->valor; 
    }
    public function setP1PlantaAltaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1160,8);
        $atributo->valor = $value;
    }
    public function getP1PlantaBajaXConstruir()
    {
        return (float) $this->retriveAttr(1161,8)->valor; 
    }
    public function setP1PlantaBajaXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1161,8);
        $atributo->valor = $value;
    }
    public function getP1SegundoNivelXConstruir()
    {
        return (float) $this->retriveAttr(1162,8)->valor; 
    }
    public function setP1SegundoNivelXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1162,8);
        $atributo->valor = $value;
    }
    public function getP1OtrosXConstruir()
    {
        return (float) $this->retriveAttr(1163,8)->valor; 
    }
    public function setP1OtrosXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1163,8);
        $atributo->valor = $value;
    }
    public function getP1TotalXConstruir()
    {
        return (float) $this->retriveAttr(1164,8)->valor; 
    }
    public function setP1TotalXConstruir($value)
    {   
        $atributo=$this->retriveAttr(1164,8);
        $atributo->valor = $value;
    }
    public function getP1Observaciones()
    {
        return (string) $this->retriveAttr(1165,8)->valor; 
    }
    public function setP1Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1165,8);
        $atributo->valor = $value;
    }
    public function getP1Sellos()
    {
        return (string) $this->retriveAttr(1166,8)->valor; 
    }
    public function setP1Sellos($value)
    {   
        $atributo=$this->retriveAttr(1166,8);
        $atributo->valor = $value;
    }
    public function getP1NombreGestor()
    {
        return (string) $this->retriveAttr(1167,8)->valor; 
    }
    public function setP1NombreGestor($value)
    {   
        $atributo=$this->retriveAttr(1167,8);
        $atributo->valor = $value;
    }
    public function getP1DireccionGestor()
    {
        return (string) $this->retriveAttr(1168,8)->valor; 
    }
    public function setP1DireccionGestor($value)
    {   
        $atributo=$this->retriveAttr(1168,8);
        $atributo->valor = $value;
    }
    public function getP1TelefonoGestor()
    {
        return (string) $this->retriveAttr(1169,8)->valor; 
    }
    public function setP1TelefonoGestor($value)
    {   
        $atributo=$this->retriveAttr(1169,8);
        $atributo->valor = $value;
    }
    public function getP1CorreoGestor()
    {
        return (string) $this->retriveAttr(1170,8)->valor; 
    }
    public function setP1CorreoGestor($value)
    {   
        $atributo=$this->retriveAttr(1170,8);
        $atributo->valor = $value;
    }
    public function getP1FirmaGestor()
    {
        return (string) $this->retriveAttr(1171,8)->valor; 
    }
    public function setP1FirmaGestor($value)
    {   
        $atributo=$this->retriveAttr(1171,8);
        $atributo->valor = $value;
    }
    public function getP2Escrituras()
    {
        return  $this->retriveAttr(1172,9)->valor; 
    }
    public function setP2Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1172,9);
        $atributo->valor = $value;
    }
    public function getP2ReciboDerechos()
    {
        return  $this->retriveAttr(1173,9)->valor; 
    }
    public function setP2ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1173,9);
        $atributo->valor = $value;
    }
    public function getP2Alineamiento()
    {
        return  $this->retriveAttr(1174,9)->valor; 
    }
    public function setP2Alineamiento($value)
    {   
        $atributo=$this->retriveAttr(1174,9);
        $atributo->valor = $value;
    }
    public function getP2ProyectoArquitectonico()
    {
        return  $this->retriveAttr(1175,9)->valor; 
    }
    public function setP2ProyectoArquitectonico($value)
    {   
        $atributo=$this->retriveAttr(1175,9);
        $atributo->valor = $value;
    }
    public function getP2ImpactoAmbiental()
    {
        return  $this->retriveAttr(1176,9)->valor; 
    }
    public function setP2ImpactoAmbiental($value)
    {   
        $atributo=$this->retriveAttr(1176,9);
        $atributo->valor = $value;
    }
    public function getP2ImpactoVial()
    {
        return  $this->retriveAttr(1177,9)->valor; 
    }
    public function setP2ImpactoVial($value)
    {   
        $atributo=$this->retriveAttr(1177,9);
        $atributo->valor = $value;
    }
    public function getP2OpinionBomberos()
    {
        return  $this->retriveAttr(1178,9)->valor; 
    }
    public function setP2OpinionBomberos($value)
    {   
        $atributo=$this->retriveAttr(1178,9);
        $atributo->valor = $value;
    }
    public function getP2ProteccionCivil()
    {
        return  $this->retriveAttr(1179,9)->valor; 
    }
    public function setP2ProteccionCivil($value)
    {   
        $atributo=$this->retriveAttr(1179,9);
        $atributo->valor = $value;
    }
    public function getP2Inah()
    {
        return  $this->retriveAttr(1180,9)->valor; 
    }
    public function setP2Inah($value)
    {   
        $atributo=$this->retriveAttr(1180,9);
        $atributo->valor = $value;
    }
    public function getP2Sepyc()
    {
        return  $this->retriveAttr(1181,9)->valor; 
    }
    public function setP2Sepyc($value)
    {   
        $atributo=$this->retriveAttr(1181,9);
        $atributo->valor = $value;
    }
    public function getP2Masa()
    {
        return  $this->retriveAttr(1182,9)->valor; 
    }
    public function setP2Masa($value)
    {   
        $atributo=$this->retriveAttr(1182,9);
        $atributo->valor = $value;
    }
    public function getP2Aeronautica()
    {
        return  $this->retriveAttr(1183,9)->valor; 
    }
    public function setP2Aeronautica($value)
    {   
        $atributo=$this->retriveAttr(1183,9);
        $atributo->valor = $value;
    }
    public function getP2Vecinos()
    {
        return  $this->retriveAttr(1184,9)->valor; 
    }
    public function setP2Vecinos($value)
    {   
        $atributo=$this->retriveAttr(1184,9);
        $atributo->valor = $value;
    }
    public function getP3Escrituras()
    {
        return (int) $this->retriveAttr(1185,10)->valor; 
    }
    public function setP3Escrituras($value)
    {   
        $atributo=$this->retriveAttr(1185,10);
        $atributo->valor = $value;
    }
    public function getP3ReciboDerechos()
    {
        return (int) $this->retriveAttr(1186,10)->valor; 
    }
    public function setP3ReciboDerechos($value)
    {   
        $atributo=$this->retriveAttr(1186,10);
        $atributo->valor = $value;
    }
    public function getP3Alineamiento()
    {
        return (int) $this->retriveAttr(1187,10)->valor; 
    }
    public function setP3Alineamiento($value)
    {   
        $atributo=$this->retriveAttr(1187,10);
        $atributo->valor = $value;
    }
    public function getP3ProyectoArquitectonico()
    {
        return (int) $this->retriveAttr(1188,10)->valor; 
    }
    public function setP3ProyectoArquitectonico($value)
    {   
        $atributo=$this->retriveAttr(1188,10);
        $atributo->valor = $value;
    }
    public function getP3ImpactoAmbiental()
    {
        return (int) $this->retriveAttr(1189,10)->valor; 
    }
    public function setP3ImpactoAmbiental($value)
    {   
        $atributo=$this->retriveAttr(1189,10);
        $atributo->valor = $value;
    }
    public function getP3ImpactoVial()
    {
        return (int) $this->retriveAttr(1190,10)->valor; 
    }
    public function setP3ImpactoVial($value)
    {   
        $atributo=$this->retriveAttr(1190,10);
        $atributo->valor = $value;
    }
    public function getP3OpinionBomberos()
    {
        return (int) $this->retriveAttr(1191,10)->valor; 
    }
    public function setP3OpinionBomberos($value)
    {   
        $atributo=$this->retriveAttr(1191,10);
        $atributo->valor = $value;
    }
    public function getP3ProteccionCivil()
    {
        return (int) $this->retriveAttr(1192,10)->valor; 
    }
    public function setP3ProteccionCivil($value)
    {   
        $atributo=$this->retriveAttr(1192,10);
        $atributo->valor = $value;
    }
    public function getP3Inah()
    {
        return (int) $this->retriveAttr(1193,10)->valor; 
    }
    public function setP3Inah($value)
    {   
        $atributo=$this->retriveAttr(1193,10);
        $atributo->valor = $value;
    }
    public function getP3Sepyc()
    {
        return (int) $this->retriveAttr(1194,10)->valor; 
    }
    public function setP3Sepyc($value)
    {   
        $atributo=$this->retriveAttr(1194,10);
        $atributo->valor = $value;
    }
    public function getP3Masa()
    {
        return (int) $this->retriveAttr(1195,10)->valor; 
    }
    public function setP3Masa($value)
    {   
        $atributo=$this->retriveAttr(1195,10);
        $atributo->valor = $value;
    }
    public function getP3Aeronautica()
    {
        return (int) $this->retriveAttr(1196,10)->valor; 
    }
    public function setP3Aeronautica($value)
    {   
        $atributo=$this->retriveAttr(1196,10);
        $atributo->valor = $value;
    }
    public function getP3Vecinos()
    {
        return (int) $this->retriveAttr(1197,10)->valor; 
    }
    public function setP3Vecinos($value)
    {   
        $atributo=$this->retriveAttr(1197,10);
        $atributo->valor = $value;
    }
    public function getP4Imprimir()
    {
        return (string) $this->retriveAttr(1198,11)->valor; 
    }
    public function setP4Imprimir($value)
    {   
        $atributo=$this->retriveAttr(1198,11);
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
}
