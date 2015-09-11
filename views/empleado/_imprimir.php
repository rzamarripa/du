<table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Celular</th>
            <th>Puesto</th>
            <th>Direccion</th>   
            <th>Estatus</th>
            <th>Departamento</th>  
            
        </tr>
    </thead>
    <tbody>
        <?php $c=0; foreach ($empleados as $empleado) {$c++;?> 
        <tr>
            <td class='col-sm-1'><?= $c?></td> 
            <td><?= $empleado->nombre ?></td>
            <td><?= $empleado->apellidos ?></td>
            <td><?= $empleado->celular ?></td>
            <td><?= $empleado->puesto ?></td>
            <td><?= $empleado->direccion ?></td>


    



            <td><span class="label label-<?php if($empleado->estatus_did == 1)echo 'success';if($empleado->estatus_did == 2)echo 'danger'; ?>">
                <?= $empleado->nombre ?></span></td>
                 <td><?= $empleado->departamento->nombre ?></td>
            
        </tr>
        <?php }?>
    </tbody>
</table>