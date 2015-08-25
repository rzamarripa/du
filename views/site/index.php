<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
use app\models\TramiteNuevo;

?>
<div class="site-index">

    <div class="body-content">
        <PRE>
         </PRE>
        <div class="row">
            <div class="col-lg-12">
	            <table class="table table-stripped">
                    <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Tipo tramite</th>
            <th>Acciones</th>
            
        
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tramites as $tramite) {?> 
        <tr>
            <td><?= $tramite->tipoTramite->nombre ?></td>
            <td>
                <?= Html::a('Detalles',['tipos-tramite/tramites-vista','id'=>$tramite->id],['class'=>'btn btn-primary btn-sm'])?>            
            </td>

               
        
        </tr>
        <?php }?>
    </tbody>
</table>

    
            </div>           
        </div>
    </div>
</div>

