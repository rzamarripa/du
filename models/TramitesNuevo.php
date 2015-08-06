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

class TramitesNuevo extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['nombre', 'direccion', 'edad', 'telefono', 'correo'], 'string'],
                [['nombre'], 'required', on=>'1'],
                [['correo'], 'required', on=>'2'],
                [['nombre'], 'string', 'max' => 256],
                [['edad'], 'string', 'max' => 3],
                [['telefono'], 'string', 'max' => 10],
                [['correo'], 'string', 'max' => 128]];

        
            
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
        ];
    }

    public function getNombre()
    {
        return $this->retriveAttr('nombre',1);
    }
    public function setNombre($value)
    {
        $atributo=$this->retriveAttr('nombre',1);

        $atributo->valor = $value;

    }
    public function getDireccion()
    {
        return $this->retriveAttr('direccion',1);
    }
    public function setDireccion($value)
    {
        $atributo=$this->retriveAttr('direccion',1);

        $atributo->valor = $value;

    }
    public function getEdad()
    {
        return $this->retriveAttr('edad',1);
    }
    public function setEdad($value)
    {
        $atributo=$this->retriveAttr('edad',1);

        $atributo->valor = $value;

    }
    public function getTelefono()
    {
        return $this->retriveAttr('telefono',2);
    }
    public function setTelefono($value)
    {
        $atributo=$this->retriveAttr('telefono',2);

        $atributo->valor = $value;

    }
    public function getCorreo()
    {
        return $this->retriveAttr('correo',2);
    }
    public function setCorreo($value)
    {
        $atributo=$this->retriveAttr('correo',2);

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
