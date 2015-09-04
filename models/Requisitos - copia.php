<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Requisitos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property DetalleRequisitos[] $detalleRequisitos
 */

class Requisitos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Requisitos';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'descripcion'], 'required'],
            [['nombre', 'descripcion'], 'string']
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
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleRequisitos()
    {
        return $this->hasMany(DetalleRequisitos::className(), ['requisitoId' => 'id']);
    }
}
