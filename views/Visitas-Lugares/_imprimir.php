<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Descripción</th> 
            <th>Estatus</th>
            

        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($VisitasLugares as $vl) {$c++;?> 
        <tr>
             <td class='col-sm-1'><?= $c?></td> 
            <td><?= $vl->lugares->nombre ?></td>
            <td><?= $vl->fecha_ft ?></td>
            <td><?= $vl->descripcion ?></td>

            <td><span class="label label-<?php if($vl->estatus_did == 1)echo 'warning';if($vl->estatus_did == 3)echo 'success';if($vl->estatus_did == 4)echo 'danger'; ?>">
              <?= $vl->estatus->proyecto ?></span> 
          </td>
           
           
        </tr>
        <?php }?>
    </tbody>
</table>