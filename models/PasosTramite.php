<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PasosTramite".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $secuencia
 * @property integer $tipoTramiteId
 *
 * @property Atributos[] $atributos
 * @property TiposTramite $tipoTramite
 * @property Tramites[] $tramites
 */
class PasosTramite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PasosTramite';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'secuencia', 'tipoTramiteId'], 'required'],
            [['nombre'], 'string'],
            [['secuencia', 'tipoTramiteId'], 'integer']
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
            'secuencia' => 'Secuencia',
            'tipoTramiteId' => 'Tipo Tramite ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtributos()
    {
        return $this->hasMany(Atributos::className(), ['pasoId' => 'id']);
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
    public function getTramites()
    {
        return $this->hasMany(Tramites::className(), ['pasoActualId' => 'id']);
    }
}
