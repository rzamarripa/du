<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciclos".
 *
 * @property integer $id
 * @property string $nombre
 */

class Ciclos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'ciclos';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre'], 'string']
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


}
