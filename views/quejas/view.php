 <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>        
            <th>No.</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Motivo</th>
            <th>Afectacion</th>  
            <th>Estatus</th>



        </tr>
    </thead>
    <tbody>

        <?php $c=0; foreach ($Quejas as $queja) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $queja->nombre ?></td>
            <td><?= $queja->fecha_ft ?></td>
            <td><?= $queja->motivo ?></td>
            <td><?= $queja->afectacion ?></td>
            <td>
           <span class="label label-<?php if($queja->estatus_did == 1)echo 'warning';if($queja->estatus_did == 3)echo 'success';if($queja->estatus_did == 4)echo 'danger'; ?>">
              <?= $queja->estatus->proyecto ?></span>
            </td>
           
           
        </tr>
        <?php }?>
    </tbody>
</table>