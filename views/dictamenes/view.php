<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Domicilio</th>
            <th>Giro</th>
            <th>Duracion</th>

          
        
        
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
               
        
        </tr>
        <?php }?>
    </tbody>
</table>
