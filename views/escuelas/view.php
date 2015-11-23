 <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Contacto</th>
            <th>Estatus</th>  
      


        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($Escuelas as $Escuelas) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $Escuelas->nombre ?></td>
            <td><?= $Escuelas->direccion ?></td>
            <td><?= $Escuelas->telefono ?></td>
            <td><?= $Escuelas->contacto ?></td>
            <td>
           <span class="label label-<?php;if($Escuelas->estatus_did == 1)echo 'success';if($Escuelas->estatus_did == 2)echo 'danger'; ?>">
              <?= $Escuelas->estatus->nombre ?></span>
            </td>
   


  
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
