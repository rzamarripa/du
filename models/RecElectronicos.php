<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RecElectronicos".
 *
 * @property integer $id
 * @property string $escuela_did
 * @property string $empresa_did
 * @property string $fecha_ft
 * @property string $observaciones
 */

class RecElectronicos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'RecElectronicos';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['fecha_ft', 'observaciones'], 'required'],
            [['observaciones'], 'string'],
            [['escuela_did', 'empresa_did', 'estatus_did'], 'integer'],
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
            'escuela_did' => 'Escuela',
            'empresa_did' => 'Empresa',
            'fecha_ft' => 'Fecha',
            'observaciones' => 'Observaciones',
            'estatus_did' => 'Estatus'
        ];
    }
     public function getEmpresas()
    {
        return $this->hasOne(Empresas::className(), ['id' => 'empresa_did']);
    }
     public function getEscuelas()
    {
        return $this->hasOne(Escuelas::className(), ['id' => 'escuela_did']);
    }
      public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }


}
