
<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
use yii\helpers\Html;
use app\models\USUARIOS;
use app\models\VisitasEscuelas;
?>
<div class="site-index">

</div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-6">
                Desarrollo Urbano
<table class="table table-striped table-bordered tabla ">
    <thead>
        <tr>
            <th>No.</th>
            <th>Escuela</th>
            <th>Fecha</th> 
            <th>Estatus</th>
      

        </tr>
    </thead>
    <tbody>
            <?php $c=0; foreach ($VisitasEscuelas as $ve) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $ve->escuela->nombre ?></td>
            <td><?= $ve->fecha_ft ?></td>
        <td>
           <span class="label label-<?php if($ve->estatus_did == 1)echo 'warning';if($ve->estatus_did == 3)echo 'success';if($ve->estatus_did == 4)echo 'danger'; ?>">
              <?= $ve->estatus->proyecto ?></span>
             
            </td>

           
        </tr>
        <?php }?>
    </tbody>
</table>
</div>

<div class="body-content">

        <div class="row">

            <div class="col-lg-6">
                Desarrollo Urbano
                
 <table  class="table table-striped table-bordered tabla">
    <thead>
        <tr>
            <th>No.</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Estatus</th>
     

        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($VisitasLugares as $vl) {$c++;?> 
        <tr>
             <td class='col-sm-1'><?= $c?></td> 
            <td><?= $vl->lugares->nombre ?></td>
            <td><?= $vl->fecha_ft ?></td>

            <td><span class="label label-<?php if($vl->estatus_did == 1)echo 'warning';if($vl->estatus_did == 3)echo 'success';if($vl->estatus_did == 4)echo 'danger'; ?>">
              <?= $vl->estatus->proyecto ?></span> 
          </td>
        
        </tr>
        <?php }?>
    </tbody>
</table>


</div>
</div>

</div>

