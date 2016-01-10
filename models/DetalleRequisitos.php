<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DetalleRequisitos".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $requisitoId
 *
 * @property Requisitos $requisito
 */

class DetalleRequisitos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'DetalleRequisitos';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'descripcion', 'requisitoId'], 'required'],
            [['nombre', 'descripcion'], 'string'],
            [['requisitoId'], 'integer']
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
            'requisitoId' => 'Requisito ID',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisito()
    {
        return $this->hasOne(Requisitos::className(), ['id' => 'requisitoId']);
    }
}
