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
 */

class TramiteLicenciaDeConstruccion extends \app\models\TramitExt
{
    /**
     * @inheritdoc
     */
    
    public function tipoDeTramite(){ return 1; }

    public static function tableName()
    {
        return 'Tramites';
    }





    /**
     * @inheritdoc
     */
    public function rules()
    {
        
            
            return [[['nombre', 'direccion', 'edad', 'telefono', 'correo', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'], 'string'],
                [['nombre', 'i'], 'required', 'on'=>'1'],
                [['correo'], 'required', 'on'=>'2'],
                [['nombre', 'b'], 'string', 'max' => 256],
                [['edad'], 'string', 'max' => 3],
                [['telefono', 'f'], 'string', 'max' => 10],
                [['correo'], 'string', 'max' => 128],
                [['a', 'g'], 'string', 'max' => 245],
                [['c'], 'string', 'max' => 14],
                [['d', 'e'], 'string', 'max' => 45],
                [['h'], 'string', 'max' => 456],
                [['i'], 'string', 'max' => 34]];

        
            
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

    public function getNombre()
    {
        return (string) $this->retriveAttr(1,1)->valor;
    }
    public function setNombre($value)
    {   
        $atributo=$this->retriveAttr(1,1);
        $atributo->valor = $value;
    }
    public function getDireccion()
    {
        return (string) $this->retriveAttr(2,1)->valor;
    }
    public function setDireccion($value)
    {   
        $atributo=$this->retriveAttr(2,1);
        $atributo->valor = $value;
    }
    public function getEdad()
    {
        return (string) $this->retriveAttr(3,1)->valor;
    }
    public function setEdad($value)
    {   
        $atributo=$this->retriveAttr(3,1);
        $atributo->valor = $value;
    }
    public function getTelefono()
    {
        return (string) $this->retriveAttr(4,2)->valor;
    }
    public function setTelefono($value)
    {   
        $atributo=$this->retriveAttr(4,2);
        $atributo->valor = $value;
    }
    public function getCorreo()
    {
        return (string) $this->retriveAttr(6,2)->valor;
    }
    public function setCorreo($value)
    {   
        $atributo=$this->retriveAttr(6,2);
        $atributo->valor = $value;
    }
    public function getA()
    {
        return (string) $this->retriveAttr(8,1)->valor;
    }
    public function setA($value)
    {   
        $atributo=$this->retriveAttr(8,1);
        $atributo->valor = $value;
    }
    public function getB()
    {
        return (string) $this->retriveAttr(9,1)->valor;
    }
    public function setB($value)
    {   
        $atributo=$this->retriveAttr(9,1);
        $atributo->valor = $value;
    }
    public function getC()
    {
        return (string) $this->retriveAttr(10,1)->valor;
    }
    public function setC($value)
    {   
        $atributo=$this->retriveAttr(10,1);
        $atributo->valor = $value;
    }
    public function getD()
    {
        return (string) $this->retriveAttr(11,1)->valor;
    }
    public function setD($value)
    {   
        $atributo=$this->retriveAttr(11,1);
        $atributo->valor = $value;
    }
    public function getE()
    {
        return (string) $this->retriveAttr(12,1)->valor;
    }
    public function setE($value)
    {   
        $atributo=$this->retriveAttr(12,1);
        $atributo->valor = $value;
    }
    public function getF()
    {
        return (string) $this->retriveAttr(13,1)->valor;
    }
    public function setF($value)
    {   
        $atributo=$this->retriveAttr(13,1);
        $atributo->valor = $value;
    }
    public function getG()
    {
        return (string) $this->retriveAttr(14,1)->valor;
    }
    public function setG($value)
    {   
        $atributo=$this->retriveAttr(14,1);
        $atributo->valor = $value;
    }
    public function getH()
    {
        return (string) $this->retriveAttr(15,1)->valor;
    }
    public function setH($value)
    {   
        $atributo=$this->retriveAttr(15,1);
        $atributo->valor = $value;
    }
    public function getI()
    {
        return (string) $this->retriveAttr(16,1)->valor;
    }
    public function setI($value)
    {   
        $atributo=$this->retriveAttr(16,1);
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
}
