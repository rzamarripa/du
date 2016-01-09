<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Empleados".
 *
 * @property integer $id
 * @property integer $NombreSolicitante
 * @property integer $DireccionSolicitante
 * @property integer $TelefonoSolicitante
 * @property integer $CorreoSolicitante
 * @property integer $CallePredio
 * @property integer $ColoniaPredio
 * @property integer $NumeroOficialPredio
 * @property integer $NumeroInteriorPredio
 * @property integer $PobladoPredio
 * @property integer $SindicaturaPredio
 * @property integer $ClaveCatastralPredio
 * @property integer $NombrePropietario
 * @property integer $DireccionPropietario
 * @property integer $TelefonoPropietario
 * @property integer $CorreoPropietario
 * @property integer $Observaciones

 *
 * @property Departamentos $departamentoD
 */

class InformacionDocumentos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'InformacionDocumentos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombreSolicitante', 'claveCatastralPredio', 'nombrePropietario'], 'required'],[['nombreSolicitante','direccionSolicitante','telefonoSolicitante','correoSolicitante','callePredio','coloniaPredio','numeroOficialPredio','numeroInteriorPredio','pobladoPredio', 'sindicaturaPredio','claveCatastralPredio','nombrePropietario','direccionPropietario','telefonoPropietario','correoPropietario','observaciones'], 'string'],
            [['fechaCreacion'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'nombreSolicitante' => 'Nombre del Solicitante',
            'direccionSolicitante' => 'Dirección del Solicitante',
            'telefonoSolicitante' => 'Teléfono del Solicitante',
            'correoSolicitante' => 'Correo del Solicitante',
            'callePredio' => 'Calle del Predio',
            'coloniaPredio' => 'Colonia del Predio',
            'numeroOficialPredio' => 'Número Oficial del Predio',
            'numeroInteriorPredio' => 'Número Interior del Predio',
            'pobladoPredio' => 'Poblado del Predio',
            'sindicaturaPredio' => 'Sindicatura del Predio',
            'claveCatastralPredio' => 'Clave Catastral',
            'nombrePropietario' => 'Nombre del Propietario',
            'direccionPropietario' => 'Dirección del Propietario',
            'telefonoPropietario' => 'Teléfono del Propietario',
            'correoPropietario' => 'Correo del Propietario',
            'observaciones' => 'Observaciones',
            'fechaCreacion' => 'Fecha de Creación',
        ];
    }



  
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatus()
    {
        return $this->hasOne(Estatus::className(), ['id' => 'estatus_did']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
}
