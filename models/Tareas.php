<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tareas".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $contacto
 */

class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Tareas';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'direccion', 'telefono', 'contacto'], 'required'],
            [['nombre', 'direccion', 'telefono', 'contacto'], 'string']
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
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'contacto' => 'Contacto',
        ];
    }


}
