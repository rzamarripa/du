<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DerArboles".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $calle
 * @property string $entre_calles
 * @property string $colonia_fracc
 * @property string $tipo_de_arbol
 * @property string $ubicacion
 * @property string $motivos
 * @property string $observaciones
 */

class DerArboles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'DerArboles';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
            return [
            [['nombre', 'calle', 'entre_calles', 'colonia_fracc', 'tipo_de_arbol', 'ubicacion', 'motivos', 'observaciones'], 'required'],
            [['nombre', 'calle', 'entre_calles', 'colonia_fracc', 'tipo_de_arbol', 'ubicacion', 'motivos', 'observaciones'], 'string']
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
            'calle' => 'Calle',
            'entre_calles' => 'Entre Calles',
            'colonia_fracc' => 'Colonia ',
            'tipo_de_arbol' => 'Tipo De Arbol',
            'ubicacion' => 'Ubicación',
            'motivos' => 'Motivos',
            'observaciones' => 'Observaciones',
        ];
    }


}
