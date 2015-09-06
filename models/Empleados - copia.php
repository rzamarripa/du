<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Empleados".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $celular
 * @property string $puesto
 * @property string $direccion
 * @property integer $estatus_did
 * @property string $fechaCreacion
 * @property integer $departamento_did
 *
 * @property Departamentos $departamentoD
 */

class Empleados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'Empleados';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'apellidos', 'celular', 'estatus_did'], 'required'],
            [['nombre', 'apellidos', 'celular', 'puesto', 'direccion'], 'string'],
            [['estatus_did', 'departamento_did'], 'integer'],
            [['fechaCreacion'], 'safe']
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
            'estatus_did' => 'Estatus ',
            'fechaCreacion' => 'Fecha Creacion',
            'departamento_did' => 'Departamento ',
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
