   <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Empresa</th>
            <th>Escuela</th>
            <th>fecha</th>
            <th>Observaciones</th>

        
        
    </thead>
    <tbody>
        <?php $c=0; foreach ($RecElectronicos as $elec) {$c++;?>
        <tr>   
            <td class='col-sm-1'><?= $c?></td>
            <td><?php if(isset($elec->empresas->nombre)) echo $elec->empresas->nombre ?></td>
            <td><?php if(isset($elec->escuelas->nombre)) echo $elec->escuelas->nombre ?></td> 
            <td><?= $elec->fecha_ft ?></td>
            <td><?= $elec->observaciones ?></td>
           
        </tr>
        <?php }?>
    </tbody>
</table>