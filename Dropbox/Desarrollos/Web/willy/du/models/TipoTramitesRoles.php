<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TipoTramitesRoles".
 *
 * @property integer $id
 * @property integer $roleId
 * @property integer $tipoTramiteId
 * @property integer $leer
 * @property integer $crear
 * @property integer $actualizar
 * @property integer $borrar
 *
 * @property PermisosPasoTramite[] $permisosPasoTramites
 * @property Roles $role
 * @property TiposTramite $tipoTramite
 */

class TipoTramitesRoles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'TipoTramitesRoles';
    }




    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['roleId', 'tipoTramiteId', 'leer', 'crear', 'actualizar', 'borrar'], 'required'],
            [['roleId', 'tipoTramiteId', 'leer', 'crear', 'actualizar', 'borrar'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'roleId' => 'Role ID',
            'tipoTramiteId' => 'Tipo Tramite ID',
            'leer' => 'Leer',
            'crear' => 'Crear',
            'actualizar' => 'Actualizar',
            'borrar' => 'Borrar',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPermisosPasoTramites()
    {
        return $this->hasMany(PermisosPasoTramite::className(), ['tipoTramiteRoleId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Roles::className(), ['id' => 'roleId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTramite()
    {
        return $this->hasOne(TiposTramite::className(), ['id' => 'tipoTramiteId']);
    }
}
