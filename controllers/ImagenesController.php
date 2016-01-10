<?php

namespace app\controllers;

use Yii;
use app\models\Imagenes;
use app\models\ImagenesSearch;
use app\models\EncabezadoImagenes;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

class ImagenesController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
               
             
            ],
        ];
    }

    public function actionIndex()
    {
        //$encabezados = EncabezadoImagenes::find()->all();
        return $this->render('index');
    }

    public function actionBuscar(){
    	$encabezados = EncabezadoImagenes::find()->where(['like','folioTramiteCarga', $_POST['folio']])->all();
    	//echo '<pre>';print_r($encabezados); echo'</pre>';exit;
    	foreach ($encabezados as $encabezado) {
    		$tiposDocumento = Imagenes::find()->where('encabezado_id='.$encabezado->id)->select('tipoDocumento')->distinct()->all();
    		$encabezado->tiposDocumento = $tiposDocumento;
    	}
    	
	    return $this->renderPartial('_buscar',['encabezados'=>$encabezados]);
    }

    public function actionView()
    {
    	if(isset($_POST['EncabezadoImagenes'])){
    		$model = EncabezadoImagenes::findOne($_GET['id']);
    		$model->load(Yii::$app->request->post());
    		//echo '<pre>';print_r($_POST); echo'</pre>';
    		
	    	$model->save();
	        return $this->redirect('view?id='.$_GET['id']);
    	}

        $consecutivo = 1;
        if(isset($_GET['id'])){
        	$model = EncabezadoImagenes::findOne($_GET['id']);
	    	$imagen = Imagenes::find()->where('encabezado_id='. $_GET['id'].' and consecutivo='.$consecutivo)->one();
	    	$totalImagenes = Imagenes::find()->where('encabezado_id='. $_GET['id'])->count();
	    	return $this->render('view', ['model'=>$model,'totalImagenes'=>$totalImagenes,'imagen' => $imagen,'consecutivo' =>$consecutivo]);
		}else{
			//echo '<pre>';print_r($_POST); echo'</pre>';exit;
			$model = new EncabezadoImagenes;
			$consecutivo = $_POST['consecutivo'];
			$imagen = Imagenes::find()->where('encabezado_id='. $_POST['id'].' and consecutivo='.$consecutivo)->one();
			$totalImagenes = Imagenes::find()->where('encabezado_id='. $_POST['id'])->count();
			return $this->renderAjax('view', ['model'=>$model,'totalImagenes'=>$totalImagenes,'imagen' => $imagen,'consecutivo' =>$consecutivo,'id'=>$_POST['id']]);
		}
    }
    public function actionVer()
    {
    	if(isset($_POST['EncabezadoImagenes'])){
    		$model = EncabezadoImagenes::findOne($_GET['id']);
    		$model->load(Yii::$app->request->post());
    		//echo '<pre>';print_r($_POST); echo'</pre>';
    		
	    	$model->save();
	        return $this->redirect('ver?id='.$_GET['id'].'& tipoDocumento='.$_GET['tipoDocumento']);
    	}
		if(isset($_POST['consecutivo'])){
			$model = new EncabezadoImagenes;
			$imagen = Imagenes::find()->where('encabezado_id = :id and tipoDocumento = :tipoDocumento and 
				consecutivo = :consecutivo',['id'=>$_POST['id'], 'tipoDocumento'=>$_POST['tipoDocumento'],'consecutivo'=>$_POST['consecutivo']])->one();
			$totalImagenes = Imagenes::find()->where('encabezado_id = :id and tipoDocumento = :tipoDocumento',['id'=>$_POST['id'], 'tipoDocumento'=>$_POST['tipoDocumento']])->count();
			$consecutivo = $_POST['consecutivo'];
			$paginacion = $_POST['paginacion'];
			return $this->renderAjax('ver', ['paginacion'=>$paginacion, 'model'=>$model,'totalImagenes'=>$totalImagenes,'imagen' => $imagen,'consecutivo' =>$consecutivo,'id'=>$_POST['id'],'tipoDocumento'=>$_POST['tipoDocumento']]);
		}
		if(isset($_GET['tipoDocumento'])){
			$model = EncabezadoImagenes::findOne($_GET['id']);
			$imagen = Imagenes::find()->where('encabezado_id = :id and tipoDocumento = :tipoDocumento',['id'=>$_GET['id'], 'tipoDocumento'=>$_GET['tipoDocumento']])->one();
			$totalImagenes = Imagenes::find()->where('encabezado_id = :id and tipoDocumento = :tipoDocumento',['id'=>$_GET['id'], 'tipoDocumento'=>$_GET['tipoDocumento']])->count();
			$consecutivo = $imagen->consecutivo;
			$paginacion = 1;
			return $this->render('ver', ['paginacion'=>$paginacion, 'model'=>$model,'totalImagenes'=>$totalImagenes,'imagen' => $imagen,'consecutivo' =>$consecutivo,'id'=>$_GET['id'],'tipoDocumento'=>$_GET['tipoDocumento']]);
		}
		
    }
}
