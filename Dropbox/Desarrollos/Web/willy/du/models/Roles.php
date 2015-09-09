<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Roles".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property TipoTramitesRoles[] $tipoTramitesRoles
 * @property UsuariosRoles[] $usuariosRoles
 * @property Usuarios[] $usuarios
 */

class Roles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Roles';
    }




    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre'], 'required'],
            [['nombre', 'descripcion'], 'string']
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
            'descripcion' => 'Descripcion',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTramitesRoles()
    {
        return $this->hasMany(TipoTramitesRoles::className(), ['roleId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
 

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(USUARIOS::className(), ['id' => 'usuarioId'])->viaTable('UsuariosRoles', ['roleId' => 'id']);
    }

}