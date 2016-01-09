   <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
         
            
        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($tiposAtributo as $tA) {$c++;?> 
        <tr>
          <td class='col-sm-1'><?= $c?></td> 
            <td><?= $tA->nombre ?></td>
          


        </tr>
        <?php }?>
    </tbody>
</table>
