<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lugares".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $contacto
 *
 * @property Lugares $id0
 * @property Lugares $lugares
 * @property VisitasLugares[] $visitasLugares
 */

class Lugares extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Lugares';
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
            'direccion' => 'Dirección',
            'telefono' => 'Telefono',
            'contacto' => 'Contacto',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Lugares::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLugares()
    {
        return $this->hasOne(Lugares::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitasLugares()
    {
        return $this->hasMany(VisitasLugares::className(), ['lugares_did' => 'id']);
    }
}
