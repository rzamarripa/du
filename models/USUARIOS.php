<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "USUARIOS".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property integer $status
 * @property string $email
 * @property string $auth_key
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password_reset_token
 */
class USUARIOS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static $LEER = 1;
    public static $CREAR = 2;
    public static $ACTUALIZAR = 3;
    public static $BORRAR = 4;

    public static function tableName()
    {
        return 'usuarios';
    }
        

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email'], 'required'],
            [['username', 'password_hash', 'email', 'auth_key', 'password_reset_token'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'status' => 'Status',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password_reset_token' => 'Password Reset Token',
        ];
    }

    public function getUsuariosRoles()
    {
        return $this->hasMany(UsuariosRoles::className(), ['usuarioId' => 'id']);
    }

    public function getRoles()
    {
        return $this->hasMany(Roles::className(), ['id' => 'roleId'])->viaTable('UsuariosRoles', ['usuarioId' => 'id']);
    }

    public static function permisosTramite($tramiteId)
    {
        $permisos=[
                USUARIOS::$LEER=>false,
                USUARIOS::$CREAR=>false,
                USUARIOS::$ACTUALIZAR=>false,
                USUARIOS::$BORRAR=>false

        ];

        if(Yii::$app->user->isGuest)
            return $permisos;

        $usuario = USUARIOS::findOne(Yii::$app->user->id);
        foreach ($usuario->roles as $role) {
            foreach ($role->tipoTramitesRoles as $tramiteRole) {
                if($tramiteRole->tipoTramiteId == $tramiteId)
                {
                    $permisos[USUARIOS::$LEER] = $permisos[USUARIOS::$LEER] || $tramiteRole->leer;
                    $permisos[USUARIOS::$CREAR] = $permisos[USUARIOS::$CREAR] || $tramiteRole->crear;
                    $permisos[USUARIOS::$ACTUALIZAR] = $permisos[USUARIOS::$ACTUALIZAR] || $tramiteRole->actualizar;
                    $permisos[USUARIOS::$BORRAR] = $permisos[USUARIOS::$BORRAR] || $tramiteRole->borrar;
                }
            
            }
        }
        return $permisos;
    }
    //Yii::$app->user->
}
