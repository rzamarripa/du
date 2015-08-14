<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
	?>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#fraccionamientos" aria-controls="fraccionamientos" role="tab" data-toggle="tab">Fraccionamientos</a></li>
    <li role="presentation"><a href="#otros" aria-controls="otros" role="tab" data-toggle="tab">Otros</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="fraccionamientos"><?php echo $this->renderAjax('_fraccionamientos'); ?></div>
    <div role="tabpanel" class="tab-pane" id="otros"><?php echo $this->renderAjax('_otros',['model'=>$model,'proyectos'=>$proyectos]); ?></div>
  </div>

</div>
