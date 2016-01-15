<?php

namespace app\models;

use Yii;
use yii\web\ForbiddenHttpException;

abstract class TramitExt extends \yii\db\ActiveRecord
{

	private $_pasos=[];
    public $__salvando=false;
    //public $tipoDeTramite();




    /**
     * @inheritdoc
     */
    abstract public  function tipoDeTramite();
    

    private function psalvar($paso)
    {

        $transaction = Yii::$app->db->beginTransaction();
        $datos=[];

        try{
            
            
            $this->pasoActualId=$paso->id;
            
            $this->tipoTramiteId=$this->tipoDeTramite();

            $datos['tipoTramiteId']=$this->tipoDeTramite();
            $this->scenario =$this->pasoActualId;
            

            if(!$this->save())
            {
                print_r( $this->errors);
                return false;
            }
            

            foreach ($paso->atributos as $atributo) {
                $valor = $this->retriveAttr($atributo->id,$paso->id);
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

                    print_r( $this->errors);
                    $transaction->rollBack();

                    return false;
                }
                $datos[$atributo->nombre]=$valor->valor;
            }

            $paso = $this->retriveSiguientePaso();
            $this->pasoActualId=$paso->id;
            $datos['pasoActualId']=$paso->id;
            $datos['id']=$this->id;
            $datos['observaciones']=$this->observaciones;
            TiposTramite::findOne($this->pasoActualId);
            if(empty($this->folio)){
                $ciclo=$this->ciclo;
                if(empty($ciclo)){
                   $configuracion=Configuracion::findOne(1);
                   //print_r($configuracion);
                   $this->ciclo=$configuracion->cicloActual;

                }
                $folio=Folios::find()->where(['ciclo_id' => $this->ciclo,'tipoTramite_id'=>$this->tipoTramiteId])->one();
                if(empty($folio)){
                    $folio= new Folios();
                    $folio->ciclo_id=$this->ciclo;
                    $folio->tipoTramite_id=$this->tipoTramiteId;
                    $folio->proximofolio=1;
                }
                $this->folio= $folio->proximofolio;
                $folio->proximofolio=$folio->proximofolio+1;
                if(!$folio->save()){
                    $transaction->rollBack();
                    //print_r($folio);
                    return false; 
                }

            }
            if(!$this->save()){
                $transaction->rollBack();
                return false;
            }
            $transaction->commit();
            
            return $datos;


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

        $pasos=PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->all();
        
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
            $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->one();

        return $paso;

    }
    public function retriveSiguientePaso()
    {
        
        if(empty($this->pasoActualId))
            $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->one();
        else{
            $pasos = PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->all();
            $actual = $this->retrivePasoActual();
            
            foreach ($pasos as $value) 
            {

                if($value->secuencia > $actual->secuencia)
                    return $value;
            }
             $paso = PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia desc')->one();
        }

        return $paso;
    }


    public function retriveAttr($attrid,$paso)
    {
        if(!$this->permisosPorPaso[$paso][USUARIOS::$LEER] && !$this->__salvando)
            throw new ForbiddenHttpException('Informacion Restringida');

        if(!empty($this->_pasos[$paso][$attrid]))
            return $this->_pasos[$paso][$attrid];
        
        $atributo = Atributos::find()->where(['id'=>$attrid, 'tipoTramiteId'=>$this->tipoDeTramite()])->one();
        if(empty($atributo))
        {
              throw new UnknownPropertyException('Setting unknown property: ' . get_class($this) . '::' . $attrid);
        }
 
        
        
        if(!empty($this->id))
        {
            $valtemp = ValoresTramite::find()->where(['atributoId'=>$atributo->id,'tramiteId'=>$this->id])->one();
            if(!empty($valtemp))
            {

                $this->_pasos[$paso][$attrid]=$valtemp;
                return $valtemp;
            }
        }            
        $valor = new ValoresTramite;
        $valor->atributoId = $atributo->id;

        
        $this->_pasos[$paso][$attrid]=$valor;
        return $valor;
    }

    public function getFolioTramite()
    {
        try{
            $ciclo = Ciclos::findOne($this->ciclo);
            return $ciclo->nombre.'/'.$this->folio;

        }
        catch ( yii\base\ErrorException $e) {
            return 'S/N';
        }
        catch (Exception $e) {
            return 'S/N';
        }
    }
    
    public $_permisosPorPAso=[];
    public function getPermisosPorPaso()
    {
        
        if(!empty($this->_permisosPorPAso))
            return $this->_permisosPorPAso;
        
        if(Yii::$app->user->isGuest)
            return $this->permisos;

        $pasos =PasosTramite::find()->where(['tipoTramiteId'=>$this->tipoDeTramite()])->orderBy('secuencia')->all();

        foreach ($pasos as $paso) {
            $this->_permisosPorPAso[$paso->id]=[
                                            USUARIOS::$LEER=>false,
                                            USUARIOS::$CREAR=>false,
                                            USUARIOS::$ACTUALIZAR=>false,
                                            USUARIOS::$BORRAR=>false
                                        ];

        }
        //print_r($this->_permisosPorPAso);
        
        $usuario = USUARIOS::findOne(Yii::$app->user->id);
        foreach ($usuario->roles as $role) {
            foreach ($role->tipoTramitesRoles as $tramiteRole) {
                if($tramiteRole->tipoTramiteId == $this->tipoDeTramite())
                {
                    foreach ($tramiteRole->permisosPasoTramites as $paso) {
                         $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$LEER] = $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$LEER] || $paso->leer;
                         $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$CREAR] = $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$CREAR] || $paso->crear;
                         $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$ACTUALIZAR] = $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$ACTUALIZAR] || $paso->actualizar;
                         $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$BORRAR] = $this->_permisosPorPAso[$paso->pasoTramiteId][USUARIOS::$BORRAR] || $paso->borrar;
                         

                         
                    }
                }
            
            }
        }

        return $this->_permisosPorPAso;
    }
}