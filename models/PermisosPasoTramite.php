<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PermisosPasoTramite".
 *
 * @property integer $id
 * @property integer $tipoTramiteRoleId
 * @property integer $pasoTramiteId
 * @property integer $leer
 * @property integer $crear
 * @property integer $actualizar
 * @property integer $borrar
 *
 * @property PasosTramite $pasoTramite
 * @property TipoTramitesRoles $tipoTramiteRole
 */

class PermisosPasoTramite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PermisosPasoTramite';
    }




    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['id', 'tipoTramiteRoleId', 'pasoTramiteId', 'leer', 'crear', 'actualizar', 'borrar'], 'required'],
            [['id', 'tipoTramiteRoleId', 'pasoTramiteId', 'leer', 'crear', 'actualizar', 'borrar'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipoTramiteRoleId' => 'Tipo Tramite Role ID',
            'pasoTramiteId' => 'Paso Tramite ID',
            'leer' => 'Leer',
            'crear' => 'Crear',
            'actualizar' => 'Actualizar',
            'borrar' => 'Borrar',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasoTramite()
    {
        return $this->hasOne(PasosTramite::className(), ['id' => 'pasoTramiteId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTramiteRole()
    {
        return $this->hasOne(TipoTramitesRoles::className(), ['id' => 'tipoTramiteRoleId']);
    }
}
