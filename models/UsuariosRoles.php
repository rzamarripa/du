<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "UsuariosRoles".
 *
 * @property integer $roleId
 * @property integer $usuarioId
 *
 * @property Roles $role
 * @property Usuarios $usuario
 */

class UsuariosRoles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'UsuariosRoles';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['roleId', 'usuarioId'], 'required'],
            [['roleId', 'usuarioId'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roleId' => 'Role ID',
            'usuarioId' => 'Usuario ID',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoles()
    {
        return $this->hasOne(Roles::className(), ['id' => 'roleId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasOne(Usuarios::className(), ['id' => 'usuarioId']);
    }
}
