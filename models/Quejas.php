<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Quejas".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $fecha_ft
 * @property string $motivo
 * @property string $afectacion
 */

class Quejas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Quejas';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'fecha_ft', 'motivo', 'afectacion'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'motivo', 'afectacion'], 'string'],
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
            'fecha_ft' => 'Fecha',
            'motivo' => 'Motivo de denuncia',
            'afectacion' => 'Observaciones',
        ];
    }
    public function getEstatus()
     {
           return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
     }

}
