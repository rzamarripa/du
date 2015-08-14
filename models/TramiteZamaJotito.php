<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tramites".
 *
 * @property integer $id
 * @property integer $pasoActualId
 * @property integer $tipoTramiteId
 *
 * @property PasosTramite $pasoActual
 * @property TiposTramite $tipoTramite
 * @property ValoresTramite[] $valoresTramites
 * @property Atributos[] $atributos
 */

class TramiteZamaJotito extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 3; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['a', 'b', 'c'], 'integer'],
                [['d', 'e', 'f', 'g', 'h', 'i'], 'string'],
                [['a', 'b', 'c'], 'required', 'on'=>'5'],
                [['d', 'e'], 'required', 'on'=>'6'],
                [['f', 'g'], 'required', 'on'=>'7'],
                [['h'], 'required', 'on'=>'8'],
                [['i'], 'required', 'on'=>'9'],
                [[ 'd', 'e', 'f', 'g', 'h', 'i'], 'string', 'max' => 256]];

        
            
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pasoActualId' => 'Paso Actual ID',
            'tipoTramiteId' => 'Tipo Tramite ID',
        ];
    }

    public function getA()
    {
        return intval( $this->retriveAttr(16,5)->valor);
    }
    public function setA($value)
    {   
        $atributo=$this->retriveAttr(16,5);
        $atributo->valor = $value;
    }
    public function getB()
    {
        return (int) $this->retriveAttr(17,5)->valor;
    }
    public function setB($value)
    {   
        $atributo=$this->retriveAttr(17,5);
        $atributo->valor = $value;
    }
    public function getC()
    {
        return (int) $this->retriveAttr(18,5)->valor;
    }
    public function setC($value)
    {   
        $atributo=$this->retriveAttr(18,5);
        $atributo->valor = $value;
    }
    public function getD()
    {
        return (string) $this->retriveAttr(19,6)->valor;
    }
    public function setD($value)
    {   
        $atributo=$this->retriveAttr(19,6);
        $atributo->valor = $value;
    }
    public function getE()
    {
        return (string) $this->retriveAttr(20,6)->valor;
    }
    public function setE($value)
    {   
        $atributo=$this->retriveAttr(20,6);
        $atributo->valor = $value;
    }
    public function getF()
    {
        return (string) $this->retriveAttr(21,7)->valor;
    }
    public function setF($value)
    {   
        $atributo=$this->retriveAttr(21,7);
        $atributo->valor = $value;
    }
    public function getG()
    {
        return (string) $this->retriveAttr(22,7)->valor;
    }
    public function setG($value)
    {   
        $atributo=$this->retriveAttr(22,7);
        $atributo->valor = $value;
    }
    public function getH()
    {
        return (string) $this->retriveAttr(23,8)->valor;
    }
    public function setH($value)
    {   
        $atributo=$this->retriveAttr(23,8);
        $atributo->valor = $value;
    }
    public function getI()
    {
        return (string) $this->retriveAttr(24,9)->valor;
    }
    public function setI($value)
    {   
        $atributo=$this->retriveAttr(24,9);
        $atributo->valor = $value;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasoActual()
    {
        return $this->hasOne(PasosTramite::className(), ['id' => 'pasoActualId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoTramite()
    {
        $this->tipoTramiteId = $this->tipoDeTramite();
        return $this->hasOne(TiposTramite::className(), ['id' => 'tipoTramiteId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValoresTramites()
    {
        return $this->hasMany(ValoresTramite::className(), ['tramiteId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtributos()
    {
        return $this->hasMany(Atributos::className(), ['id' => 'atributoId'])->viaTable('ValoresTramite', ['tramiteId' => 'id']);
    }
}
