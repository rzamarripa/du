<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
?>

<div class="col-sm-2">
    <input id="folio" class='form-control'  type="text">         
</div>
<button class="btn btn-primary" onclick="buscar()">Buscar</button>

<div id="registros">

</div>

<script type="text/javascript">
  function buscar() {
    $.ajax({
      type: 'POST',
       url: 'imagenes/buscar',
       data: {folio: $('#folio').val()},
       success: function(data){
        $('#registros').html(data);
       },
    });
};
</script>