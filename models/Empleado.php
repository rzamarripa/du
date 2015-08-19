<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $celular
 * @property string $puesto
 * @property string $direccion
 * @property integer $estatus_did
 * @property integer $estatus_aid
 *
 * @property Empleado $id0
 * @property Empleado $empleado
 * @property Estatus $estatusD
 * @property Estatus $estatusA
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'puesto', 'estatus_did, departamento_did'], 'required'],
            [['nombre', 'apellidos', 'celular', 'puesto', 'direccion'], 'string'],
            [['estatus_did', 'departamento_did'], 'integer']
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
            'apellidos' => 'Apellidos',
            'celular' => 'Celular',
            'puesto' => 'Puesto',
            'direccion' => 'Direccion',
            'estatus_did' => 'Estatus Did',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Empleado::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }

     public function getDepartamento()
    {
        return $this->hasOne(Departamentos::className(), ['id' => 'departamento_did']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
}
