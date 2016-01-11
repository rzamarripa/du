<?php

namespace app\controllers;

use Yii;
use app\models\Tramites;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
 use yii\db\Query;

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




        public function actionReportes()
        {
            if(isset($_GET['filtro'])){
                //echo'<pre>';print_r($_GET);echo'</pre>'; exit;
        $tramite = $_GET["filtro"]["tramite_id"];
        $fechaInicial = date("d-m-Y", strtotime($_GET["filtro"]["fechaInicial"]));
        $fechaFinal = date("d-m-Y", strtotime($_GET["filtro"]["fechaFinal"]));
         $formato = 'fechaCreacion >= "' . $fechaInicial . '" and fechaCreacion <= "' . $fechaFinal . '"'; 
        
        $enProceso = Tramites::find()->where('estatusId=1 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal and tipoTramiteId = :tramite',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal,'tramite'=>$tramite])->count();
        $finalizado = Tramites::find()->where('estatusId=2 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal and tipoTramiteId = :tramite',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal,'tramite'=>$tramite])->count();
        $revision = Tramites::find()->where('estatusId=3 and fechaCreacion >= :fechaInicial and fechaCreacion <= :fechaFinal and tipoTramiteId = :tramite',['fechaInicial'=>$fechaInicial, 'fechaFinal'=>$fechaFinal,'tramite'=>$tramite])->count();

         }else{
        $enProceso = Tramites::find()->where('estatusId=1')->count();
        $finalizado = Tramites::find()->where('estatusId=2')->count();
        $revision = Tramites::find()->where('estatusId=3')->count();
        }

        
        $connection = \Yii::$app->db;
        $tramites = $connection->createCommand('select tt.id, tt.nombre from usuarios u
inner join  UsuariosRoles ur on ur.usuarioId = u.id
inner join Roles r on r.id = ur.roleId
inner join TipoTramitesRoles ttr on ttr.roleId = r.id and (ttr.leer = 1 or ttr.crear = 1 or ttr.actualizar = 1)
inner join TiposTramite tt on tt.id = ttr.tipoTramiteId 
where  u.id = '. Yii::$app->user->id)->queryAll();







        return $this->render('reportes', ['enProceso'=>$enProceso,'finalizado'=>$finalizado,'revision'=>$revision,'tramites'=>$tramites]);

        }
    }