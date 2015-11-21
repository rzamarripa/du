<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Dictamenes".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $fechaCreacion
 * @property string $domicilio
 * @property string $giro
 * @property string $duracion
 */

class Dictamenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Dictamenes';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'fechaCreacion', 'domicilio', 'giro', 'duracion'], 'required'],
            [['nombre', 'domicilio', 'giro', 'duracion'], 'string'],
            [['fechaCreacion'], 'safe']
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
            'fechaCreacion' => 'Fecha ',
            'domicilio' => 'Domicilio',
            'giro' => 'Giro',
            'duracion' => 'Duración',
        ];
    }
     public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }


}
