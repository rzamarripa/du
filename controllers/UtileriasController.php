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
class UtileriasController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['getzonas','getgrupos','getclientes','getclientespaqa','getarticulos','obtieneagricolas','getarticulospaqa','sincronizando',
                        'grabahistorialusoreportes','obtienezonadegrupo','getproveedores','obtienealmacenespuntoventa','getgrupostodos'],
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

    public function actionGetclientes(){
        $txt = str_replace("'", "''", $_GET["q"]);
        $clientes = Yii::$app->db->createCommand("SELECT COD_CTE,NOM_CTE FROM CATCTES WHERE NOM_CTE LIKE '%" . $txt . "%' ORDER BY NOM_CTE")->queryAll();   
        return json_encode($clientes);
    }

	public function actionGetclientespaqa(){
		$txt = str_replace("'", "''", $_GET["q"]);
		$clientes = Yii::$app->db->createCommand("SELECT COD_CTE,NOM_CTE+' ('+COD_CTE+')' NOM_CTE FROM PAQA..CATCTES WHERE STATUS='A' AND NOM_CTE LIKE '%" . $txt . "%' ORDER BY NOM_CTE")->queryAll();
		return json_encode($clientes);
    }

    public function actionGetarticulos(){
        $txt = str_replace("'", "''", $_GET["q"]);
        $articulos = Yii::$app->db->createCommand("SELECT COD_ART AS CODIGO,DESCRI AS DESCRIPCION FROM CATARTI WHERE STATUS='A' AND DESCRI LIKE '%" . $txt . "%' ORDER BY DESCRI")->queryAll();
        return json_encode($articulos);
    }

    public function actionGetarticulospaqa(){
        $txt = str_replace("'", "''", $_GET["q"]);
        $articulos = Yii::$app->db->createCommand("SELECT COD_ART AS CODIGO,DESCRI AS DESCRIPCION FROM PAQA..CATARTI WHERE STATUS='A' AND DESCRI LIKE '%" . $txt . "%' ORDER BY DESCRI")->queryAll();
        return json_encode($articulos);
    }

	public function actionGetzonas(){
        $txt = str_replace("'", "''", $_GET["q"]);
        $zonas = Yii::$app->db->createCommand("SELECT COD_ZONA,NOM_ZONA FROM CATZONAS WHERE NOM_ZONA LIKE '%" . $txt . "%' ORDER BY NOM_ZONA")->queryAll();   
        return json_encode($zonas);
    }
    
    public function actionGetgrupos(){
        $txt = str_replace("'", "''", $_GET["q"]);
        $grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS WHERE NOM_GRUPO LIKE '%" . $txt . "%'  ORDER BY NOM_GRUPO")->queryAll();
        return json_encode($grupos);
    }

    public function actionGetgrupostodos(){
        //$txt = str_replace("'", "''", $_GET["q"]);
        $grupos = Yii::$app->db->createCommand("SELECT COD_GRUPO,NOM_GRUPO,COD_ZONA FROM CATGRUPOS ORDER BY NOM_GRUPO")->queryAll();
        //return json_encode($grupos);
        echo "<option></option>";
        foreach($grupos  as $grupo){ 
            echo '<option value="' . $grupo["COD_GRUPO"] . '">' . $grupo["NOM_GRUPO"] . '</option>';
        }
    }

    public function actionGetproveedores(){
        $txt = str_replace("'", "''", $_GET["q"]);
        $proveedores = Yii::$app->db->createCommand("SELECT COD_PROV,NOM_PROV FROM CATPROV WHERE STATUS='A' AND NOM_PROV LIKE '%" . $txt . "%' ORDER BY NOM_PROV")->queryAll();
        return json_encode($proveedores);
    }

    public function actionObtieneagricolas(){     
        $cliente = str_replace("'", "''", $_GET["cte"]);
        
        $sql = "SELECT CA.COD_AGRICOLA,CA.NOM_AGRICOLA,CTE.NOM_CTE FROM CATAGRICOLAS CA 
        INNER JOIN CATCTES CTE ON(CA.COD_CTE=CTE.COD_CTE) WHERE CA.COD_CTE='" . $cliente . "' ORDER BY NOM_AGRICOLA";

        $agricolas = Yii::$app->db->createCommand($sql)->queryAll();
        echo "<option></option>";
        foreach($agricolas as $agricola){ 
            echo '<option value="' . $agricola["COD_AGRICOLA"] . '">' . $agricola["NOM_AGRICOLA"] . '</option>';
        }
    }

    public function actionObtienealmacenespuntoventa(){     
        

        $zona = str_replace("'", "''", $_GET["zona"]);

        $sql = "SELECT A.COD_ALM,A.NOM_ALM FROM CATZONAS Z 
                INNER JOIN CATALMA A ON A.COD_ZONA=Z.COD_ZONA 
                INNER JOIN CAT_PUNTOS_VENTA V ON V.COD_ALM=A.COD_ALM 
                WHERE Z.COD_ZONA='" . $zona . "' ";
                
        $almacenes = Yii::$app->db->createCommand($sql)->queryAll();
        echo "<option></option>";
        foreach($almacenes as $almacen){ 
            echo '<option value="' . $almacen["COD_ALM"] . '">' . $almacen["NOM_ALM"] . '</option>';
        }
    }

    
    /*
    public function actionObtienezonadegrupo(){     
        $grupo = str_replace("'", "''", $_GET["COD_GRUPO"]);
        
        $sql = "SELECT COD_ZONA FROM CATGRUPOS WHERE COD_GRUPO = '" .  $grupo . "'";

        $zona = Yii::$app->db->createCommand($sql)->queryScalar();
        echo $zona;
    }    
    */
    

    public function actionSincronizando(){
        return $this->render('sincronizando');
    }


    //1
    public function actionObtienezonadegrupo(){     
        $grupo = str_replace("'", "''", $_POST["grupo"]);
        $sql = "SELECT Z.COD_ZONA FROM CATGRUPOS G INNER JOIN CATZONAS Z ON(G.COD_ZONA=Z.COD_ZONA) WHERE G.COD_GRUPO = '" .  $grupo . "'";
        $zona = Yii::$app->db->createCommand($sql)->queryScalar();
        echo $zona;       
    }

    /*
    //2
    public function actionObtienezonadegrupo(){     
        $grupo = str_replace("'", "''", $_GET["COD_GRUPO"]);
        $sql = "SELECT Z.COD_ZONA FROM CATGRUPOS G INNER JOIN CATZONAS Z ON(G.COD_ZONA=Z.COD_ZONA) WHERE G.COD_GRUPO = '" .  $grupo . "'";
        $zona = Yii::$app->db->createCommand($sql)->queryScalar();
        echo $zona;       
    }
    */

    /*
    //3
    public function actionObtienezonadegrupo($codigoGrupo){     
        $sql = "SELECT Z.COD_ZONA FROM CATGRUPOS G INNER JOIN CATZONAS Z ON(G.COD_ZONA=Z.COD_ZONA) WHERE G.COD_GRUPO = '" .  $codigoGrupo . "'";
        $zona = Yii::$app->db->createCommand($sql)->queryScalar();
        echo $zona;       
    }
    */

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

}

?>    