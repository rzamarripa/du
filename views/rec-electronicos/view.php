  <table id="datatable" class="table table-striped table-bordered">
  	<thead>
        <tr>
            <th>No.</th>
            <th>Empresa</th>
            <th>Escuela</th>
            <th>fecha</th>
            <th>Observaciones</th>
            <th>Estatus</th>
		</thead>
    <tbody>
        <?php $c=0; foreach ($RecElectronicos as $elec) {$c++;?>
        <tr>   
            <td class='col-sm-1'><?= $c?></td>
            <td><?php if(isset($elec->empresas->nombre)) echo $elec->empresas->nombre ?></td>
            <td><?php if(isset($elec->escuelas->nombre)) echo $elec->escuelas->nombre ?></td> 
            <td><?= $elec->fecha_ft ?></td>
            <td><?= $elec->observaciones ?></td>
             <td>
           <span class="label label-<?php if($elec->estatus_did == 1)echo 'warning';if($elec->estatus_did == 3)echo 'success';if($elec->estatus_did == 4)echo 'danger'; ?>">
              <?= $elec->estatus->proyecto ?></span>
            
        </tr>
        <?php }?>
    </tbody>
	</table>
</div>
<script>
    $("input[name=tipo]").click(function(){
    if(this.value=="escuela"){
        $("#escuela").prop('disabled', false);
        $("#empresa").prop('disabled', true);
    }else{
        $("#escuela").prop('disabled', true);
        $("#empresa").prop('disabled', false);
        
    }
});

    
    </script>


