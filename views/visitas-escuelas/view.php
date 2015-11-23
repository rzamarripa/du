 <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
           <th>No.</th>
            <th>Escuela</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Estatus</th> 

        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($VisitasEscuelas as $ve) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $ve->escuela->nombre ?></td>
            <td><?= $ve->fecha_ft ?></td>
            <td><?= $ve->descripcion ?></td>

            <td>
           <span class="label label-<?php if($ve->estatus_did == 1)echo 'warning';if($ve->estatus_did == 3)echo 'success';if($ve->estatus_did == 4)echo 'danger'; ?>">
              <?= $ve->estatus->proyecto ?></span>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>

</div>