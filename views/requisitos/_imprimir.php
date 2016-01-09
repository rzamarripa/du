 <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            

            
        </tr>
    </thead>
    <tbody>
        <?php $c=0;  foreach ($Requisitos as $requisito) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $requisito->nombre ?></td>
            <td><?= $requisito->descripcion ?></td>
      
        </tr>
        <?php }?>
    </tbody>
</table>

</div>
