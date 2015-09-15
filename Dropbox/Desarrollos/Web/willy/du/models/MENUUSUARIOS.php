<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SIS_CATREPORTES_MENU_USUARIOS".
 *
 * @property string $IDPADRE
 * @property string $IDLLAVE
 * @property string $DESCRI
 * @property string $TIPO
 * @property string $COD_USU
 * @property string $IDPRIO
 *
 * @property FACPARU $cODUSU
 */
class MENUUSUARIOS extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'SIS_CATREPORTES_MENU_USUARIOS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDPADRE', 'IDLLAVE', 'DESCRI', 'TIPO', 'COD_USU', 'IDPRIO'], 'string'],
            [['IDLLAVE', 'DESCRI', 'TIPO', 'COD_USU', 'IDPRIO'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDPADRE' => 'Idpadre',
            'IDLLAVE' => 'Idllave',
            'DESCRI' => 'Descri',
            'TIPO' => 'Tipo',
            'COD_USU' => 'Cod  Usu',
            'IDPRIO' => 'Idprio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCODUSU()
    {
        return $this->hasOne(FACPARU::className(), ['cod_usu' => 'COD_USU']);
    }
}
