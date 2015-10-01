

   <table id="datatable" class="table table-striped table-bordered" >
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
           
          
        
        
    </thead>
    <tbody>
        <?php $c=0; foreach ($Departamentos as $departamento) {$c++;?> 
        <tr>   
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $departamento->nombre ?></td>
            

               
        
       </tr>
        <?php }?>
    </tbody>
</table>
