<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VisitasEscuelas".
 *
 * @property integer $id
 * @property integer $escuela_did
 * @property string $fecha_ft
 * @property integer $estatus_did
 * @property string $descripcion
 */

class VisitasEscuelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'VisitasEscuelas';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['escuela_did', 'fecha_ft'], 'required'],
            [['escuela_did', 'estatus_did'], 'integer'],
            [['fecha_ft'], 'safe'],
            [['descripcion'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'escuela_did' => 'Escuela ',
            'fecha_ft' => 'Fecha ',
            'estatus_did' => 'Estatus ',
            'descripcion' => 'Descripcion',
        ];
    }
     public function getEscuela()
    {
        return $this->hasOne(Escuelas::className(), ['id' => 'escuela_did']);
    }


}
