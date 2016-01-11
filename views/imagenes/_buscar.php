<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
?>
<div>
<table class="table table-striped table-bordered">
  <thead>
  	<tr>
  	  <th>Folio</th>
  	  <th>Ver</th>
	</tr>
  </thead>
  <tbody>
  	<?php foreach ($encabezados as $encabezado) {?>
	    <tr>
	      <td><?= $encabezado->folioTramiteCarga ?></td>
	      <td><?= HTML::a('<span class="fa fa-eye"></span>',['imagenes/view','id'=>$encabezado->id],['class'=>'btn btn-default','target'=>'_blank']) ?>
	      		<button type="button" class="btn btn-info btn-sx dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          	<span class="caret"></span>
		          </button>
		          <ul class="dropdown-menu">
		           <?php foreach ($encabezado->tiposDocumento as $tipoDocumento){?>
		           		<li><?= Html::a($tipoDocumento->tipoDocumento,['imagenes/ver', 'id'=>$encabezado->id, 'tipoDocumento'=>$tipoDocumento->tipoDocumento],['target'=>'_blank']) ?></li>
		           <?php }?>
		          </ul>
	      </td>
	    </tr>
    <?php }?>
   </tbody>
</table>
</div>