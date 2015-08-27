<?php 
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
?>

<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcón</th>
            <th>Acciones</th>   
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tramites as $tramite) {?> 
        <tr>
            <td><?= $tramite->id ?></td>
            <td><?= $tramite->pasoActualId ?></td>
            <td>
           
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>