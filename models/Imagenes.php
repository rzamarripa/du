<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Imagenes".
 *
 * @property integer $consecutivo
 * @property string $imagen
 * @property string $archivo
 * @property string $ruta
 * @property string $tipoDocumento
 * @property integer $encabezado_id
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
            [['consecutivo','imagen', 'archivo', 'ruta', 'tipoDocumento'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'consecutivo' => 'Consecutivo',
            'imagen' => 'Imagen',
            'archivo' => 'Archivo',
            'ruta' => 'Ruta',
            'tipoDocumento' => 'Tipo Documento',
            'encabezado_id' => 'Encabezado ID',
        ];
    }


}
