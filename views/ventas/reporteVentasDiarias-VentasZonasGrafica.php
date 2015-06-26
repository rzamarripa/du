<?php //echo "<pre>"; print_r($rs); echo "</pre>"; exit; ?>


<div id="grafica" style="height:800px"></div>

<script type="text/javascript">

function format2(valor, currency,decimales) {
    return currency + " " + valor.toFixed(decimales).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
}

$(function () {
    $('#grafica').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: <?php echo "'" . $nombreReporte . "'" ; ?>
        },
        /*subtitle: {
            text: 'Source: WorldClimate.com'
        },*/
        xAxis: {
            categories: [
                <?php foreach ($rs as $renglon) {
                    echo "'" . $renglon["NOM_ZONA"] . "'," ;
                }
                ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        /*tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>$ {point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },*/
        tooltip: {
                        
            formatter: function() {
                //return 'The value for <b>' + this.x + '</b> is <b>' + format2(this.y,'$',2) + '</b>, in series '+ this.series.name;
                return '<span style="font-size:10px">' + this.key + '</span><br/><table><tr><td style="color:black;padding:0">' + this.series.name + ': </td><td style="padding:0"><b>' + format2(this.y,'$',2) + '</b></td></tr></table>'
            },

        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Meta',
            //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
            data: [ 
                <?php foreach ($rs as $renglon) {
                    echo $renglon["META"] . "," ;
                }
                ?>
             ]

        }, {
            name: 'Venta',
            //data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
            data: [ 
                <?php foreach ($rs as $renglon) {
                    echo $renglon["VENTA"] . "," ;
                }
                ?>
             ]
        }]
    });
});

</script>