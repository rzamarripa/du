<?php 
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use yii\helpers\ArrayHelper;
	use app\models\TipoTramitesRoles;
	use app\models\PermisosPasoTramite;
?>

<h1>Rol: <?= $tipoTramite->nombre ?></h1>
<?php $form = ActiveForm::begin();?>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php $c = 1; $check = 0; foreach ($roles as $rol) { ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading<?php echo $c; ?>">
      
	<table class="table table-condensed">
		<thead>
		<h4 class="panel-title">
			<tr>
				<th><a class="if($c == 1){}else{echo 'collapsed'; ?>" role="button" data-toggle="collapse" href="#collapse<?php echo $c; ?>" aria-expanded="true" aria-controls="collapse<?php echo $c; ?>"><i class="fa fa-plus btn btn-primary"></i></a></th>
				<th>Leer</th>
				<th>Crear</th>
				<th>Actualizar</th>
				<th>Borrar</th>
			</tr>
    	</h4>
    	</thead>
		  	<tbody>	
			  	<div class="row">
				  	<tr>
				  	<?php 
				  	if(TipoTramitesRoles::find()->where('tipoTramiteId = :tipoTramiteId and roleId = :rolid',['rolid'=>$rol->id,'tipoTramiteId'=>$tipoTramite->id])->exists()){
				  		$ttr = TipoTramitesRoles::find()->where('tipoTramiteId = :tipoTramiteId and roleId = :rolid',['rolid'=>$rol->id,'tipoTramiteId'=>$tipoTramite->id])->one();?>
				  		<input type="hidden" name="permisos[<?php echo $c; ?>][id]" value="<?php echo $ttr->id ?>">
				  		<?php }else{
				  			$ttr = new TipoTramitesRoles;
				  		} ?>
				  	<td class="col-lg-3"><?= $rol->nombre ?></td>
				  	<input type="hidden" name="permisos[<?php echo $c; ?>][tipoTramiteId]" value="<?php echo $tipoTramite->id ?>">
				  	<input type="hidden" name="permisos[<?php echo $c; ?>][rolid]" value="<?php echo $rol->id ?>">
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][leer]"<?php if($ttr->leer == true)echo 'checked';?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][crear]"<?php if($ttr->crear == true)echo 'checked';?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][actualizar]"<?php if($ttr->actualizar == true)echo 'checked';?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][borrar]"<?php if($ttr->borrar == true)echo 'checked';?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
				  	</tr>
			  	</div>
		  	</tbody>
		  </table>		       
    </div>
    <div id="collapse<?php echo $c; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $c; ?>">
      <div class="panel-body">
      	<div class="cb-styles">
      	<table class="table table-condensed">
      		<tbody>
      			<div class="row">
		        <?php $x = 1; foreach ($pasosTramite as $pt) {if($pt->tipoTramiteId == $tipoTramite->id){
		        	if(PermisosPasoTramite::find()->where('tipoTramiteRoleId = :ttrid and pasoTramiteId = :ptid',['ttrid'=>$ttr->id,'ptid'=>$pt->id])->exists()){
				  	$ppt = PermisosPasoTramite::find()->where('tipoTramiteRoleId = :ttrid and pasoTramiteId = :ptid',['ttrid'=>$ttr->id,'ptid'=>$pt->id])->one();?>
		      		<input type="hidden" name="permisos[<?php echo $c; ?>][ppt][<?php echo $x; ?>][id]" value="<?php echo $ppt->id ?>">
				<?php }else{
					$ppt = new PermisosPasoTramite;
				 }?>
		  		<tr>
      				<td class="col-lg-3"><?= $pt->nombre?></td>
      				<td class="col-lg-2">
      					<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][ppt][<?php echo $x; ?>][leer]" <?php if($ppt->leer == true)echo 'checked'; ?>>
      					<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
      				</td>
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][ppt][<?php echo $x; ?>][crear]"<?php if($ppt->crear == true)echo 'checked'; ?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][ppt][<?php echo $x; ?>][actualizar]"<?php if($ppt->actualizar == true)echo 'checked'; ?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
				  	<td class="col-lg-2">
				  		<input type="checkbox" id="<?php $check++; echo $check;?>" class="css-checkbox lrg vlad" name="permisos[<?php echo $c; ?>][ppt][<?php echo $x; ?>][borrar]"<?php if($ppt->borrar == true)echo 'checked'; ?>>
				  		<label for="<?php echo $check;?>" name="<?php echo $check;?>_lbl" class="css-label lrg vlad"></label>
				  	</td>
		    	</tr>
		  		<input type="hidden" name="permisos[<?php echo $c; ?>][ppt][<?php echo $x; ?>][ptid]" value="<?php echo $pt->id ?>">
		        <?php $x++; }} ?>
		    	</div>
	    	</tbody>
    	</table>
    </div>
      </div>
    </div>
  </div>

<?php $c++;}?>
</div>
<div class="form-group">
    <?= Html::submitButton('Guardar', ['class' => $rol->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
