<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Atributos".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $tipoAtributoId
 * @property integer $pasoId
 * @property integer $tipoTramiteId
 * @property integer $allowNull
 * @property integer $attrLength
 *
 * @property PasosTramite $paso
 * @property TiposAtributo $tipoAtributo
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 */

class Atributos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Atributos';
    }




    /**
     * @inheritdoc
     */
    public function rules()
    {
                return [
            [['nombre', 'tipoAtributoId', 'pasoId', 'tipoTramiteId'], 'required'],
            [['nombre', 'label'], 'string'],
            [['tipoAtributoId', 'pasoId', 'tipoTramiteId', 'allowNull', 'attrLength'], 'integer']
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
            'label' => 'Label',
            'tipoAtributoId' => 'Tipo Atributo',
            'pasoId' => 'Paso',
            'tipoTramiteId' => 'Tipo Tramite',
            'allowNull' => 'Allow Null',
            'attrLength' => 'Attr Length',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaso()
    {
        return $this->hasOne(PasosTramite::className(), ['id' => 'pasoId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoAtributo()
    {
        return $this->hasOne(TiposAtributo::className(), ['id' => 'tipoAtributoId']);
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
        return $this->hasMany(ValoresTramite::className(), ['atributoId' => 'id']);
    }
}
