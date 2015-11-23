<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Escuelas".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $contacto
 */

class Escuelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Escuelas';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'direccion', 'telefono', 'contacto'], 'required'],
            [['nombre', 'direccion', 'telefono', 'contacto'], 'string'],
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
            'direccion' => 'Descripción',
            'telefono' => 'Teléfono',
            'contacto' => 'Contacto',
            'estatus_did' => 'Estatus ',
        ];
    }

    public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }


}
