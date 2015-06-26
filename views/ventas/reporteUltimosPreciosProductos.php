<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Utilerias;

?>

<div class="row">
    <div class="col-lg-12">

        <?php $c = 0; ?>

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>
        <p> <?php 
                //Si tiene registros que muestre los filtros utilizados
                echo (count($rs) > 0 ) ?  $rs[0]["FILTROS_TEXTO"] : '' ; 
            ?>
        </p>  

        <?php 
        
        //if("si"=="no"){ 
        if(!isset($parametros["verReporte"])){
            $parametros["verReporte"] = true;
            echo Html::a('Versión para Imprimir', ['ventas/ventasconsaldo', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
        } 
        ?>
    </div>  
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Ultimo precio</th>
                    </tr>
                </thead>               

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $registro["CODIGO"]; ?></td>
                        <td><?php echo $registro["DESCRIPCION"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["ULTIMO_PRECIO"],3); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

