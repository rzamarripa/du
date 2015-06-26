<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\MENUUSUARIOS;
use app\models\CATCTES;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * USUARIOSController implements the CRUD actions for USUARIOS model.
 */
class MapaController extends Controller
{
    public function behaviors()
    {
        return [
	        'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['mapa','verformulario'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],                    
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all USUARIOS models.
     * @return mixed
     */
    public function actionMapa()
    {	
	    $parametros = $_POST["parametros"];
	    $sql = "exec dbo.MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS " . 
					"'','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','TOT','" . 
					0 . "','INTELIGENCIA'";
		$rs = Yii::$app->db->createCommand($sql)->queryAll();
        
        return $this->render('mapa',array("rs"=>$rs));
    }
    
    public function actionVerformulario()
    {   
      return $this->render('formMapa');
      //return $this->render('pruebaJorge');
    }

    public function actionGetmetasventaszonas(){
        /*echo "<pre>"; print_r($_GET); echo "</pre>";
        exit;
        */

        //$txt = str_replace("'", "''", $_GET["fecha1,fecha2"]);
        $sql = "exec dbo.MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS " . 
                    "@COD_ZONA = ''," .
                    "@FECHA1 = '" . date("Y-d-m", strtotime($_GET["fecha1"])) . "'," . 
                    "@FECHA2 = '" . date("Y-d-m", strtotime($_GET["fecha2"])) . "'," .
                    "@TIPO_REPORTE = 'TOT'," . 
                    "@EXCLUIR_ZONA = '0'," .
                    "@SISTEMA ='INTELIWEB'";

                  
        $zonas = Yii::$app->db->createCommand($sql)->queryAll(); 
        return json_encode($zonas);
    }


    public function actionGetmetasingresoszonas(){
        /*echo "<pre>"; print_r($_GET); echo "</pre>";
        exit;
        */
        

        //$txt = str_replace("'", "''", $_GET["fecha1,fecha2"]);
        $sql = "exec dbo.MP_RPT_Q_CXC_INGRESOS_ZONAS_COMPARATIVOS " . 
                    "@COD_ZONA = ''," .
                    "@FECHA1 = '" . date("Y-d-m", strtotime($_GET["fecha1"])) . "'," . 
                    "@FECHA2 = '" . date("Y-d-m", strtotime($_GET["fecha2"])) . "'," .
                    "@TIPO_REPORTE = 'TOT'," . 
                    "@SISTEMA ='INTELIWEB'";
                  
        $zonas = Yii::$app->db->createCommand($sql)->queryAll(); 
        return json_encode($zonas);
    }

    

    public function actionGetutilidadbruta(){
        
        $sql = "exec dbo.MP_RPT_Q_ZONAS_MAPA_INDICADORES " . 
                    "@FECHA1 = '" . date("Y-d-m", strtotime($_GET["fecha1"])) . "'," . 
                    "@FECHA2 = '" . date("Y-d-m", strtotime($_GET["fecha2"])) . "'";
                  
        $zonas = Yii::$app->db->createCommand($sql)->queryAll(); 
        return json_encode($zonas);
    }

   
    
}

?>