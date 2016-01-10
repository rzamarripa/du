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

class LicUsoSueloVictor extends \app\models\TramitEXt
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
        
            
            return [[['nombre', 'direccion', 'p2DictamenImpactoAmbiental'], 'string'],
                [['nombre', 'direccion'], 'required', 'on'=>'8'],
                [['p2DictamenImpactoAmbiental'], 'required', 'on'=>'9'],
                [['nombre'], 'string', 'max' => 100],
                [['direccion'], 'string', 'max' => 500]];

        
            
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
            'nombre' => 'Nombre',
            'direccion' => 'Dirección',
            'p2DictamenImpactoAmbiental' => 'Dictamen de Impacto Ambiental',
        ];
    }

    public function getNombre()
    {
        return (string) $this->retriveAttr(1129,8)->valor; 
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(1129,8);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(1130,8)->valor; 
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(1130,8);
        $atributo->valor = $value;
    }
    public function getP2DictamenImpactoAmbiental()
    {
        return (string) $this->retriveAttr(1131,9)->valor; 
    }
    public function setP2DictamenImpactoAmbiental($value)
    {   
        $atributo=$this->retriveAttr(1131,9);
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
