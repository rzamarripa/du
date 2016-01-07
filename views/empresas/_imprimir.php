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

        <?php $c=0; foreach ($Empresas as $empresa) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $empresa->nombre ?></td>
            <td><?= $empresa->direccion ?></td>
            <td><?= $empresa->telefono ?></td>
            <td><?= $empresa->contacto ?></td>
            <td>
                <span class="label label-<?php  if($empresa->estatus_did == 1)echo 'success';if($empresa->estatus_did == 2)echo 'danger'; ?>">
                <?= $empresa->estatus->nombre; ?></span>
            </td>
           
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
