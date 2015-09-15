<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Contacto</th>  
           

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
           
        </tr>
        <?php }?>
    </tbody>
</table>