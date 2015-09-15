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

        <?php $c=0; foreach ($Lugares as $lugares) {$c++;?> 
        <tr>    
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $lugares->nombre ?></td>
            <td><?= $lugares->direccion ?></td>
            <td><?= $lugares->telefono ?></td>
            <td><?= $lugares->contacto ?></td>
            
           
        </tr>
        <?php }?>
    </tbody>
</table>