<?php
	
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\MENUUSUARIOS;
use app\models\CATCTES;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use kartik\mpdf\Pdf;
use app\models\Utilerias;

/**
 * USUARIOSController implements the CRUD actions for USUARIOS model.
 */
class VentasController extends Controller
{
    public function behaviors()
    {
        return [
          'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [
                        	'index', 'submenu', 'verformulario', 'toptenproductos', 'toptenclientes', 'ventasdiarias',
                        	'obtieneagricolas', 'pruebacristal', 'sincronizando','listaprecios', 'ventasparacomisiones', 
                        	'ventasconsaldo', 'ultimospreciosproductos', 'mejoresproductos', 'mejoresclientes'],
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

/*
    public function beforeAction($e){
    	$sincronizando = Yii::$app->db->createCommand("SELECT SINCRONIZANDO FROM FACPARS")->queryScalar();
    	
    	if($sincronizando == "1"){
    		return $this->renderPartial("sincronizando");
    	}
    }
*/
    public function actionIndex()
    {
      return $this->render('index');
    }
    
    public function actionSubmenu($id)
    {
      return $this->render('submenu',["id"=>$id]);
    }
    
    public function actionVerformulario()
    {

    	/*$sincronizando = Yii::$app->db->createCommand("SELECT SINCRONIZANDO FROM FACPARS")->queryScalar();
    	
    	if($sincronizando == "1"){
    		return $this->redirect(array('utilerias/sincronizando'));
    	} 
    	*/   	

    	switch ($_GET["id"]) {
    		case "R14":////TOP TEN PRODUCTOS
				$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA AS CODIGO,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
				$gruposInteres = Yii::$app->db->createCommand("SELECT COD_GRUPO_PROD_INTERES,NOM_GRUPO_PROD_INTERES FROM CATGRUPOS_PROD_INTERES ORDER BY NOM_GRUPO_PROD_INTERES")->queryAll();						

		    	return $this->render('formTopTenProductos',array(
			    	"grupos"=>$grupos,
			    	"zonas"=>$zonas,
			    	"gruposInteres"=>$gruposInteres,
		    	));  
		    	break;

    		case "R15":////TOP TEN CLIENTES
				$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA AS CODIGO,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
				$gruposInteres = Yii::$app->db->createCommand("SELECT COD_GRUPO_PROD_INTERES,NOM_GRUPO_PROD_INTERES FROM CATGRUPOS_PROD_INTERES ORDER BY NOM_GRUPO_PROD_INTERES")->queryAll();						

		    	return $this->render('formTopTenClientes',array(
			    	"grupos"=>$grupos,
			    	"zonas"=>$zonas,
			    	"gruposInteres"=>$gruposInteres,
		    	));  
		    	break;

		    case "R30":////MEJORES PRODUCTOS
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
				$gruposInteres = Yii::$app->db->createCommand("SELECT COD_GRUPO_PROD_INTERES,NOM_GRUPO_PROD_INTERES FROM CATGRUPOS_PROD_INTERES ORDER BY NOM_GRUPO_PROD_INTERES")->queryAll();						

		    	return $this->render('formMejoresProductos',array(
			    	"zonas"=>$zonas,
			    	"gruposInteres"=>$gruposInteres,
		    	));  
		    	break;
		    	  		
    		case "R67"://VENTAS DIARIAS
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
				$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
				return $this->render("formVentasdiarias",array(
					"zonas"=>$zonas,
					"grupos"=>$grupos
				));
				break;

    		case "R94"://TOPTEN FABRICANTES, PRUEBA CRISTAL REPORTE SENCILLO
    			//return $this->render("reportePruebaCristal");
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
				$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
				return $this->render("formPrueba",array(
					"zonas"=>$zonas,
					"grupos"=>$grupos
				));
				break;

    		case "M1": //LISTA DE PRECIOS --M1 NO ESTA EN DB
    			return $this->render("formListaPrecios");
				break;

    		case "R12": //VENTAS PARA COMISIONES
				$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA AS CODIGO,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();
				$gruposInteres = Yii::$app->db->createCommand("SELECT COD_GRUPO_PROD_INTERES,NOM_GRUPO_PROD_INTERES FROM CATGRUPOS_PROD_INTERES ORDER BY NOM_GRUPO_PROD_INTERES")->queryAll();						

		    	return $this->render('formVentasParaComisiones',array(
			    	"grupos"=>$grupos,
			    	"zonas"=>$zonas,
			    	"gruposInteres"=>$gruposInteres,
		    	));  
		    	break;

    		case "R55": //VENTAS CON SALDO
				$grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
				$zonas = Yii::$app->db->createCommand("SELECT COD_ZONA AS CODIGO,NOM_ZONA FROM CATZONAS ORDER BY NOM_ZONA")->queryAll();

		    	return $this->render('formVentasConSaldo',array(
			    	"grupos"=>$grupos,
			    	"zonas"=>$zonas
		    	));  
		    	break;

    		case "R42": //ULTIMOS PRECIOS DE PRODUCTOS
		    	return $this->render('formUltimosPreciosProducto');  
		    	break;

    	}
    }
    
    public function actionToptenproductos(){	    

		//echo "<pre>" ; print_r($_GET["param"]) ; echo "</pre>" ;
		//exit;
		
		//$parametros = $_POST["parametros"];	
		//echo "<pre>" ; print_r($_POST["parametros"]) ; echo "</pre>" ;
		//echo $parametros["cod_agricola"];
		//exit;
		
    	$subreporte = "0" ;

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		$subreporte = (isset($_GET["id"])) ? "1" : "0";

    		if ($subreporte == "1"){//El llamado viene desde el topten de clientes 
				$parametros["cod_cte"] = $_GET["id"];//El $_GET["param"] no tiene cliente , se obiene del id.
				unset($_POST["parametros"]["verReporte"]);//Forzamos borrar el verReporte para que al imprimir renderize tipo grid en vez de pdf.
    		}else{//El llamado viene desde desde una forma que se abrió en una segunda ventana y tiene un botón versión para imprimir
    			//No code
    		}
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

		/*
		MP_RPT_Q_VENTAS_TOP_PRODUCTOS
		@COD_CTE
		@COD_DOC
		@FECHA1
		@FECHA2
		@COD_GRUPO
		@COD_ZONA
		@PORCENTAJE
		@DESCRI
		@MIN
		@CONTADO
		@COD_AGRICOLA
		@COD_GRUPO_PROD_INTERES
		@UTILIDAD_MAXIMA
		@CATEGORIA
		@FILTRAR_VALOR
		@CODIGO_INGREDIENTE_ACTIVO
		@CODIGOS_PRODUCTOS
		@CLASIFICACION
		@ORDEN
		@FORMATO_ASP
		@CLASIFICACION2
		@CLASIFICACION3
		@TIPO_CLIENTE
		@COD_LOTE		
		*/		

		$filtrarporporcentajeutlidad = (isset($parametros["filtrarporporcentajeutlidad"])) ? '1' : '0';
		$min = (isset($parametros["min"])) ? $parametros["min"] : "";
		$min = ($filtrarporporcentajeutlidad == '1') ? $min : 'X';//sobreescribe min, si no se checkeo el filtrar por % de ut
		$porcentaje = (isset($parametros["porcentaje"])) ? $parametros["porcentaje"] : 30;	
		$filtrarValor = ($parametros["filtrarValor"] == "CATEGORIA") ? "C" : "P" ;//SINO SERIA PORCENTAJE, C=CATEGORIA, P=PORCENTAJE
		$categoria = (isset($parametros["categoria"])) ? $parametros["categoria"] : "";
			
		$sql = "exec dbo.MP_RPT_Q_VENTAS_TOP_PRODUCTOS '" . 
		$parametros["cod_cte"] . "','" . 
		$parametros["cod_doc"] . "','" . 
		date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
		date("Y-d-m", strtotime($parametros["fecha2"])) . "','" . 
		$parametros["cod_grupo"] . "','" . 
		$parametros["cod_zona"] . "'," . 
		$porcentaje . ",'" . 
		$parametros["descri"] . "','" . 
		$min . "','" . 
		'' . "','" . 
		$parametros["cod_agricola"] . "','" . 
		$parametros["cod_grupo_prod_interes"] . "','" . 
		$parametros["utilidad_maxima"] . "','" . 
		$categoria . "','" . 
		$filtrarValor . "','','','" . 
		$parametros["clasificacion"] . "','$" . "UTILIDAD','0','T','T','" . 
		$parametros["tipo_cliente"] . "',''";

		$this->imprimirHorizontal("reportetoptenproductos","Top Ten Productos",$sql,$parametros);

    }

 	public function actionToptenclientes(){	    

 		//echo "<pre>" ; print_r($_POST["parametros"]) ; echo "</pre>" ;
 		//exit;

    	$subreporte = "0" ;

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		$subreporte = (isset($_GET["id"])) ? "1" : "0";

    		if ($subreporte == "1"){//El llamado viene desde el topten de productos 
				$parametros["descri"] = $_GET["id"];//El $_GET["param"] no tiene descri , se obiene del id.
				unset($_POST["parametros"]["verReporte"]);//Forzamos borrar el verReporte para que al imprimir renderize tipo grid en vez de pdf.
    		}else{//El llamado viene desde desde una forma que se abrío en una segunda ventana y tiene un botón versión para imprimir
    			//No code
    		}
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

/*

    	$verReporte = "0" ;
    	$subreporte = "0" ;

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$subreporte = (isset($_GET["id"])) ? "1" : "0";

    		if ($subreporte == "1"){//El llamado viene desde el topten de clientes 
				$parametros["descri"] = $_GET["id"];
				$verReporte = "0";
    		}else{//El llamado viene desde desde una forma que se abrío en una segunda ventana y tiene un botón versión para imprimir
				$verReporte = (isset($parametros["verReporte"])) ? $parametros["verReporte"] : "0";
    		}

			//echo 'subreporte=' . $subreporte;
    		//echo '<pre>' ; print_r($parametros) ; '</pre>';
    		//exit;
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

*/

		/*
		MP_RPT_Q_VENTAS_TOP_CLIENTES
		@COD_CTE
		@COD_DOC
		@FECHA1
		@FECHA2
		@COD_GRUPO
		@COD_ZONA
		@PORCENTAJE
		@DESCRI
		@MIN
		@CONTADO
		@COD_AGRICOLA
		@COD_GRUPO_PROD_INTERES
		@UTILIDAD_MAXIMA
		@CATEGORIA
		@FILTRAR_VALOR
		@CLASIFICACION
		@EXCLUIR_ZONA
		@TIPO_CLIENTE
		*/

		$filtrarporporcentajeutlidad = (isset($parametros["filtrarporporcentajeutlidad"])) ? '1' : '0';
		$min = (isset($parametros["min"])) ? $parametros["min"] : "";
		$min = ($filtrarporporcentajeutlidad == '1') ? $min : 'X';//sobreescribe min, si no se checkeo el filtrar por % de ut
		$porcentaje = (isset($parametros["porcentaje"])) ? $parametros["porcentaje"] : 30;	
		$filtrarValor = ($parametros["filtrarValor"] == "CATEGORIA") ? "C" : "P" ;//SINO SERIA PORCENTAJE, C=CATEGORIA, P=PORCENTAJE
		$categoria = (isset($parametros["categoria"])) ? $parametros["categoria"] : "";
		$excluirZona = (isset($parametros["excluirZona"])) ? "1":"0";

		/*
		echo "<pre>filtrarporporcentajeutlidad=" ; echo $filtrarporporcentajeutlidad ; echo "<pre>";
		echo "<pre>porcentaje=" ; echo $porcentaje ; echo "<pre>";
		echo "<pre>min=" ; echo $min ; echo "<pre>";
		echo "<pre>filtrarValor=" ; echo $filtrarValor ; echo "<pre>";
		echo "<pre>categoria=" ; echo $categoria ; echo "<pre>";
		echo "<pre>excluirZona=" ; echo $excluirZona ; echo "<pre>";
		//exit;
		*/
					
		$sql = "exec dbo.MP_RPT_Q_VENTAS_TOP_CLIENTES '" . 
		$parametros["cod_cte"] . "','" . 
		$parametros["cod_doc"] . "','" . 
		date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
		date("Y-d-m", strtotime($parametros["fecha2"])) . "','" . 
		$parametros["cod_grupo"] . "','" . 
		$parametros["cod_zona"] . "'," . 
		$porcentaje . ",'" . 
		$parametros["descri"] . "','" . 
		$min . "','" . 
		'' . "','" . 
		$parametros["cod_agricola"] . "','" . 
		$parametros["cod_grupo_prod_interes"] . "','" . 
		$parametros["utilidad_maxima"] . "','" . 
		$categoria . "','" . 
		$filtrarValor . "','" . 
		$parametros["clasificacion"] . "','" . 
		$excluirZona . "','" .
		$parametros["tipo_cliente"] . "'";

		//echo $sql;	
		//exit;

		$this->imprimirHorizontal("reporteTopTenClientes","Topten Clientes",$sql,$parametros);

		//$rs = Yii::$app->db->createCommand($sql)->queryAll();

		//return $this->render("reporteTopTenClientes",array("rs"=>$rs, "nombreReporte"=>"Topten Clientes",'parametros'=>$parametros));
		//exit;	


    }    

	public function actionVentasdiarias(){

		//echo "<pre class='alert'>"; print_r(Yii::$app->params['meses'][2]); echo "</pre>";
		//echo "<pre>"; print_r(Yii::$app->params[meses]); echo "</pre>";
		//exit;
		$parametros = $_POST["parametros"];
	    $excluir = (isset($parametros["excluirzona"])) ? "1":"0";

		switch ($parametros["formato"]) {
			case "1":	//VENTAS DIARIAS
				/*
				EXEC MP_RPT_Q_VENTAS_DIARIAS_COMPARATIVAS        
				@COD_ZONA='2',        
				@COD_CTE='',        
				@FECHA1='2015-01-01',        
				@FECHA2='2015-31-12',  
				@FORMATO_ASP='0',   
				@EXCLUIR_ZONA='0' 
				*/	    	
				$sql = "exec dbo.MP_RPT_Q_VENTAS_DIARIAS_COMPARATIVAS " . 
					"'" . $parametros["codigoZona"] . "','','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','0','" . 
					$excluir . "'";
			   
				$this->imprimir("reporteVentasDiarias-VentasDiarias","Ventas diarias",$sql,$parametros);
				break;

			case "2":	//VENTAS ZONAS TOTALES
				/*
				MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS
				@COD_ZONA
				@FECHA1
				@FECHA2
				@TIPO_REPORTE
				@EXCLUIR_ZONA
				@SISTEMA
				*/
				$sql = "exec dbo.MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS " . 
					"'" . $parametros["codigoZona"] . "','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','TOT','" . 
					$excluir . "','INTELIGENCIA'";
			   
				$this->imprimir("reporteVentasDiarias-VentasZonasTotales","Ventas zonas con metas",$sql,$parametros);
				break;

			case "3":	//VENTAS ZONAS TOTALES GRAFICA
				/*
				MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS
				@COD_ZONA
				@FECHA1
				@FECHA2
				@TIPO_REPORTE
				@EXCLUIR_ZONA
				@SISTEMA
				*/
				$sql = "exec dbo.MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS " . 
					"'" . $parametros["codigoZona"] . "','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','TOT','" . 
					$excluir . "','INTELIGENCIA'";
			   
				$this->imprimir("reporteVentasDiarias-VentasZonasGrafica","Ventas zonas con metas",$sql,$parametros);
				break;								 

			case "4":	//VENTAS SEMANALES
				/*
				MP_RPT_Q_VENTAS_SEMANALES_COMPARATIVAS
				@COD_ZONA
				@COD_CTE
				@FECHA1
				@FECHA2
				@EXCLUIR_ZONA
				*/
				$sql = "exec dbo.MP_RPT_Q_VENTAS_SEMANALES_COMPARATIVAS " . 
					"'" . $parametros["codigoZona"] . "','','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','" . 
					$excluir . "'";

				$this->imprimir("reporteVentasDiarias-VentasSemanales","Ventas semanales",$sql,$parametros);
				break;

			case "5":	//VENTAS Y GASTOS
				/*
				MP_RPT_Q_VENTAS_GASTOS_ZONAS_COMPARATIVAS
				@COD_ZONA
				@FECHA1
				@FECHA2
				@TIPO_REPORTE
				@EXCLUIR_ZONA
				@SISTEMA
				*/
				$sql = "exec dbo.MP_RPT_Q_VENTAS_GASTOS_ZONAS_COMPARATIVAS " . 
					"'" . $parametros["codigoZona"] . "','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','TOT','" . 
					$excluir . "','INTELIGENCIA'";

				$this->imprimir("reporteVentasDiarias-VentasGastos","Ventas y gastos",$sql,$parametros);
				break;

			case "6":	//VTAS GRUPOS TOTALES
				/*
				MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS_GRUPOS
				@COD_GRUPO
				@COD_ZONA
				@FECHA1
				@FECHA2
				@TIPO_REPORTE
				@SISTEMA
				*/
				$sql = "exec dbo.MP_RPT_Q_VENTAS_ZONAS_COMPARATIVAS_GRUPOS " . 
					"'" . $parametros["codigoGrupo"] . "'," .
					"'" . $parametros["codigoZona"] . "','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "','TOT','INTELIGENCIA'";

				$this->imprimir("reporteVentasDiarias-VentasGruposTotales","Ventas con metas por grupo",$sql,$parametros);
				break;


			case "7":	//VTAS GRUPOS SEMANALES
		    	/*MP_RPT_Q_VENTAS_SEMANALES_COMPARATIVAS_GRUPOS
		    	@COD_GRUPO
				@COD_ZONA
				@COD_CTE
				@FECHA1
				@FECHA2
				*/
				$sql = "exec dbo.MP_RPT_Q_VENTAS_SEMANALES_COMPARATIVAS_GRUPOS " . 
					"'" . $parametros["codigoGrupo"] . "'," .
					"'" . $parametros["codigoZona"] . "','','" .
					date("Y-d-m", strtotime($parametros["fecha1"])) . "','" . 
					date("Y-d-m", strtotime($parametros["fecha2"])) . "'" ;

				$this->imprimir("reporteVentasDiarias-VentasGruposSemanales","Ventas semanales grupos",$sql,$parametros);
				break;
		}
    }	
    
    public function actionListaprecios(){
    	//echo "<pre>" ; print_r($_POST["parametros"]) ; echo "</pre>" ;
 		//exit;

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

		//$parametros = $_POST["parametros"];

 		$sql = "exec PAQA.dbo.MP_RPT_CATALOGOS_PRECIOS_VENTA " . 
 					"@PLAZA = '01'," .
 					"@COD_ART = '" . $parametros["descri"] . "'," .
 					"@COD_LIN = ''," .
 					"@FILTRAR_SOLO_ARTICULOS_SIN_PRECIO_MINIMO = '0'," .
 					"@COD_ALM = ''," .
 					"@USAR_FILTRO_FECHAS_PREESTABLECIDO = '0'," .
 					"@TIPO_FILTRO_FECHAS_PREESTABLECIDO = '0'," .
 					"@FECHA1 = ''," .
 					"@FECHA2 = '' ";
 		
 		$this->imprimir("reporteListaPrecios","Lista de Precios",$sql,$parametros);
    }

 	public function actionVentasparacomisiones(){	    

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 	

 		$sql = "exec dbo.MP_RPT_Q_VENTAS_COMISIONES " . 
 		"@UTILIDAD_MAX = '" . $parametros["utilidad_maxima"] . "'," . 
		"@COD_CTE = '" . $parametros["cod_cte"] . "'," .
		"@COD_DOC = '" . $parametros["cod_doc"] . "'," . 
		"@FECHA1 = '" . date("Y-d-m", strtotime($parametros["fecha1"])) . "'," . 
		"@FECHA2 = '" . date("Y-d-m", strtotime($parametros["fecha2"])) . "'," . 		
		"@COD_ZONA = '" . $parametros["cod_zona"] . "'," . 
		"@DESCRI = '" . $parametros["descri"] . "'," .
		"@COD_GRUPO = '" . $parametros["cod_grupo"] . "'," .
		"@COD_AGRICOLA = '" . $parametros["cod_agricola"] . "'," . 
		"@COD_GRUPO_PROD_INTERES = '" . $parametros["cod_grupo_prod_interes"] . "'" ;
 		
 		$this->imprimir("reporteVentasParaComisiones","Ventas para comisiones",$sql,$parametros);

	}

 	public function actionVentasconsaldo(){	    

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

		//echo "<pre>" ; print_r($parametros) ; echo "</pre>";
		//exit;

		$filtrar_solo_clientes_con_saldo = (isset($parametros["filtrar_solo_clientes_con_saldo"])) ? 'S' : 'N';

		$sql = "exec dbo.MP_RPT_Q_VENTAS_CON_SALDO " . 
		"@COD_ZONA = '" . $parametros["cod_zona"] . "'," . 
		"@COD_VEN = ''," .		
		"@COD_GRUPO_CTE = '" . $parametros["cod_grupo"] . "'," .
		"@FILTRAR_SOLO_CLIENTES_CON_SALDO = '" . $filtrar_solo_clientes_con_saldo . "'," .		
		"@PORCENTAJE_VENTA = '" . $parametros["porcentaje_venta"] . "'," . 
		"@FECHA_INICIO = '" . date("Y-d-m", strtotime($parametros["fecha1"])) . "'," . 
		"@FECHA_FINAL = '" . date("Y-d-m", strtotime($parametros["fecha2"])) . "'";
 		
		//echo $sql;
		//exit;

 		$this->imprimir("reporteVentasConSaldo","Ventas con saldo",$sql,$parametros);

	}

 	public function actionUltimospreciosproductos(){	    

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

		$sql = "exec dbo.MP_RPT_Q_VENTAS_ARTICULO_PRECIOS_PROMEDIO " . 
		"@COD_CTE = '" . $parametros["cod_cte"] . "'," .
		"@COD_ART = ''";
 		
 		$this->imprimir("reporteUltimosPreciosProductos","Ultimos precios de productos",$sql,$parametros);

	}

	public function actionMejoresproductos(){	    

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	

			$parametros = $_POST["parametros"];			
		} 

		$sql = "exec dbo.MP_RPT_Q_VENTAS_MEJORES_PRODUCTOS " . 
		"@FECHA1 = '" . date("Y-d-m", strtotime($parametros["fecha1"])) . "'," .
		"@FECHA2 = '" .  date("Y-d-m", strtotime($parametros["fecha2"])) . "'," .
		"@LIMITE_UTILIDAD = '" . $parametros["lim_utilidad"] . "'," .
		"@LIMITE_CANTIDAD = '" . $parametros["lim_cantidad"] . "'," .
		"@COD_GRUPO_PROD_INTERES = '" . $parametros["cod_grupo_prod_interes"] . "'," .
		"@POTENCIAL = '" . $parametros["potencial"] . "'," .
		"@LIMITE_PREFERENTES = '" . $parametros["lim_preferentes"] . "'," .
		"@DESCRI = '" . $parametros["descri"] . "'," .
		"@COD_ZONA = '" . $parametros["codigoZona"] . "'," .
		"@CLASIFICACION =  '" . $parametros["clasificacion"] . "'";
 		
 		$this->imprimir("reporteMejoresProductos","Mejores Productos",$sql,$parametros);

	}

	public function actionMejoresclientes(){	    

    	$subreporte = "0" ;

    	if(isset($_GET["param"])){
    		$parametros = unserialize($_GET["param"]);
    		//print_r($parametros);
    		
    		$_POST["parametros"] = $parametros;//Aqui el post esta vacio, lo ponemos porque en la impresión se usa el post('verReporte')
    		$subreporte = (isset($_GET["descri_heredado"])) ? "1" : "0";
    	
    		if ($subreporte == "1"){//El llamado viene desde el topten de productos 
				$parametros["descri_heredado"] = $_GET["descri_heredado"];//El $_GET["param"] no tiene descri , se obiene del id.
				$parametros["utilidad_max"] = $_GET["utilidad_max"];
				$parametros["cod_grupo"] = $_GET["cod_grupo"];
				unset($_POST["parametros"]["verReporte"]);//Forzamos borrar el verReporte para que al imprimir renderize tipo grid en vez de pdf.
				

    		}else{//El llamado viene desde desde una forma que se abrió en una segunda ventana y tiene un botón de ver
    			//No code
    		}
		}
		else{//El llamado es directo del reporte
			if(!isset($_POST["parametros"])){
				exit;
			}	
			$parametros = $_POST["parametros"];			
		} 

		//print_r($parametros);
    	//exit;

		$sql = "exec dbo.MP_RPT_Q_VENTAS_MEJORES_CLIENTES " . 
		"@FECHA1 = '" . date("Y-d-m", strtotime($parametros["fecha1"])) . "'," .
		"@FECHA2 = '" .  date("Y-d-m", strtotime($parametros["fecha2"])) . "'," .
		"@LIMITE_UTILIDAD = '" . $parametros["lim_utilidad"] . "'," .
		"@LIMITE_CANTIDAD = '" . $parametros["lim_cantidad"] . "'," .
		"@COD_GRUPO_PROD_INTERES = '" . $parametros["cod_grupo_prod_interes"] . "'," .
		"@POTENCIAL = '" . $parametros["potencial"] . "'," .
		"@LIMITE_PREFERENTES = '" . $parametros["lim_preferentes"] . "'," .
		"@DESCRI = '" . $parametros["descri_heredado"] . "'," .
		"@COD_ZONA = '" . $parametros["codigoZona"] . "'," .
		"@UTILIDAD_MAX = '" . $parametros["utilidad_max"] . "'," .
		"@COD_GRUPO = '" . $parametros["cod_grupo"] . "'," .
		"@CLASIFICACION =  '" . $parametros["clasificacion"] . "'";
 		
 		$this->imprimir("reporteMejoresClientes","Mejores Clientes",$sql,$parametros);

	}

    public function actionPruebacristal(){
    	//echo $this->render('reportePruebaCristal');
    }

    public function imprimir($reporte,$nombreReporte,$sql,$parametros){
    	
    	$rs = Yii::$app->db->createCommand($sql)->queryAll();

    	Utilerias::grabahistorialusoreportes($sql);
		/*
		echo "<pre>"; print_r($_POST); echo "</pre>";
		exit;*/


    	if(isset($_POST["parametros"]["verReporte"])){
			$pdf = Yii::$app->pdf;
			$pdf->content = $this->renderPartial($reporte, array("rs"=>$rs,"nombreReporte"=>$nombreReporte,'parametros'=>$parametros));
			return $pdf->render();				
		}else{
			echo $this->render($reporte, array("rs"=>$rs,"nombreReporte"=>$nombreReporte,'parametros'=>$parametros));
		}
    }
  

    public function imprimirHorizontal($reporte,$nombreReporte,$sql,$parametros){
		/*
    	if(isset($_POST["parametros"]["verReporte"])){
    		echo 'imprimir pdf';
    	}
    	else{
    		//$rs = Yii::$app->db->createCommand($sql)->queryAll();
    		//echo $this->render($reporte,array("rs"=>$rs, "nombreReporte"=>$nombreReporte,'parametros'=>$parametros));
    		echo 'ver grid';
    	}
    	exit;
    	*/

    	$rs = Yii::$app->db->createCommand($sql)->queryAll();

    	Utilerias::grabahistorialusoreportes($sql);

		if(isset($_POST["parametros"]["verReporte"])){
			$content = $this->renderPartial($reporte,array("rs"=>$rs, "nombreReporte"=>$nombreReporte,'parametros'=>$parametros));	

			$pdf = new Pdf([
			        // set to use core fonts only
			        //'mode' => Pdf::MODE_CORE, 
			        // A4 paper format
			        'format' => Pdf::FORMAT_A4, 
			        // portrait orientation
			        'orientation' => Pdf::ORIENT_LANDSCAPE, 
			        // stream to browser inline
			        'destination' => Pdf::DEST_BROWSER, 
			        // your html content input
			        'content' => $content,  
			        // format content from your own css file if needed or use the
			        // enhanced bootstrap css built by Krajee for mPDF formatting 
			        'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
			        // any css to be embedded if required
			        'cssInline' => '.kv-heading-1{font-size:18px}', 
			         // set mPDF properties on the fly
			        'options' => ['title' => 'Report Title'],
			         // call mPDF methods on the fly
			        'methods' => [ 
			            'SetHeader'=>[''], 
			            'SetFooter'=>['{PAGENO}'],
			        ]
			    ]);
			 
			    // return the pdf output as per the destination setting
			    return $pdf->render();
		}

		else{		
			echo $this->render($reporte,array("rs"=>$rs, "nombreReporte"=>$nombreReporte,'parametros'=>$parametros));
			//echo $this->render($reporte,array("rs"=>$rs, "nombreReporte"=>$nombreReporte,'parametros'=>$parametros,"formtarget"=>"_blank"));

			//echo window.open("www.google.com");
			//window.open($this.attr('href'));

			
		}    	
    }


}

?>