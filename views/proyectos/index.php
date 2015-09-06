<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
	?>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" ><a href="#fraccionamientos" aria-controls="fraccionamientos" role="tab" data-toggle="tab">Fraccionamientos</a></li>
    <li role="presentation" class="active"><a href="#otros" aria-controls="otros" role="tab" data-toggle="tab">Otros</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="fraccionamientos"><?php echo $this->render('_fraccionamientos'); ?></div>
    <div role="tabpanel" class="tab-pane active" id="otros"><?php echo $this->render('_otros',['model'=>$model,'proyectos'=>$proyectos]); ?></div>
  </div>

</div>

<script>
$('a[data-toggle="tab"]').on('click', function (e) { //save the latest tab; use cookies if you like 'em better:
    localStorage.setItem('ultimoContenidoRequisicion', $(e.target).attr('href'));
  }); //go to the latest tab, if it exists:
var ultimoContenidoRequisicion = localStorage.getItem('ultimoContenidoRequisicion');
  if (ultimoContenidoRequisicion) {
    
   $('ul.nav-tabs').children().removeClass('active');
   $('a[href="' + ultimoContenidoRequisicion +'"]').tab('show');
  }
   //$('.tab-content').children().removeClass('active');
   //$(ultimoContenidoRequisicion).addClass('active');
  
 
</script>