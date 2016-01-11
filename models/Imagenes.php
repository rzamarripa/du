<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Imagenes".
 *
 * @property integer $id
 * @property integer $encabezado_id
 * @property string $tipoDocumento
 * @property resource $imagen
 *
 * @property EncabezadoImagenes $encabezado
 */

class Imagenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Imagenes';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['consecutivo', 'encabezado_id'], 'integer'],
            [['imagen', 'archivo', 'ruta', 'tipoDocumento'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'encabezado_id' => 'Encabezado ID',
            'tipoDocumento' => 'Tipo Documento',
            'imagen' => 'Imagen',
        ];
    }

    public function getEncabezado()
    {
        return $this->hasOne(EncabezadoImagenes::className(), ['id' => 'encabezado_id']);
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncabezado()
    {
        return $this->hasOne(EncabezadoImagenes::className(), ['id' => 'encabezado_id']);
    }
}
