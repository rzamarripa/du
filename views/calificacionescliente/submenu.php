<?php 
	use app\models\MENUUSUARIOS;
	use yii\helpers\Html;
	
  $subMenus = MENUUSUARIOS::find()->select("DESCRI, IDLLAVE")->distinct()->where(["IDPADRE" => $_GET["id"], "COD_USU"=>"1"])->all();
  foreach($subMenus as $subMenu){ 
  	
	echo Html::a($subMenu->DESCRI,array("calificacionescliente/verformulario", "id"=>$subMenu->IDLLAVE),array("class"=>"btn btn-block btn-primary"));
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