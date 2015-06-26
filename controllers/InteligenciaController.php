<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class InteligenciaController extends Controller
{
    public function behaviors()
    {
        return [
	        'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index','cache'],
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
    public function actionIndex()
    {
      return $this->render('index');
    }
    
    public function actionSubmenu($id)
    {
      return $this->render('submenu',["id"=>$id]);
    }
    
    public function actionCache(){
	    $duration = 60;     // cache query results for 60 seconds.
			$dependency = new \yii\caching\Dependency(Yii::$app->db->createCommand("select count(*) from CATCTES")->queryScalar());  // optional dependency

			$db = Yii::$app->db;
			echo date("Y:m:d H:i:s");
			$result = $db->cache(function ($db) {
			
			    $clientes = Yii::$app->db->createCommand("select * from CATCTES")->queryAll();
			
			    return $clientes;
			
			}, $duration, $dependency);
			echo date("Y:m:d H:i:s");
			echo '<pre>';print_r($result); echo "</pre>";
			exit;
    }
}

?>