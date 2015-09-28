<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "VisitasEmpresas".
 *
 * @property integer $id
 * @property integer $empresa_did
 * @property string $fechaCreacion
 * @property string $descripcion
 * @property integer $estatus_did
 *
 * @property Empresas $empresaD
 */

class VisitasEmpresas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'VisitasEmpresas';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['empresa_did', 'fechaCreacion', 'descripcion', 'estatus_did'], 'required'],
            [['empresa_did', 'estatus_did'], 'integer'],
            [['fechaCreacion'], 'safe'],
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
            'empresa_did' => 'Empresa',
            'fechaCreacion' => 'Fecha ',
            'descripcion' => 'Descripción',
            'estatus_did' => 'Estatus ',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasOne(Empresas::className(), ['id' => 'empresa_did']);
    }
     public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }
}
