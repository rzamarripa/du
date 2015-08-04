<?php

namespace app\models;

use Yii;
use yii\web\ForbiddenHttpException;

class TramitExt extends \yii\db\ActiveRecord
{

	private $_pasos=[];


    private $__tipoTramite=1;

    public $__salvando=false;



    /**
     * @inheritdoc
     */

    private function psalvar($paso)
    {

        $transaction = Yii::$app->db->beginTransaction();

        try{
            
            
            $this->pasoActualId=$paso->id;
            $this->tipoTramiteId=$this->__tipoTramite;
            
            $this->scenario =$this->pasoActualId;
            if(!$this->save())
                return false;

            foreach ($paso->atributos as $atributo) {
                $valor = $this->retriveAttr($atributo->nombre,$paso->id);
                $valor->tramiteId=$this->id;
                if($valor->isNewRecord && !$this->permisosPorPaso[$paso->id][USUARIOS::$CREAR])
                {
                    $transaction->rollBack();
                    throw new ForbiddenHttpException('No tiene Permiso para generar esta operacion');
                    return false;

                }
                if(!$valor->isNewRecord && !$this->permisosPorPaso[$paso->id][USUARIOS::$ACTUALIZAR])
                {
                    $transaction->rollBack();
                    throw new ForbiddenHttpException('No tiene Permiso para actualizar estos datos');
                    return false;
                }

                if(!$valor->save())
                {
                    $transaction->rollBack();
                    return false;
                }
            }
            $paso = $this->retriveSiguientePaso();
            $this->pasoActualId=$paso->id;
            $this->save();
            $transaction->commit();
            
            return true;


        }
        catch (Exception $e) {
            $transaction->rollBack();
            return false;

        }
        return false;
    }

    public function salvar()
    {
        
        $paso = $this->retrivePasoActual();

        return $this->psalvar($paso);
    }

    public function salvarPaso($pasoIndex)
    {

        $pasos=PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->all();
        
        for ($i=0; $i <$pasoIndex ; $i++) { 
            $paso = $pasos[$i];
        }
        
        return $this->psalvar($paso);
    }

    public function retrivePasoActual()
    {
        
       if(!empty($this->pasoActualId))
            $paso = PasosTramite::findOne($this->pasoActualId);
        else
            $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->one();

        return $paso;

    }
    public function retriveSiguientePaso()
    {
        
        if(empty($this->pasoActualId))
            $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->one();
        else{
            $pasos = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->all();
            $actual = $this->retrivePasoActual();
            
            foreach ($pasos as $value) 
            {

                if($value->secuencia > $actual->secuencia)
                    return $value;
            }
             $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia desc')->one();
        }

        return $paso;
    }


    public function retriveAttr($attrname,$paso)
    {
        if(!$this->permisosPorPaso[$paso][USUARIOS::$LEER] && !$this->__salvando)
            throw new ForbiddenHttpException('Informacion Restringida');

        if(!empty($this->_pasos[$paso][$attrname]))
            return $this->_pasos[$paso][$attrname];
        $atributo = Atributos::find()->where(['nombre'=>$attrname, 'tipoTramiteId'=>$this->__tipoTramite])->one();
        if(empty($atributo))
        {
              throw new UnknownPropertyException('Setting unknown property: ' . get_class($this) . '::' . $attrname);
        }
 
        
        
        if(!empty($this->id))
        {
            $valtemp = ValoresTramite::find()->where(['atributoId'=>$atributo->id,'tramiteId'=>$this->id])->one();
            if(!empty($valtemp))
            {
                $this->_pasos[$paso][$attrname]=$valtemp;
                return $valtemp;
            }
        }            
        $valor = new ValoresTramite;
        $valor->atributoId = $atributo->id;

        
        $this->_pasos[$paso][$attrname]=$valor;
        return $valor;
    }
    
    private $_permisosPorPAso=[];
    public function getPermisosPorPaso()
    {
        
        if(!empty($this->_permisosPorPAso))
            return $this->_permisosPorPAso;
        
        if(Yii::$app->user->isGuest)
            return $this->permisos;

        $pasos =PasosTramite::find()->where(['tipoTramiteId'=>$this->__tipoTramite])->orderBy('secuencia')->all();

        foreach ($pasos as $paso) {
            $this->_permisosPorPAso[$paso->id]=[
                                            USUARIOS::$LEER=>false,
                                            USUARIOS::$CREAR=>false,
                                            USUARIOS::$ACTUALIZAR=>false,
                                            USUARIOS::$BORRAR=>false
                                        ];

        }

        $usuario = USUARIOS::findOne(Yii::$app->user->id);
        foreach ($usuario->roles as $role) {
            foreach ($role->tipoTramitesRoles as $tramiteRole) {
                if($tramiteRole->tipoTramiteId == $this->__tipoTramite)
                {
                    foreach ($tramiteRole->permisosPasoTramites as $paso) {
                         $this->_permisosPorPAso[$paso->id][USUARIOS::$LEER] = $this->_permisosPorPAso[$paso->id][USUARIOS::$LEER] || $paso->leer;
                         $this->_permisosPorPAso[$paso->id][USUARIOS::$CREAR] = $this->_permisosPorPAso[$paso->id][USUARIOS::$CREAR] || $paso->crear;
                         $this->_permisosPorPAso[$paso->id][USUARIOS::$ACTUALIZAR] = $this->_permisosPorPAso[$paso->id][USUARIOS::$ACTUALIZAR] || $paso->actualizar;
                         $this->_permisosPorPAso[$paso->id][USUARIOS::$BORRAR] = $this->_permisosPorPAso[$paso->id][USUARIOS::$BORRAR] || $paso->borrar;

                         
                    }
                }
            
            }
        }
        return $this->_permisosPorPAso;
    }
}