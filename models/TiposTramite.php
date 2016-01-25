<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TiposTramite".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Atributos[] $atributos
 * @property PasosTramite[] $pasosTramites
 * @property Tramites[] $tramites
 */
class TiposTramite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TiposTramite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtributos()
    {
        return $this->hasMany(Atributos::className(), ['tipoTramiteId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasosTramites()
    {
        return $this->hasMany(PasosTramite::className(), ['tipoTramiteId' => 'id'])->orderBy('secuencia');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTramites()
    {
        return $this->hasMany(Tramites::className(), ['tipoTramiteId' => 'id']);
    }
}
