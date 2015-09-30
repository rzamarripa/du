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

class TramitesAnunciosTemporales extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 2007; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['p1NoOficioTemporal', 'p3SolicitudTemporal', 'p5SupervisorTemporal', 'p5ObservacionesTemporal'], 'integer'],
                [['p1FechaTemporal', 'p1DirigidoTemporal', 'p1RelacionTemporal', 'p1FirmaTemporal', 'p2SolicitudTemporal', 'p4ReciboPagoTemporal', 'p4AnuncioTemporal', 'p4EventoTemporal', 'p4MedidasTemporal', 'p4CantidadTemporal', 'p4UbicacionTemporal', 'p4PropietarioTemporal', 'p4AñoTemporal', 'p4ObservacionesTemporal', 'p6PermisoTemporal', 'p4SuperficieTemporal'], 'string'],
                [['p4CostoTemporal'], 'double'],
                [['p1NoOficioTemporal', 'p1FechaTemporal', 'p1DirigidoTemporal', 'p1RelacionTemporal', 'p1FirmaTemporal'], 'required', 'on'=>'30'],
                [['p2SolicitudTemporal'], 'required', 'on'=>'31'],
                [['p3SolicitudTemporal'], 'required', 'on'=>'32'],
                [['p4ReciboPagoTemporal', 'p4AnuncioTemporal', 'p4EventoTemporal', 'p4MedidasTemporal', 'p4CantidadTemporal', 'p4UbicacionTemporal', 'p4PropietarioTemporal', 'p4AñoTemporal', 'p4CostoTemporal', 'p4ObservacionesTemporal', 'p4SuperficieTemporal'], 'required', 'on'=>'33'],
                [['p5SupervisorTemporal', 'p5ObservacionesTemporal'], 'required', 'on'=>'34'],
                [['p6PermisoTemporal'], 'required', 'on'=>'35'],
                [['p1DirigidoTemporal', 'p1RelacionTemporal', 'p1FirmaTemporal', 'p4AnuncioTemporal', 'p4EventoTemporal', 'p4MedidasTemporal', 'p4CantidadTemporal', 'p4UbicacionTemporal', 'p4PropietarioTemporal', 'p4SuperficieTemporal'], 'string', 'max' => 50],
                [['p4ObservacionesTemporal'], 'string', 'max' => 500]];

        
            
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
            'p1NoOficioTemporal' => 'No de Oficio',
            'p1FechaTemporal' => 'Fecha',
            'p1DirigidoTemporal' => 'Dirigido a',
            'p1RelacionTemporal' => 'En Relacion a',
            'p1FirmaTemporal' => 'Quien Firmara',
            'p2SolicitudTemporal' => 'Solicitud',
            'p3SolicitudTemporal' => 'Solicitud',
            'p4ReciboPagoTemporal' => 'Pago',
            'p4AnuncioTemporal' => 'Que Anuncio es',
            'p4EventoTemporal' => 'Qu Evento es',
            'p4MedidasTemporal' => 'Medidas',
            'p4CantidadTemporal' => 'Cantidad',
            'p4UbicacionTemporal' => 'Ubicacion',
            'p4PropietarioTemporal' => 'Propietario',
            'p4AñoTemporal' => 'Año',
            'p4CostoTemporal' => 'Costo',
            'p4ObservacionesTemporal' => 'Observaciones',
            'p5SupervisorTemporal' => 'Supervisor',
            'p5ObservacionesTemporal' => 'Observaciones',
            'p6PermisoTemporal' => 'Permiso',
            'p4SuperficieTemporal' => 'Superficie de Anuncio',
        ];
    }

    public function getP1NoOficioTemporal()
    {
        return (int) $this->retriveAttr(1388,30)->valor; 
    }
    public function setP1NoOficioTemporal($value)
    {   
        $atributo=$this->retriveAttr(1388,30);
        $atributo->valor = $value;
    }
    public function getP1FechaTemporal()
    {
        return (string) $this->retriveAttr(1389,30)->valor; 
    }
    public function setP1FechaTemporal($value)
    {   
        $atributo=$this->retriveAttr(1389,30);
        $atributo->valor = $value;
    }
    public function getP1DirigidoTemporal()
    {
        return (string) $this->retriveAttr(1390,30)->valor; 
    }
    public function setP1DirigidoTemporal($value)
    {   
        $atributo=$this->retriveAttr(1390,30);
        $atributo->valor = $value;
    }
    public function getP1RelacionTemporal()
    {
        return (string) $this->retriveAttr(1391,30)->valor; 
    }
    public function setP1RelacionTemporal($value)
    {   
        $atributo=$this->retriveAttr(1391,30);
        $atributo->valor = $value;
    }
    public function getP1FirmaTemporal()
    {
        return (string) $this->retriveAttr(1392,30)->valor; 
    }
    public function setP1FirmaTemporal($value)
    {   
        $atributo=$this->retriveAttr(1392,30);
        $atributo->valor = $value;
    }
    public function getP2SolicitudTemporal()
    {
        return  $this->retriveAttr(1393,31)->valor; 
    }
    public function setP2SolicitudTemporal($value)
    {   
        $atributo=$this->retriveAttr(1393,31);
        $atributo->valor = $value;
    }
    public function getP3SolicitudTemporal()
    {
        return (int) $this->retriveAttr(1394,32)->valor; 
    }
    public function setP3SolicitudTemporal($value)
    {   
        $atributo=$this->retriveAttr(1394,32);
        $atributo->valor = $value;
    }
    public function getP4ReciboPagoTemporal()
    {
        return  $this->retriveAttr(1395,33)->valor; 
    }
    public function setP4ReciboPagoTemporal($value)
    {   
        $atributo=$this->retriveAttr(1395,33);
        $atributo->valor = $value;
    }
    public function getP4AnuncioTemporal()
    {
        return (string) $this->retriveAttr(1396,33)->valor; 
    }
    public function setP4AnuncioTemporal($value)
    {   
        $atributo=$this->retriveAttr(1396,33);
        $atributo->valor = $value;
    }
    public function getP4EventoTemporal()
    {
        return (string) $this->retriveAttr(1397,33)->valor; 
    }
    public function setP4EventoTemporal($value)
    {   
        $atributo=$this->retriveAttr(1397,33);
        $atributo->valor = $value;
    }
    public function getP4MedidasTemporal()
    {
        return (string) $this->retriveAttr(1398,33)->valor; 
    }
    public function setP4MedidasTemporal($value)
    {   
        $atributo=$this->retriveAttr(1398,33);
        $atributo->valor = $value;
    }
    public function getP4CantidadTemporal()
    {
        return (string) $this->retriveAttr(1399,33)->valor; 
    }
    public function setP4CantidadTemporal($value)
    {   
        $atributo=$this->retriveAttr(1399,33);
        $atributo->valor = $value;
    }
    public function getP4UbicacionTemporal()
    {
        return (string) $this->retriveAttr(1400,33)->valor; 
    }
    public function setP4UbicacionTemporal($value)
    {   
        $atributo=$this->retriveAttr(1400,33);
        $atributo->valor = $value;
    }
    public function getP4PropietarioTemporal()
    {
        return (string) $this->retriveAttr(1401,33)->valor; 
    }
    public function setP4PropietarioTemporal($value)
    {   
        $atributo=$this->retriveAttr(1401,33);
        $atributo->valor = $value;
    }
    public function getP4AñoTemporal()
    {
        return (string) $this->retriveAttr(1402,33)->valor; 
    }
    public function setP4AñoTemporal($value)
    {   
        $atributo=$this->retriveAttr(1402,33);
        $atributo->valor = $value;
    }
    public function getP4CostoTemporal()
    {
        return (float) $this->retriveAttr(1403,33)->valor; 
    }
    public function setP4CostoTemporal($value)
    {   
        $atributo=$this->retriveAttr(1403,33);
        $atributo->valor = $value;
    }
    public function getP4ObservacionesTemporal()
    {
        return (string) $this->retriveAttr(1404,33)->valor; 
    }
    public function setP4ObservacionesTemporal($value)
    {   
        $atributo=$this->retriveAttr(1404,33);
        $atributo->valor = $value;
    }
    public function getP5SupervisorTemporal()
    {
        return (int) $this->retriveAttr(1405,34)->valor; 
    }
    public function setP5SupervisorTemporal($value)
    {   
        $atributo=$this->retriveAttr(1405,34);
        $atributo->valor = $value;
    }
    public function getP5ObservacionesTemporal()
    {
        return (int) $this->retriveAttr(1406,34)->valor; 
    }
    public function setP5ObservacionesTemporal($value)
    {   
        $atributo=$this->retriveAttr(1406,34);
        $atributo->valor = $value;
    }
    public function getP6PermisoTemporal()
    {
        return  $this->retriveAttr(1407,35)->valor; 
    }
    public function setP6PermisoTemporal($value)
    {   
        $atributo=$this->retriveAttr(1407,35);
        $atributo->valor = $value;
    }
    public function getP4SuperficieTemporal()
    {
        return (string) $this->retriveAttr(1410,33)->valor; 
    }
    public function setP4SuperficieTemporal($value)
    {   
        $atributo=$this->retriveAttr(1410,33);
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
