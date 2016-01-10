<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "EncabezadoImagenes".
 *
 * @property integer $id
 * @property integer $tramite_id
 * @property string $claveCatastral
 * @property string $nombreSolicitante
 * @property string $nombrePropietario
 * @property string $fechaRegistro
 * @property string $fechaCarga
 * @property integer $usuarioId
 * @property string $folioTramiteCarga
 *
 * @property Tramites $tramite
 */

class EncabezadoImagenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $tiposDocumento;
    public static function tableName()
    {
        return 'EncabezadoImagenes';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['tramite_id', 'usuarioId'], 'integer'],
            [['claveCatastral', 'nombreSolicitante', 'nombrePropietario', 'folioTramiteCarga'], 'string'],
            [['fechaRegistro', 'fechaCarga'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tramite_id' => 'Tramite ID',
            'claveCatastral' => 'Clave Catastral',
            'nombreSolicitante' => 'Nombre Solicitante',
            'nombrePropietario' => 'Nombre Propietario',
            'fechaRegistro' => 'Fecha Registro',
            'fechaCarga' => 'Fecha Carga',
            'usuarioId' => 'Usuario ID',
            'folioTramiteCarga' => 'Folio Tramite Carga',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTramite()
    {
        return $this->hasOne(Tramites::className(), ['id' => 'tramite_id']);
    }
}
