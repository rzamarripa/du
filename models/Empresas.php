<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Empresas".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $contacto
 *
 * @property Empresas $id0
 * @property Empresas $empresas
 * @property VisitasEmpresas[] $visitasEmpresas
 */

class Empresas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Empresas';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'direccion', 'telefono', 'contacto'], 'required'],
            [['nombre', 'direccion', 'telefono', 'contacto'], 'string'],
            [['estatus_did'], 'integer']
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
            'direccion' => 'Dirección',
            'telefono' => 'Teléfono',
            'contacto' => 'Contacto',
            'estatus_did' => 'estatus'
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Empresas::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasOne(Empresas::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitasEmpresas()
    {
        return $this->hasMany(VisitasEmpresas::className(), ['empresa_did' => 'id']);
    }
        public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }

}
