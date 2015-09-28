<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VisitasLugares".
     * @inheritdoc
     */
class VisitasLugares extends \yii\db\ActiveRecord
{

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
            'lugares_did' => 'Lugares ',
            'fecha_ft' => 'Fecha ',
            'estatus_did' => 'Estatus ',
            'descripcion' => 'Descripción',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLugares()
    {
        return $this->hasOne(Lugares::className(), ['id' => 'lugares_did']);
    }

       public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }

}
