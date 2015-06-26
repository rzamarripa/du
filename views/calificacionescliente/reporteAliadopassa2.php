

<?php $c=0;$venta=0;$saldo=0;$utilidadresultante=0;$porcentaje_utilidadresultante=0;$utilidadparacadasocio=0;$crecimientoporcentajeventaperiodoanterior=0;
        $crecimientoporcentajeventaperiodoanteriorporotorgar=0;$ventaperiodoanterior=0 ?>

<h3><?php echo $rs[0]["EMPRESA_NOMBRE"] ?> </h3>
<h3><?php echo $rs[0]["EMPRESA_DOMICILIO"] ?> </h3>
<h3><?php echo $rs[0]["EMPRESA_RFC"] ?> </h3>
<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>
<h5><?php echo $rs[0]["FILTROS_TEXTO"] ?> </h5>
<H5><?php echo "Desde: " . 
        date('d',strtotime($parametros["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha1"]))]) . '-' . date('y',strtotime($parametros["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($parametros["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha2"]))]) . '-' . date('y',strtotime($parametros["fecha2"])) ;  
        ?> </H5>

<button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button> 

<div class="row">
    <div class="col-lg-12">

        <section>

            
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">
            <!--<table class="display nowrap tabla" cellspacing="0" width="100%" style="margin-top: 50px;">-->
                <thead>
                    <tr>
                        <th></th>
                        <th>Cliente</th>
                        <th>Nombre</th>
                        <th style="text-align:right;">Inicio sociedad</th>
                        <th style="text-align:right;">Venta</th>
                        <th style="text-align:right;">Saldo</th>
                        <th>Tipo uti.</th>
                        <th style="text-align:right;">Utilidad</th>
                        <th style="text-align:right;">%</th>
                        <th style="text-align:right;">Utilidad socio</th>
                        <th style="text-align:right;">%</th>           
                        <th style="text-align:right;">Factor riesgo</th>
                        <th style="text-align:right;">%Crec. vta vs año pasado</th>
                    </tr>
                </thead>
                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                        $venta=$venta+$registro["VENTA"];
                        $saldo=$saldo+$registro["SALDO"];
                        $utilidadresultante =$utilidadresultante+$registro["UTILIDAD_RESULTANTE"];

                        if($venta>0){
                            $porcentaje_utilidadresultante=($utilidadresultante/$venta)*100;
                            $porcentaje_utilidadparacadasocio=($utilidadparacadasocio/$venta)*100;
 
                        }else{
                            $porcentaje_utilidadresultante=0;
                            $porcentaje_utilidadparacadasocio=0;
                        }
                        $utilidadparacadasocio =$utilidadparacadasocio+$registro["UTILIDAD_PARA_CADA_SOCIO"];
                        
                        $ventaperiodoanterior=$ventaperiodoanterior+$registro["VENTA_PERIODO_ANTERIOR"];

                        if($utilidadparacadasocio>0){
                            $crecimientoporcentajeventaperiodoanterior=(($venta/$ventaperiodoanterior)-1)*100; 
                        }else{
                            $crecimientoporcentajeventaperiodoanterior=0;
                        }
                    ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["COD_CTE"]; ?></td>
                        <td> <?php echo $registro["NOM_CTE"]; ?></td>
                        <td style="text-align:right"> <?php echo date('d',strtotime($registro["FECHA_INICIO_SOCIEDAD"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($registro["FECHA_INICIO_SOCIEDAD"]))]) . '-' . date('y',strtotime($registro["FECHA_INICIO_SOCIEDAD"])); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["SALDO"],2); ?></td>
                        <td> <?php echo $registro["TIPO_UTILIDAD"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD_RESULTANTE"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["UTILIDAD_RESULTANTE_PORCENTAJE"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD_PARA_CADA_SOCIO"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["UTILIDAD_PARA_CADA_SOCIO_PORCENTAJE"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo number_format($registro["FACTOR_RIESGO"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo number_format($registro["CRECIMIENTO_PORCENTAJE_VENTA_PERIODO_ANTERIOR"],2); ?>%</td>
                    </tr>
                    <?php } ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="font-weight:bold">TOTALES :</td>
                        <td></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($venta,2); ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($saldo,2); ?></td>
                        <td></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($utilidadresultante,2); ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo number_format($porcentaje_utilidadresultante,2) . "%" ; ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($utilidadparacadasocio,2); ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo number_format($porcentaje_utilidadparacadasocio,2) . "%" ; ?></td>
                        <td></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo number_format($crecimientoporcentajeventaperiodoanterior,2) . "%" ; ?></td>
                    </tr>
                </tfoot>
            </table>
        </section>
    </div>
</div>
