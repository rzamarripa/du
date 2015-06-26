<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CATCTES".
 *
 * @property string $COD_CTE
 * @property string $NOM_CTE
 * @property string $DOM
 * @property string $CIUDAD
 * @property string $RFC
 * @property string $CHEQUE
 * @property string $TEL
 * @property string $SALDO
 * @property string $CRED
 * @property string $PLAZO
 * @property integer $DCTO
 * @property string $LIS_PRE
 * @property string $LIM_CRED
 * @property string $F_ALTA
 * @property string $PAGO
 * @property string $COMPRADOR
 * @property string $DIA_REV
 * @property string $DIA_PAG
 * @property string $ESTADO
 * @property string $DOMPAR
 * @property string $TELPAR
 * @property string $CELULAR
 * @property string $STATUS
 * @property string $PLAZA
 * @property string $COD_VEN
 * @property string $CCON
 * @property string $COD_ZONA
 * @property integer $hectareas
 * @property integer $Inversion
 * @property string $ccond
 * @property string $cod_grupo
 * @property integer $PLAZO_EXTRA
 * @property string $ESTATUS_NEGOCIACION_CXC
 * @property string $TIPO_CLIENTE
 */
class CATCTES extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CATCTES';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['COD_CTE', 'PLAZO', 'COD_ZONA'], 'required'],
            [['COD_CTE', 'NOM_CTE', 'DOM', 'CIUDAD', 'RFC', 'CHEQUE', 'TEL', 'CRED', 'LIS_PRE', 'PAGO', 'COMPRADOR', 'DIA_REV', 'DIA_PAG', 'ESTADO', 'DOMPAR', 'TELPAR', 'CELULAR', 'STATUS', 'PLAZA', 'COD_VEN', 'CCON', 'COD_ZONA', 'ccond', 'cod_grupo', 'ESTATUS_NEGOCIACION_CXC', 'TIPO_CLIENTE'], 'string'],
            [['SALDO', 'PLAZO', 'LIM_CRED'], 'number'],
            [['DCTO', 'hectareas', 'Inversion', 'PLAZO_EXTRA'], 'integer'],
            [['F_ALTA'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'COD_CTE' => 'Cod  Cte',
            'NOM_CTE' => 'Nom  Cte',
            'DOM' => 'Dom',
            'CIUDAD' => 'Ciudad',
            'RFC' => 'Rfc',
            'CHEQUE' => 'Cheque',
            'TEL' => 'Tel',
            'SALDO' => 'Saldo',
            'CRED' => 'Cred',
            'PLAZO' => 'Plazo',
            'DCTO' => 'Dcto',
            'LIS_PRE' => 'Lis  Pre',
            'LIM_CRED' => 'Lim  Cred',
            'F_ALTA' => 'F  Alta',
            'PAGO' => 'Pago',
            'COMPRADOR' => 'Comprador',
            'DIA_REV' => 'Dia  Rev',
            'DIA_PAG' => 'Dia  Pag',
            'ESTADO' => 'Estado',
            'DOMPAR' => 'Dompar',
            'TELPAR' => 'Telpar',
            'CELULAR' => 'Celular',
            'STATUS' => 'Status',
            'PLAZA' => 'Plaza',
            'COD_VEN' => 'Cod  Ven',
            'CCON' => 'Ccon',
            'COD_ZONA' => 'Cod  Zona',
            'hectareas' => 'Hectareas',
            'Inversion' => 'Inversion',
            'ccond' => 'Ccond',
            'cod_grupo' => 'Cod Grupo',
            'PLAZO_EXTRA' => 'Plazo  Extra',
            'ESTATUS_NEGOCIACION_CXC' => 'Estatus  Negociacion  Cxc',
            'TIPO_CLIENTE' => 'Tipo  Cliente',
        ];
    }
}
