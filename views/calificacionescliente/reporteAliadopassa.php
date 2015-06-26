

<?php $c=0;$venta=0;$saldo=0;$recuperacion=0;$porcentaje_recuperacion=0;$utilidadparacadasocio=0;$descuentos=0;$descuentosporotorgar=0; ?>

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

            <table class="display nowrap tabla" cellspacing="0" width="100%" style="margin-top: 50px;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Cliente</th>
                        <th>Nombre</th>
                        <th style="text-align:right;">Dias cartera</th>
                        <th style="text-align:right;">Venta</th>
                        <th style="text-align:right;">Saldo</th>
                        <th style="text-align:right;">Recuperación</th>
                        <th style="text-align:right;">%</th>
                        <th>Tipo uti.</th>
                        <th style="text-align:right;">Utilidad socio</th>
                        <th style="text-align:right;">Desc. otorgados</th>
                        <th style="text-align:right;">Desc. por otorgar</th>
                        <th style="text-align:right;">Factor riesgo</th>
                    </tr>
                </thead>
                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                        $venta=$venta+$registro["VENTA"];
                        $saldo=$saldo+$registro["SALDO"];
                        $recuperacion =$recuperacion+$registro["RECUPERACION"];
                        if($venta>0){
                            $porcentaje_recuperacion=($recuperacion/$venta)*100;
                        }else{
                            $porcentaje_recuperacion=0;
                        }
                        $utilidadparacadasocio =$utilidadparacadasocio+$registro["UTILIDAD_PARA_CADA_SOCIO"];
                        $descuentos =$descuentos+$registro["DESCUENTOS"];
                        $descuentosporotorgar =$descuentosporotorgar+$registro["DESCUENTOS_POR_OTORGAR"];
                    ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["COD_CTE"]; ?></td>
                        <td> <?php echo $registro["NOM_CTE"]; ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["DIAS_CARTERA"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["SALDO"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["RECUPERACION_PORCENTAJE"],2); ?>%</td>
                        <td> <?php echo $registro["TIPO_UTILIDAD"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD_PARA_CADA_SOCIO"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["DESCUENTOS"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["DESCUENTOS_POR_OTORGAR"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["FACTOR_RIESGO"],2); ?>%</td>
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
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($recuperacion,2); ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo number_format($porcentaje_recuperacion,2) . "%" ; ?></td>
                        <td></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($utilidadparacadasocio,2); ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($descuentos,2); ?></td>
                        <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($descuentosporotorgar,2); ?></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

        </section>
    </div>
</div>
