<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "configuracion".
 *
 * @property integer $id
 * @property integer $mantenimiento
 * @property integer $cicloActual
 */

class Configuracion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'configuracion';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['mantenimiento'], 'required'],
            [['mantenimiento', 'cicloActual'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mantenimiento' => 'Mantenimiento',
            'cicloActual' => 'Ciclo Actual',
        ];
    }


}
