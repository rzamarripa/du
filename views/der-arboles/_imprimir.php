<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Entre calles</th>
            <th>colonia</th>
            <th>Tipo de arbol</th>
            <th>Ubicacion</th>
            <th>Motivos</th>
            <th>Observaciones</th>
            <th>Estatus</th>
          
        
    </thead>
    <tbody>
        <?php $c=0; foreach ($DerArboles as $arboles) {$c++;?> 
        <tr>   
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $arboles->nombre ?></td>
            <td><?= $arboles->calle ?></td>
            <td><?= $arboles->entre_calles ?></td>
            <td><?= $arboles->tipo_de_arbol ?></td>
            <td><?= $arboles->ubicacion ?></td>
            <td><?= $arboles->motivos ?></td>
            <td><?= $arboles->observaciones ?></td>
            <td><span class="label label-<?php if($arboles->estatus_did == 1)echo 'warning';if($arboles->estatus_did == 3)echo 'success';if($arboles->estatus_did == 4)echo 'danger'; ?>">
               <?= $arboles->estatus->proyecto ?></span> 
            </td>
              
        
        </tr>
        <?php }?>
    </tbody>
</table>