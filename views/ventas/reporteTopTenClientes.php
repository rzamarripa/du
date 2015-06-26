<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 
    $c = 0;

    //echo '<pre>' ; print_r($parametros) ; echo '</pre>' ;
    //exit;
    //echo '<pre>' ; print_r($rs) ; echo '</pre>' ;

    $total_cantidad = 0;$total_venta = 0;$total_utilidad = 0;$total_p_utilidad = 0;
?>

<div class="row">
    <div class="col-lg-12">

        <!--<pre><?php print_r($parametros) ?></pre>-->

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>

        <p>
            <?php 
                /*
                echo (1 == 1) ? 'uno' : 'seis' ; 
                echo ' xxx' ;
                */
                $descri_filtros_porcentaje = '' ;

                //echo '<pre>' ; echo $parametros["filtrarporporcentajeutlidad"] ; echo '</pre>' ;
                if (isset($parametros["filtrarporporcentajeutlidad"]) && isset($parametros["min"])){
                    switch ($parametros["min"]) {
                       case 'NO':
                           $descri_filtros_porcentaje = 'Porcentaje de utilidad mínimo : ' ;
                           break;

                       case 'SI':
                           $descri_filtros_porcentaje = 'Porcentaje de utilidad máximo : ' ;
                           break;

                       case 'E':
                           $descri_filtros_porcentaje = 'Exacto : ' ;
                           break;
                   }
                   switch ($parametros["filtrarValor"]) {
                       case 'CATEGORIA':
                           $descri_filtros_porcentaje = $descri_filtros_porcentaje . $parametros["categoria"] ;
                           break;                
                       case 'PORCENTAJE':
                           $descri_filtros_porcentaje = $descri_filtros_porcentaje . $parametros["porcentaje"] ;
                           break;
                   }
                }

                //echo $parametros["min"];
                //echo $descri_filtros_porcentaje ;
                //exit;

                echo (!empty($parametros["cod_cte"])) ? "Cliente: " . $parametros["cod_cte"] . " " . $parametros["nomCliente"] . " ; " : '' ;
                echo (!empty($parametros["cod_agricola"])) ? "Agricola: " . $parametros["cod_agricola"] . " " . $parametros["nomAgricola"] . " ; " : '' ;
                echo (!empty($parametros["cod_zona"])) ? "Zona: " . $parametros["cod_zona"] . " " . $parametros["nomZona"] . " ; " : '' ;
                echo (!empty($parametros["cod_grupo"])) ? "Grupo: " . $parametros["cod_grupo"] . " " . $parametros["nomGrupo"] . " ; " : '' ;
                echo (!empty($parametros["cod_grupo_prod_interes"])) ? "Grupo productos: " . $parametros["cod_grupo_prod_interes"] . " " . $parametros["nomGrupoProductos"] . " ; " : '' ;
                echo (!empty($parametros["descri"])) ? "Productos que empiecen con: " . $parametros["descri"] . " ; " : '' ;
                echo $descri_filtros_porcentaje ;
            ?>
        </p>

        <p><?php echo "Desde: " . 
        date('d',strtotime($parametros["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha1"]))]) . '-' . date('y',strtotime($parametros["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($parametros["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha2"]))]) . '-' . date('y',strtotime($parametros["fecha2"])) ;  
        ?> </p>          

        <!--<button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button>-->

        <?php 
            if(!isset($parametros["verReporte"])){
                $parametros["verReporte"] = true;
                echo Html::a('Versión para Imprimir', ['ventas/toptenclientes', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
            } 
        ?>

    </div> 
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <!-- <table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">-->
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <!--
                    <tr>
                        <th colspan="1" class="text-center"> </th>
                        <th colspan="3" class="text-center">Venta</th>                        
                        <th colspan="3" class="text-center">Meta</th>
                        <th colspan="3" class="text-center">Histórico año anterior</th>
                        <th colspan="1"></th>
                    </tr>
                    -->
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Zona</th>
                        <th>#Prods</th>
                        <th>Cantidad</th>
                        <th>Venta</th>
                        <th>Utilidad</th>
                        <th>%Uti</th>
                        <th>%Part</th>
                        <th>%Acum</th>
                    </tr>
                </thead>
                

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 

                        //$total_cantidad = 0;$total_venta = 0;$total_utilidad = 0;$total_p_utilidad = 0;

                        $total_cantidad = $total_cantidad + $registro["CANTIDAD"];
                        $total_venta = $total_venta + $registro["VENTA"];
                        $total_utilidad = $total_utilidad + $registro["UTILIDAD"];
                    ?>
                    <tr>
                        <td></td>
                        <td style="text-align:right"> <?php echo number_format($registro["IDTRANS"],0); ?></td>
                        <td> <?= Html::a(substr($registro["NOM_CTE"],0,50), ['ventas/toptenproductos', 'id' => $registro["COD_CTE"], "param" => serialize($parametros)],['target' => '_blank']) ?></td>
                        <td> <?php echo $registro["COD_ZONA"]; ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["NUMERO_PRODUCTOS"],0); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["CANTIDAD"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD"],0); ?></td>
                        <td style="text-align:right"> <?php echo $registro["UTILIDAD_PORCENTAJE"]; ?></td>
                        <td style="text-align:right"> <?php echo $registro["PARTICIPACION_UTILIDAD"]; ?></td>
                        <td style="text-align:right"> <?php echo $registro["ACUMULADO_UTILIDAD"]; ?></td>                       
                    </tr>
                    <?php } ?>
                                       
                </tbody>

            </table>
        </section>
    </div>
</div>


<?php
    $total_p_utilidad = ($total_venta > 0) ? (($total_utilidad/$total_venta)*100) : 0 ;
?>

<!--TOTALES-->
<div>
    <table class="table table-bordered table-striped tabla2 display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Cantidad</th>
                <th>Venta</th>
                <th>Utilidad</th>
                <th>%Uti</th>
            </tr>
        </thead> 
        <tbody>
             <tr>
                <td></td>
                <td style="font-weight:bold">Totales</td>
                <td style="font-weight:bold ; text-align:right"> <?php echo number_format($total_cantidad,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta,0); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_utilidad,0); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo number_format($total_p_utilidad,2); ?>%</td>
            </tr>            
        </tbody>               
    </table>
</div>

