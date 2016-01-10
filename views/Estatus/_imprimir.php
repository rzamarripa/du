<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
          <th>No.</th>
            <th>Nombre</th>
            <th>Proyecto</th>
                        

    
        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($Estatus as $estatus) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $estatus->nombre ?></td>
             <td><?= $estatus->proyecto ?></td>
          


        </tr>
        <?php }?>
    </tbody>
</table>