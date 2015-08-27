<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VisitasLugares".
 *
 * @property integer $id
 * @property integer $lugares_did
 * @property string $fecha_ft
 * @property integer $estatus_did
 * @property string $descripcion
 */

class VisitasLugares extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'VisitasLugares';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['lugares_did', 'fecha_ft', 'descripcion'], 'required'],
            [['lugares_did', 'estatus_did'], 'integer'],
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
            'lugares_did' => 'Lugares Did',
            'fecha_ft' => 'Fecha Ft',
            'estatus_did' => 'Estatus Did',
            'descripcion' => 'Descripcion',
        ];
    }


}
