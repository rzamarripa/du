<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folios".
 *
 * @property integer $ciclo_id
 * @property integer $tipoTramite_id
 * @property integer $proximofolio
 */

class Folios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'folios';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['ciclo_id', 'tipoTramite_id', 'proximofolio'], 'required'],
            [['ciclo_id', 'tipoTramite_id', 'proximofolio'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ciclo_id' => 'Ciclo ID',
            'tipoTramite_id' => 'Tipo Tramite ID',
            'proximofolio' => 'Proximofolio',
        ];
    }


}
