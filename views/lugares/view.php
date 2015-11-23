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

        <?php $c=0; foreach ($Lugares as $lugares) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $lugares->nombre ?></td>
            <td><?= $lugares->direccion ?></td>
            <td><?= $lugares->telefono ?></td>
            <td><?= $lugares->contacto ?></td>
           <td>
           <span class="label label-<?php;if($lugares->estatus_did == 1)echo 'success';if($lugares->estatus_did == 2)echo 'danger'; ?>">
              <?= $lugares->estatus->nombre ?></span>
            </td>
        
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
