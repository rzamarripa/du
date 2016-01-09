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
        <?php $c=0; foreach ($VisitasEmpresas as $vemp) {$c++;?> 
        <tr>
             <td class='col-sm-1'><?= $c?></td> 
            <td><?= $vemp->empresas->nombre ?></td>
            <td><?= $vemp->fechaCreacion ?></td>
            <td><?= $vemp->descripcion ?></td>

            <td><span class="label label-<?php if($vemp->estatus_did == 1)echo 'warning';if($vemp->estatus_did == 3)echo 'success';if($vemp->estatus_did == 4)echo 'danger'; ?>">
              <?= $vemp->estatus->proyecto ?></span> 
          </td>
         
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
