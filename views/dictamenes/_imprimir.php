<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Domicilio</th>
            <th>Giro</th>
            <th>Duracion</th>
            <th>Estatus</th>
       
          
        
        
    </thead>
    <tbody>
        <?php $c=0; foreach ($Dictamenes as $dic) {$c++;?> 
        <tr>   
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $dic->nombre ?></td>
            <td><?= $dic->fechaCreacion ?></td>
            <td><?= $dic->domicilio ?></td>
            <td><?= $dic->giro ?></td>
            <td><?= $dic->duracion ?></td>
            <td><span class="label label-<?php if($dic->estatus_did == 1)echo 'warning';if($dic->estatus_did == 3)echo 'success';if($dic->estatus_did == 4)echo 'danger'; ?>">
              <?= $dic->estatus->proyecto ?></span>
            </td>
           
        
        </tr>
        <?php }?>
    </tbody>
</table>