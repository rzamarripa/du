<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Proyectos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $estatus_did
 * @property string $fecha_ft
 */

class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Proyectos';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre'], 'required'],
            [['nombre', 'descripcion'], 'string'],
            [['estatus_did'], 'integer'],
            [['fecha_ft'], 'safe']
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
            'descripcion' => 'Descripcion',
            'estatus_did' => 'Estatus Did',
            'fecha_ft' => 'Fecha Ft',
        ];
    }
    public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }

}
