

<?php $c = 0; ?>
<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>

<button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button> 

<div class="row">
    <div class="col-lg-12">

        <section>

            <table class="display nowrap tabla" cellspacing="0" width="100%" style="margin-top: 50px;">
                <thead>
                    <tr>
                        <th></th>
                        <th>Sucursal</th>
                        <th>Totales</th>
                        <th>Menos de 200 días</th>
                        <th>Mas de 200 superp</th>
                        <th>Califican</th>
                        <th>Util bruta</th>
                        <th>Util oper</th>
                        <th>Deuda</th>
                        <th>Factor riesgo</th>
                        <th>Total</th>
                        <th>Alcanzado</th>
                        <th>Restante</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th></th>
                        <th>Sucursal</th>
                        <th>Totales</th>
                        <th>Menos de 200 días</th>
                        <th>Mas de 200 superp</th>
                        <th>Califican</th>
                        <th>Util bruta</th>
                        <th>Util oper</th>
                        <th>Deuda</th>
                        <th>Factor riesgo</th>
                        <th>Total</th>
                        <th>Alcanzado</th>
                        <th>Restante</th>
                    </tr>
                </tfoot>

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["NOM_PLAZA"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION_MENOS_200_DIAS"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION_MAS_200_DIAS_SUPERPREFERENTES"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION_200_DIAS"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["UTILIDAD_BRUTA_PORCENTAJE"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo number_format($registro["UTILIDAD_OPERACION_PORCENTAJE"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["SALDO"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["FACTOR_RIESGO_PORCENTAJE"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["FACTOR_INGRESOS_NEW_VERSION_TOTAL"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["FACTOR_INGRESOS_NEW_VERSION_ALCANZADO"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["FACTOR_INGRESOS_NEW_VERSION_RESTANTE"],2); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>

        </section>
    </div>
</div>
