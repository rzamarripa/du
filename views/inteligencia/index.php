<?php 
	use app\models\MENUUSUARIOS;
	use yii\helpers\Html;
?>
<?php
  $menus = MENUUSUARIOS::find()->where("cod_usu='1' and IDPADRE IS NULL")->orderBy("IDLLAVE")->all();							        
  foreach($menus as $menu){ 
		
	if($menu->DESCRI == "VENTAS"){

		echo Html::a($menu->DESCRI,array("ventas/submenu", "id"=>$menu->IDLLAVE),array("class"=>"btn btn-block btn-primary"));	
  	}
	else{
		echo Html::a($menu->DESCRI,array("calificacionescliente/submenu", "id"=>$menu->IDLLAVE),array("class"=>"btn btn-block btn-primary"));	
	}	
	} 
?>




<?php /*
	
	$subMenus = MENUUSUARIOS::find(["IDPADRE" => $menu->IDLLAVE, "COD_USU"=>1])->all(); ?>
			<li><a href="ajax/dashboard.html" title="<?= $menu->DESCRI; ?>"><span class="menu-item-parent"><?= $menu->DESCRI; ?></span></a>
			
			<?php if(count($subMenus)>0){ ?>
					<ul role="group">
						<?php foreach($subMenus as $subMenu){	?>
						<li class="parent_li" role="treeitem" style="display: list-item;">
							<a href="">
								<span title="{{$subMenu->DESCRI}}"><i class="fa fa-lg fa-plus-circle"></i> <?= $subMenu->DESCRI; ?></span>										
							</a>
						</li>
						<?php } ?>
					</ul>
			<?php } ?>		
			
			</li>
	*/
?>