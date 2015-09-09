<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ValoresTramite".
 *
 * @property integer $tramiteId
 * @property integer $atributoId
 * @property string $valor
 *
 * @property Atributos $atributo
 * @property Tramites $tramite
 */

class ValoresTramite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'ValoresTramite';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['tramiteId', 'atributoId'], 'required'],
            [['tramiteId', 'atributoId'], 'integer'],
            [['valor'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tramiteId' => 'Tramite ID',
            'atributoId' => 'Atributo ID',
            'valor' => 'Valor',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtributo()
    {
        return $this->hasOne(Atributos::className(), ['id' => 'atributoId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTramite()
    {
        return $this->hasOne(Tramites::className(), ['id' => 'tramiteId']);
    }
}
