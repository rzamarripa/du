<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\MENUUSUARIOS;
use app\models\CATCTES;
use yii\filters\VerbFilter;

/**
 * USUARIOSController implements the CRUD actions for USUARIOS model.
 */
class CalificacionesclienteController extends Controller
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
     * Lists all USUARIOS models.
     * @return mixed
     */
    public function actionIndex()
    {
	    Yii::$app->session->setFlash('danger', 'Hola ');
      return $this->render('index');
    }
    
    public function actionSubmenu($id)
    {
      return $this->render('submenu',["id"=>$id]);
    }
    
    public function actionVerformulario()
    {
		//CALIFICA CLIENTE
		if($_GET["id"] == "R1"){
			
			$clientes = Yii::$app->db->createCommand("SELECT COD_CTE,NOM_CTE FROM CATCTES ORDER BY NOM_CTE")->queryAll();
			return $this->render('califica',array("clientes"=>$clientes));
		} 	

		//CALIFICA ALIADO PASSA
		else if($_GET["id"] == "R2"){
			
			$clientes = Yii::$app->db->createCommand("SELECT COD_CTE,NOM_CTE FROM CATCTES ORDER BY NOM_CTE")->queryAll();
			$agricolas = Yii::$app->db->createCommand("SELECT CA.COD_AGRICOLA,CA.NOM_AGRICOLA,CTE.NOM_CTE FROM CATAGRICOLAS CA INNER JOIN CATCTES CTE ON(CA.COD_CTE=CTE.COD_CTE) ORDER BY NOM_AGRICOLA")->queryAll();
			return $this->render('formCalificaAliadoPassa',array("clientes"=>$clientes));
		} 	

		//CALIFICA ZONA
		else if($_GET["id"] == "R3"){
			
			return $this->render("formCalificazona",array(
			));
		}

		//CALIFICA GRUPO
		else if($_GET["id"] == "R4"){
			$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
			$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
			return $this->render("formGrupo",array("grupos"=>$grupos,"zonas"=>$zonas));
		}			

		//FACTORES DE SUCURSALES
		else if($_GET["id"] == "R63"){
			
			$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
			return $this->render("formFactoressucursales",array("zonas"=>$zonas));
		}		

		//ALIADO PASSA
		else if($_GET["id"] == "R71"){
			
			$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
			return $this->render("formAliadopassa",array("zonas"=>$zonas));
		}	

		//FACTORES SUCURSALES INGRESOS
		else if($_GET["id"] == "R77"){
			
			$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
			return $this->render("formFactoressucursalesingresos",array("zonas"=>$zonas));
		}									
    }
    
    public function actionCalificacliente(){
	    
	    $parametros = $_POST["parametros"];

		$formato = (isset($parametros["formatocorto"])) ? "1":"0";
		$sql = "exec dbo.mp_rpt_q_califica_cliente '" . 
			$parametros["codigoCliente"] . "','" . 
			date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
			date("Y-d-m", strtotime($parametros["fecha2"])) . "','1','" . 
			date("Y-d-m", strtotime($parametros["fecha2"])) . "','" . $formato . "'";

		$rs = Yii::$app->db->createCommand($sql)->queryAll();

	    if(isset($_POST["parametros"]["verReporte"])){
				$pdf = Yii::$app->pdf;
				$pdf->content = $this->renderPartial("reportecalifica", array("rs"=>$rs,"nombreReporte"=>"Califica Cliente"));
				return $pdf->render();				
			}else{
				return $this->render("reportecalifica", array("rs"=>$rs,"nombreReporte"=>"Califica Cliente"));
			}
    }	 

    public function actionCalificazona(){
	    
	    $parametros = $_POST["parametros"];

		$formato = (isset($parametros["formatocorto"])) ? "1":"0";
		$excluir = (isset($parametros["excluirzona"])) ? "1":"0";
		$sql = "exec dbo.mp_rpt_q_califica_zona '" . 
			$parametros["codigoZona"] . "','" . 
			date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
			date("Y-d-m", strtotime($parametros["fecha2"])) . "','1','S','" .
			date("Y-d-m", strtotime($parametros["fechacorte"])) . "','" . $formato . "','" . $excluir . "','0','" . $parametros["codigoGrupo"] . "'";

			//echo $sql;
			//exit;

		$rs = Yii::$app->db->createCommand($sql)->queryAll();

	    if(isset($_POST["parametros"]["verReporte"])){
				$pdf = Yii::$app->pdf;
				$pdf->content = $this->renderPartial("reportecalificazona", array("rs"=>$rs,"nombreReporte"=>"Califica Zona"));
				return $pdf->render();				
			}else{
				return $this->render("reportecalificazona", array("rs"=>$rs,"nombreReporte"=>"Califica Zona"));
			}
    }     

    public function actionCalificagrupo(){
	    
	    $parametros = $_POST["parametros"];

	    /*
	    echo "<pre>"; print_r($_POST) ; echo "</pre>";
		exit;
		*/
		
		$excluirzona = (isset($parametros["excluirzona"])) ? "1":"0";
		$sql = "exec dbo.mp_rpt_q_califica_zona ".
			"'" . $parametros["codigoZona"] . "',".                          	//@cod_zona
			"'" . date("Y-d-m", strtotime($parametros["fecha1"])) . "',". 		//@FECHA1
			"'" . date("Y-d-m", strtotime($parametros["fecha2"])) . "'," .		//@FECHA2
			"1,".  					                                		//@FACTOR_INCREMENTO
			"'N'," .														//@ZONA
			"'" . date("Y-d-m", strtotime($parametros["fechacorte"])) . "'," .   //@FECHA_CORTE
			"'0',".                                                     	//@FORMATO_CORTO 
			"'" . $excluirzona . "',".                                  	//@EXCLUIR_ZONA  
			"'0',".                                                     	//@MOSTRAR_ZONAS 
			"'" . $parametros["cod_grupo"] ."'";                             	//@COD_GRUPO           

		$rs = Yii::$app->db->createCommand($sql)->queryAll();
	    if(isset($_POST["parametros"]["verReporte"])){
			$pdf = Yii::$app->pdf;
			$pdf->content = $this->renderPartial("reportegrupo", array("rs"=>$rs,"nombreReporte"=>"Califica Grupo",'datos'=>$parametros,'nombreZona'=>$_POST["nombre_zona"]));
			return $pdf->render();				
		}else{
			return $this->render("reportegrupo", array("rs"=>$rs,"nombreReporte"=>"Califica Grupo",'datos'=>$parametros,'nombreZona'=>$_POST["nombre_zona"]));
		}
			
    }	  

    public function actionFactoressucursales(){
	    
	    $parametros = $_POST["parametros"];

 		$sql = "SELECT PLAZA FROM CATZONAS WHERE COD_ZONA='" . $parametros["codigoZona"] . "'";
 		/*estoy probando, LISTO, EL problema estaba en el $app() sería $app y en el createCommand que ya lo habías resuelto, 
 		cuando imprimes un Array() tiene que ser con print_r o var_dump, para imprimir un valor con echo es suficiente.*/
  		$plaza =  Yii::$app->db->createCommand($sql)->queryScalar();

			
		$sql = "exec dbo.MP_RPT_Q_FACTORES_SUCURSALES " . 
			"'" . $plaza . "','" .
			date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
			date("Y-d-m", strtotime($parametros["fecha2"])) . "','" . 
			date("Y-d-m", strtotime($parametros["fechacorte"])) . "','0'";

		$rs = Yii::$app->db->createCommand($sql)->queryAll();

	    if(isset($_POST["parametros"]["verReporte"])){
			$pdf = Yii::$app->pdf;
			$pdf->content = $this->renderPartial("reportefactoressucursales", array("rs"=>$rs,"nombreReporte"=>"Factores Sucursales"));
			return $pdf->render();				
		}else{
			return $this->render("reportefactoressucursales", array("rs"=>$rs,"nombreReporte"=>"Factores Sucursales"));
		}
	}

    public function actionFactoressucursalesingresos(){
	    
	    $parametros = $_POST["parametros"];

 		$sql = "SELECT PLAZA FROM CATZONAS WHERE COD_ZONA='" . $parametros["codigoZona"] . "'";
  		$plaza =  Yii::$app->db->createCommand($sql)->queryScalar();
			
		$sql = "exec dbo.MP_RPT_Q_FACTORES_SUCURSALES " . 
			"'" . $plaza . "','" .
			date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
			date("Y-d-m", strtotime($parametros["fecha2"])) . "','" . 
			date("Y-d-m", strtotime($parametros["fechacorte"])) . "','0'";

		$rs = Yii::$app->db->createCommand($sql)->queryAll();

	    if(isset($_POST["parametros"]["verReporte"])){
			$pdf = Yii::$app->pdf;
			$pdf->content = $this->renderPartial("reportefactoressucursalesingresos", array("rs"=>$rs,"nombreReporte"=>"Factores de sucursales con ingresos"));
			return $pdf->render();				
		}else{
			return $this->render("reportefactoressucursalesingresos", array("rs"=>$rs,"nombreReporte"=>"Factores de sucursales con ingresos"));
		}		
    }

    public function actionCalificaaliadopassa(){
	    
	    $parametros = $_POST["parametros"];

		$formato = (isset($parametros["formatocorto"])) ? "1":"0";
		$sql = "exec dbo.MP_RPT_Q_CALIFICA_CLIENTE_SOCIO ".
			"'" . $parametros["codigoCliente"] . "'," . 
			"'" . date("Y-d-m", strtotime($parametros["fecha1"])) . "'," . 
			"'" . date("Y-d-m", strtotime($parametros["fecha2"])) . "',".
			"'1',".
			"'" . date("Y-d-m", strtotime($parametros["fechacorte"])) . "',".
			"'" . $formato . "',".
			"'" . $parametros["tipoutilidad"] . "',". 
			"'" . $parametros["cod_agricola"] . "'";

		$rs = Yii::$app->db->createCommand($sql)->queryAll();

	    if(isset($_POST["parametros"]["verReporte"])){
				$pdf = Yii::$app->pdf;
				$pdf->content = $this->renderPartial("reporteCalificaaliadopassa", array("rs"=>$rs,"nombreReporte"=>"Califica Aliado Passa"));
				return $pdf->render();				
			}else{
				return $this->render("reporteCalificaaliadopassa", array("rs"=>$rs,"nombreReporte"=>"Califica Aliado Passa"));
			}
    }

    public function actionAliadopassa(){
	    
	    $parametros = $_POST["parametros"];

			$sql = "exec dbo.MP_RPT_Q_CALIFICA_CLIENTES_SOCIOS_LISTADO ".
				"'" . $parametros["codigoZona"] . "'," . 
				"'" . date("Y-d-m", strtotime($parametros["fecha1"])) . "'," . 
				"'" . date("Y-d-m", strtotime($parametros["fecha2"])) . "',".
				"'1',".
				"'" . date("Y-d-m", strtotime($parametros["fechacorte"])) . "',".
				"'" . $parametros["tipoutilidad"] . "'";
	
			$rs = Yii::$app->db->createCommand($sql)->queryAll();
	
			if ($parametros["tipoformato"]=="1"){
				$nombrereporte="reporteAliadopassa";
			}else{
				$nombrereporte="reporteAliadopassa2";
			}
	
		    if(isset($_POST["parametros"]["verReporte"])){
				$pdf = Yii::$app->pdf;
				$pdf->content = $this->renderPartial($nombrereporte, array("rs"=>$rs,"nombreReporte"=>"Aliado Passa",'parametros'=>$parametros));
				return $pdf->render();				
			}else{
				return $this->render($nombrereporte, array("rs"=>$rs,"nombreReporte"=>"Aliado Passa",'parametros'=>$parametros));
			}
    }	
    
    public function actionGrafica(){
			return $this->render("grafica");
    }
    
    public function actionGetzonas(){
	    $zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS WHERE NOM_ZONA LIKE '%" . $_GET["q"] . "%' ORDER BY NOM_ZONA")->queryAll();			
	    return json_encode($zonas);
    }
    
    public function actionGetgrupos(){
	    $grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS WHERE NOM_GRUPO LIKE '%" . $_GET["q"] . "%'  ORDER BY NOM_GRUPO")->queryAll();
	    return json_encode($grupos);
    }
}

?>