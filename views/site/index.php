<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
use app\models\TramiteNuevo;
?>
<div class="site-index">
    <p class="lead">Página Principal</p>
    <table class="table table-striped table-bordered">
      <thead>
	      <tr>
	        <th>Nombre del trámite</th>
	        <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
	      <?php foreach ($tramites as $tramite) { ?> 
	      <tr>
	        <td>
		        <?= $tramite->tipoTramite->nombre ?>
		      </td>
	        <td>
		      	<?= Html::a('Detalles',['tramite-zonificacion/index'],['class'=>'btn btn-primary btn-sm'])?>            
	        </td>
	      </tr>
          	<?php } ?>
        </tbody>
    </table>    
</div>