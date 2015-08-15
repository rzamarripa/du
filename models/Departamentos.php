<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Departamentos".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $estatus_did
 */

class Departamentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Departamentos';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'estatus_did'], 'required'],
            [['nombre'], 'string'],
            [['estatus_did'], 'integer']
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
            'estatus_did' => 'Estatus Did',
        ];
    }


}
