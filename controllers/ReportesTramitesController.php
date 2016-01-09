<?php

namespace app\controllers;

use Yii;
use app\models\Tramites;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * EmpleadoController implements the CRUD actions for Empleado model.
 */
class ReportesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Empleado models.
     * @return mixed
     */
    public function actionReportesTramites()
    {   //echo'<pre>';print_r($_GET);echo'</pre>'; exit;
         if(isset($_GET['filtro'])){

        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
         $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        
        $enProceso = Tramites::find()->where('estatusId=1 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->count();
        $finalizado = Tramites::find()->where('estatusId=2 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->count();
        $revision = Tramites::find()->where('estatusId=3 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->count();

         }else{
        $enProceso = Tramites::find()->where('estatusId=1')->count();
        $finalizado = Tramites::find()->where('estatusId=2')->count();
        $revision = Tramites::find()->where('estatusId=3')->count();
        }

     return $this->render('reportes-tramites', ['enProceso'=>$enProceso,'finalizado'=>$finalizado,'revision'=>$revision]);
        }

        public function actionReporte()
        {
            if(isset($_GET['filtro'])){

        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
         $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        
        $enProceso = Tramites::find()->where('estatusId=1 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->count();
        $finalizado = Tramites::find()->where('estatusId=2 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->count();
        $revision = Tramites::find()->where('estatusId=3 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal])->count();

         }else{
        $enProceso = Tramites::find()->where('estatusId=1')->count();
        $finalizado = Tramites::find()->where('estatusId=2')->count();
        $revision = Tramites::find()->where('estatusId=3')->count();
        }


        }
    }