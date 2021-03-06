<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TiposAtributo".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property Atributos[] $atributos
 */
class TiposAtributo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const ENTERO = "int";
    const CADENA = "string";
    const BOLEANO = "bool";
    const TEXTO = 'text';
    const ARCHIVO = 'archivo';
    const FLOTANTE = 'float';
    const CORREO = 'email';

    const FECHA = 'date';

    
    public static function tableName()
    {
        return 'TiposAtributo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string']
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtributos()
    {
        return $this->hasMany(Atributos::className(), ['tipoAtributoId' => 'id']);
    }
}
