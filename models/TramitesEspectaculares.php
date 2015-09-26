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

class TramitesEspectaculares extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2006; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NoOficio', 'p3Memoria', 'p3Poliza', 'p3Propiedad', 'p3PagoImpuesto', 'p3CartaAutorizacion', 'p3CartaCompromiso', 'p3LicenciaConstruccion', 'p3AutorizacionProteccionCivil', 'p5Supervisor'], 'integer'],
                [['p1Fecha', 'p1Dirigido', 'p1Relacion', 'p1Firma', 'p2Memoria', 'p2Poliza', 'p2Propiedad', 'p2PagoImpuesto', 'p2CartaAutorizacion', 'p2CartaCompromiso', 'p2LicenciaConstruccion', 'p2AutorizacionProteccionCivil', 'p4ReciboPago', 'p5Observaciones', 'p6Permiso'], 'string'],
                [['p1NoOficio', 'p1Fecha', 'p1Dirigido', 'p1Relacion', 'p1Firma'], 'required', 'on'=>'24'],
                [['p2Memoria', 'p2Poliza', 'p2Propiedad', 'p2PagoImpuesto', 'p2CartaAutorizacion', 'p2CartaCompromiso', 'p2LicenciaConstruccion', 'p2AutorizacionProteccionCivil'], 'required', 'on'=>'25'],
                [['p3Memoria', 'p3Poliza', 'p3Propiedad', 'p3PagoImpuesto', 'p3CartaAutorizacion', 'p3CartaCompromiso', 'p3LicenciaConstruccion', 'p3AutorizacionProteccionCivil'], 'required', 'on'=>'26'],
                [['p4ReciboPago'], 'required', 'on'=>'27'],
                [['p5Supervisor', 'p5Observaciones'], 'required', 'on'=>'28'],
                [['p6Permiso'], 'required', 'on'=>'29'],
                [['p1Dirigido', 'p1Relacion', 'p1Firma'], 'string', 'max' => 50],
                [['p5Observaciones'], 'string', 'max' => 500]];

        
            
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
            'p1NoOficio' => 'No de Oficio',
            'p1Fecha' => 'Fecha',
            'p1Dirigido' => 'Dirigido a',
            'p1Relacion' => 'En Relacion a',
            'p1Firma' => 'Quien Firmara',
            'p2Memoria' => 'Memoria de calculo firmada y avalada por un perito registrado en el H.Ayuntamiento.',
            'p2Poliza' => 'Poliza de Seguro de daños a terceros',
            'p2Propiedad' => 'Acreditar la propiedad o contrato de arrendamiento',
            'p2PagoImpuesto' => 'Copia del pago de impuesto predial urbano actualizado',
            'p2CartaAutorizacion' => 'Carta de autorizacion del propietario del bien inmueble, dando facultades al ayuntamiento para realizar visitas de inspeccion ART 50',
            'p2CartaCompromiso' => 'Carta compromiso de la empresa de mantener el anuncio en perfecto estado ART 50',
            'p2LicenciaConstruccion' => 'Licencia de Construccion ART 71 reglamento de construccion del MPIO de Culiacan',
            'p2AutorizacionProteccionCivil' => 'Autorizacion por parte de Proteccion Civil de la memoria de calculo ART 36',
            'p3Memoria' => 'Memoria de calculo firmada y avalada por un perito registrado en el H.Ayuntamiento.',
            'p3Poliza' => 'Poliza de Seguro de daños a terceros',
            'p3Propiedad' => 'Acreditar la propiedad o contrato de arrendamiento',
            'p3PagoImpuesto' => 'Copia del pago de impuesto predial urbano actualizado',
            'p3CartaAutorizacion' => 'Carta de autorizacion del propietario del bien inmueble, dando facultades al ayuntamiento para realizar visitas de inspeccion ART 50',
            'p3CartaCompromiso' => 'Carta compromiso de la empresa de mantener el anuncio en perfecto estado ART 50',
            'p3LicenciaConstruccion' => 'Licencia de Construccion ART 71 reglamento de construccion del MPIO de Culiacan',
            'p3AutorizacionProteccionCivil' => 'Autorizacion por parte de Proteccion Civil de la memoria de calculo ART 36',
            'p4ReciboPago' => 'Recibo de Pago',
            'p5Supervisor' => 'Supervisor',
            'p5Observaciones' => 'Observaciones',
            'p6Permiso' => 'Permiso',
        ];
    }

    public function getP1NoOficio()
    {
        return (int) $this->retriveAttr(1363,24)->valor; 
    }
    public function setP1NoOficio($value)
    {   
        $atributo=$this->retriveAttr(1363,24);
        $atributo->valor = $value;
    }
    public function getP1Fecha()
    {
        return (string) $this->retriveAttr(1364,24)->valor; 
    }
    public function setP1Fecha($value)
    {   
        $atributo=$this->retriveAttr(1364,24);
        $atributo->valor = $value;
    }
    public function getP1Dirigido()
    {
        return (string) $this->retriveAttr(1365,24)->valor; 
    }
    public function setP1Dirigido($value)
    {   
        $atributo=$this->retriveAttr(1365,24);
        $atributo->valor = $value;
    }
    public function getP1Relacion()
    {
        return (string) $this->retriveAttr(1366,24)->valor; 
    }
    public function setP1Relacion($value)
    {   
        $atributo=$this->retriveAttr(1366,24);
        $atributo->valor = $value;
    }
    public function getP1Firma()
    {
        return (string) $this->retriveAttr(1367,24)->valor; 
    }
    public function setP1Firma($value)
    {   
        $atributo=$this->retriveAttr(1367,24);
        $atributo->valor = $value;
    }
    public function getP2Memoria()
    {
        return  $this->retriveAttr(1368,25)->valor; 
    }
    public function setP2Memoria($value)
    {   
        $atributo=$this->retriveAttr(1368,25);
        $atributo->valor = $value;
    }
    public function getP2Poliza()
    {
        return  $this->retriveAttr(1369,25)->valor; 
    }
    public function setP2Poliza($value)
    {   
        $atributo=$this->retriveAttr(1369,25);
        $atributo->valor = $value;
    }
    public function getP2Propiedad()
    {
        return  $this->retriveAttr(1370,25)->valor; 
    }
    public function setP2Propiedad($value)
    {   
        $atributo=$this->retriveAttr(1370,25);
        $atributo->valor = $value;
    }
    public function getP2PagoImpuesto()
    {
        return  $this->retriveAttr(1371,25)->valor; 
    }
    public function setP2PagoImpuesto($value)
    {   
        $atributo=$this->retriveAttr(1371,25);
        $atributo->valor = $value;
    }
    public function getP2CartaAutorizacion()
    {
        return  $this->retriveAttr(1372,25)->valor; 
    }
    public function setP2CartaAutorizacion($value)
    {   
        $atributo=$this->retriveAttr(1372,25);
        $atributo->valor = $value;
    }
    public function getP2CartaCompromiso()
    {
        return  $this->retriveAttr(1373,25)->valor; 
    }
    public function setP2CartaCompromiso($value)
    {   
        $atributo=$this->retriveAttr(1373,25);
        $atributo->valor = $value;
    }
    public function getP2LicenciaConstruccion()
    {
        return  $this->retriveAttr(1374,25)->valor; 
    }
    public function setP2LicenciaConstruccion($value)
    {   
        $atributo=$this->retriveAttr(1374,25);
        $atributo->valor = $value;
    }
    public function getP2AutorizacionProteccionCivil()
    {
        return  $this->retriveAttr(1375,25)->valor; 
    }
    public function setP2AutorizacionProteccionCivil($value)
    {   
        $atributo=$this->retriveAttr(1375,25);
        $atributo->valor = $value;
    }
    public function getP3Memoria()
    {
        return (int) $this->retriveAttr(1376,26)->valor; 
    }
    public function setP3Memoria($value)
    {   
        $atributo=$this->retriveAttr(1376,26);
        $atributo->valor = $value;
    }
    public function getP3Poliza()
    {
        return (int) $this->retriveAttr(1377,26)->valor; 
    }
    public function setP3Poliza($value)
    {   
        $atributo=$this->retriveAttr(1377,26);
        $atributo->valor = $value;
    }
    public function getP3Propiedad()
    {
        return (int) $this->retriveAttr(1378,26)->valor; 
    }
    public function setP3Propiedad($value)
    {   
        $atributo=$this->retriveAttr(1378,26);
        $atributo->valor = $value;
    }
    public function getP3PagoImpuesto()
    {
        return (int) $this->retriveAttr(1379,26)->valor; 
    }
    public function setP3PagoImpuesto($value)
    {   
        $atributo=$this->retriveAttr(1379,26);
        $atributo->valor = $value;
    }
    public function getP3CartaAutorizacion()
    {
        return (int) $this->retriveAttr(1380,26)->valor; 
    }
    public function setP3CartaAutorizacion($value)
    {   
        $atributo=$this->retriveAttr(1380,26);
        $atributo->valor = $value;
    }
    public function getP3CartaCompromiso()
    {
        return (int) $this->retriveAttr(1381,26)->valor; 
    }
    public function setP3CartaCompromiso($value)
    {   
        $atributo=$this->retriveAttr(1381,26);
        $atributo->valor = $value;
    }
    public function getP3LicenciaConstruccion()
    {
        return (int) $this->retriveAttr(1382,26)->valor; 
    }
    public function setP3LicenciaConstruccion($value)
    {   
        $atributo=$this->retriveAttr(1382,26);
        $atributo->valor = $value;
    }
    public function getP3AutorizacionProteccionCivil()
    {
        return (int) $this->retriveAttr(1383,26)->valor; 
    }
    public function setP3AutorizacionProteccionCivil($value)
    {   
        $atributo=$this->retriveAttr(1383,26);
        $atributo->valor = $value;
    }
    public function getP4ReciboPago()
    {
        return  $this->retriveAttr(1384,27)->valor; 
    }
    public function setP4ReciboPago($value)
    {   
        $atributo=$this->retriveAttr(1384,27);
        $atributo->valor = $value;
    }
    public function getP5Supervisor()
    {
        return (int) $this->retriveAttr(1385,28)->valor; 
    }
    public function setP5Supervisor($value)
    {   
        $atributo=$this->retriveAttr(1385,28);
        $atributo->valor = $value;
    }
    public function getP5Observaciones()
    {
        return (string) $this->retriveAttr(1386,28)->valor; 
    }
    public function setP5Observaciones($value)
    {   
        $atributo=$this->retriveAttr(1386,28);
        $atributo->valor = $value;
    }
    public function getP6Permiso()
    {
        return  $this->retriveAttr(1387,29)->valor; 
    }
    public function setP6Permiso($value)
    {   
        $atributo=$this->retriveAttr(1387,29);
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
