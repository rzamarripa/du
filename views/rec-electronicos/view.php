  
    <?= $RecElectronicos->empresas->nombre; ?>
    <?= $RecElectronicos->fecha_ft; ?>
    <?= $RecElectronicos->observaciones; ?>
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


