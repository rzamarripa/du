<?php $c = 0; ?>
<!--<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>-->

<div class="row">
    <div class="col-lg-12">

        <!--<pre><?php print_r($parametros) ?></pre> -->

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>
        <p><?php echo (!empty($parametros["codigoGrupo"])) ? "Grupo: " . $parametros["codigoGrupo"] . " " . $parametros["nomGrupo"] : '' ;  ?> </p>
        <p><?php echo (!empty($parametros["codigoZona"])) ? "Zona: " . $parametros["codigoZona"] . " " . $parametros["nomZona"] : '' ;  ?> </p>
        <p><?php echo "Desde: " . 
        date('d',strtotime($parametros["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha1"]))]) . '-' . date('y',strtotime($parametros["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($parametros["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha2"]))]) . '-' . date('y',strtotime($parametros["fecha2"])) ;  
        ?> </p>  

        <button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <!-- <table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">-->
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">Semana</th>                        
                        <th colspan="2" class="text-center">Avance</th>
                        <th colspan="3"></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>#Semana</th>
                        <th>Fecha1</th>
                        <th>Fecha2</th>
                        <th>Meta</th>
                        <th>Meta</th>
                        <th>Venta</th>
                        <th>%Crec</th>
                        <th>Meta ajustada</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th></th>
                        <th>#Semana</th>
                        <th>Fecha1</th>
                        <th>Fecha2</th>
                        <th>Meta</th>
                        <th>Meta</th>
                        <th>Venta</th>
                        <th>%Crec</th>
                        <th>Meta ajustada</th>
                    </tr>
                </tfoot>

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["ID_SEMANA"]; ?></td>
                        <td style="text-align:right"> <?php echo date('d',strtotime($registro["FECHA1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($registro["FECHA1"]))]) . '-' . date('y',strtotime($registro["FECHA1"])); ?></td>
                        <td style="text-align:right"> <?php echo date('d',strtotime($registro["FECHA2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($registro["FECHA2"]))]) . '-' . date('y',strtotime($registro["FECHA2"])); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_DIARIA"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_ACTUAL"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],2); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"],2); ?>%</td>
                        <!--<td style="text-align:right" class=<?php echo ($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"])<0 ? "text-warning" : "text-info" ?>> <?php echo number_format($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"],2); ?>%</td>-->
                        <!--<td style="text-align:right"> <font color="blue"> <?php echo number_format($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"],2); ?></font>%</td>-->
                        <!--<td style="text-align:right"> 
                            <font color=<?php echo ($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"])<0 ? "red" : "blue" ?>> <?php echo number_format($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"],2); ?>
                            </font>%</td>-->
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_AJUSTADA"],2); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

