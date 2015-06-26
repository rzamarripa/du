<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Utilerias;

?>

<?php 
    //echo '<pre>' ; print_r($parametros) ; echo '</pre>' ;
	//echo '<pre>' ; print_r($rs) ; echo '</pre>' ;
    //exit;
?>

<div class="row">
	<div class="col-lg-12">

		<?php $c = 0; ?>

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>
        <p><?php echo (strlen($parametros["fecha1"]) > 0 ) ? "Desde la fecha: " . $parametros["fecha1"] : "" ; ?> </p>
        <p><?php echo (strlen($parametros["fecha2"]) > 0 ) ? "Hasta la fecha: " . $parametros["fecha2"] : "" ; ?> </p>
        <p> <?php 
                //Si tiene registros que muestre los filtros utilizados
                //echo (count($rs) > 0 ) ?  $rs[0]["FILTROS_TEXTO"] : '' ;
            ?>
        </p>  
        <?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 
            'action'=>['ventas/mejoresclientes']]); ?>
                <fieldset>
                    <div class="col-sm-12 col-md-6 col-lg-3 ">
                        <section>
                            <label class="label">Grupo</label>
                            <label class="input">
                                <select name="parametros[cod_grupo]" id ="grupo_id" style="width:99%" class="select2">
                                    <option></option>
                                </select>
                            </label>
                        </section>
                        <section>
                            <label class="label">Utilidad Máxima (%)</label>
                            <label class="input">
                                <input type="number" name="parametros[utilidad_max]" id ="utilidad_max" style="width:50%" 
                                value="<?php echo $parametros["utilidad_max"]; ?>" >
                            </label>
                        </section>
                    </div>
                        <input id="fecha1" type="hidden" name="parametros[fecha1]" value="<?php echo $parametros['fecha1'] ?>">
                        <input id="fecha2" type="hidden" name="parametros[fecha2]" value="<?php echo $parametros['fecha2'] ?>">
                        <input id="lim_utilidad" type="hidden" name="parametros[lim_utilidad]" value="<?php echo $parametros['lim_utilidad'] ?>">
                        <input id="lim_cantidad" type="hidden" name="parametros[lim_cantidad]" value="<?php echo $parametros['lim_cantidad'] ?>">
                        <input id="lim_preferentes" type="hidden" name="parametros[lim_preferentes]" value="<?php echo $parametros['lim_preferentes'] ?>">
                        <input id="cod_grupo_prod_interes" type="hidden" name="parametros[cod_grupo_prod_interes]" value="<?php echo $parametros['cod_grupo_prod_interes'] ?>">
                        <input id="potencial" type="hidden" name="parametros[potencial]" value="<?php echo $parametros['potencial'] ?>">
                        <input id="descri_heredado" type="hidden" name="parametros[descri_heredado]" value="<?php echo $parametros['descri_heredado'] ?>">
                        <input id="codigoZona" type="hidden" name="parametros[codigoZona]" value="<?php echo $parametros['codigoZona'] ?>">
                        <input id="clasificacion" type="hidden" name="parametros[clasificacion]" value="<?php echo $parametros['clasificacion'] ?>">
                </fieldset>
                <footer>                    
                    <?= Html::submitButton('Imprimir', ['class' => 'btn btn-danger','id' => 'verReporte', 'name' => 'parametros[verReporte]', "formtarget"=>"_blank"]); ?>
                    <?= Html::submitButton('Ver', ['class'=>'btn btn-primary', "formtarget"=>"_blank"]) ?>
                    <!--<button type="button" class="btn btn-default" onclick="window.history.back();">
                        Atrás
                    </button>-->
                </footer>
        <?php ActiveForm::end(); ?>
		<?php 
		
		//if("si"=="no"){ 
		?>
	</div>	
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <!-- <table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">-->
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Cliente</th>
                        <th>Cantidad</th>
                        <th>Utilidad</th>
                        <th>Promedio Utilidad</th>
                        <th>(%) Participación</th>
                    </tr>
                </thead>
                

                <tbody>     
                    <?php 
                        $total_cantidad = 0;
                        $total_utilidad= 0;

                     foreach($rs as $registro){
                        $c++; 

                    ?> 
                    <tr>
                        <td></td> <!--Columna en blanco para el "+"  -->
                        <td> <?php echo $registro["COD_CTE"]; ?></td>
                        <td><?php echo $registro["NOM_CTE"]; ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["CANT"],3); ?></td>
                        <td style="text-align:right"> <?php echo "$ " . number_format($registro["UTILIDAD"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["PROMEDIO_UTILIDAD"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo $registro["PART"]; ?></td>
                    </tr>
                    <?php 

                        $total_cantidad = $total_cantidad + $registro["CANT"];
                        $total_utilidad= $total_utilidad + $registro["UTILIDAD"];

                        } ?>
                                       
                </tbody>

            </table>
            <table class="table table-bordered table-striped tabla2 display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Totales:</th>
                        <th>Cantidad</th>
                        <th>Utilidad</th>
                        <th></th>
                    </tr>
                </thead>
                

                <tbody>     
                    <tr>
                        <td></td> <!--Columna en blanco para el "+"  -->
                        <td></td>
                        <td></td>
                        <td style="text-align:right;font-weight:bold;"> <?php echo number_format($total_cantidad,3); ?></td>
                        <td style="text-align:right;font-weight:bold;"> <?php echo "$ " . number_format($total_utilidad,2); ?></td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
        </section>
    </div>
</div>
<script>

     $(document).ready(function(){  

        cargargrupos();
      
     });
    

    function cargargrupos(){
         $.ajax({
           url: "<?php echo Yii::$app->urlManager->createUrl('utilerias/getgrupostodos');?>", 
           success: function(result){
            $("#grupo_id").html(result);
            $("#grupo_id").select2("val","<?php echo $parametros['cod_grupo'] ?>");
           },
           error: function(xhr){
              alert("Ups: " + xhr.status + " " + xhr.statusText);
            }
        });
    } 

    

</script>