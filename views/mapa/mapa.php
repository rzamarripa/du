<script type="text/javascript">
  $(document).ready(function(e) {
  // The following example creates complex markers to indicate beaches near
  // Sydney, NSW, Australia. Note that the anchor is set to
  // (0,32) to correspond to the base of the flagpole.

  function initialize() {
    var mapOptions = {
      zoom: 6,
      center: new google.maps.LatLng(23.4937408,-103.7236681)
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'),
                                  mapOptions);
  
    setMarkers(map, pines);
  }

/**
 * Data for the markers consisting of a name, a LatLng and a zIndex for
 * the order in which these markers should display on top of each
 * other.
 */


  var pines = [<?php 

  foreach($rs as $zona){
    echo "['" . $zona["NOM_ZONA"] . "'," .  $zona["LATITUD"] . "," . $zona["LONGITUD"] . "," . "5" . "],";
  }

  ?>];
  
  //console.log(pines);

/*
  var pines = [
    ['Sucursal 1', 24.805463, -107.402543, 4],
    ['Sucursal 2', 19.373613, -99.043493, 5],
    ['Sucursal 3', 29.197977, -110.852078, 3],
    ['Sucursal 4', 25.515482, -98.173856, 2],
    ['Sucursal 5', 24.571804, -102.382352, 1],
    ['Sucursal 6', 23.805463, -102.402543, 4],
    ['Sucursal 7', 22.373613, -101.043493, 5],
    ['Sucursal 8', 21.597977, -100.852078, 3],
    ['Sucursal 9', 19.215482, -98.173856, 2],
    ['Sucursal 10', 18.571804, -99.382352, 1],
    ['Sucursal 11', 25.805463, 90.402543, 4],
    ['Sucursal 12', 19.373613, -99.043493, 5],
    ['Sucursal 13', 29.197977, -110.852078, 3],
    ['Sucursal 14', 19.215482, -98.173856, 2],
    ['Sucursal 15', 23.571804, -99.382352, 1],
    ['Sucursal 16', 24.805463, -107.402543, 4],
    ['Sucursal 17', 19.373613, -99.043493, 5],
    ['Sucursal 18', 29.197977, -110.852078, 3],
    ['Sucursal 19', 19.215482, -98.173856, 2],
    ['Sucursal 20', 23.571804, -99.382352, 1],
    ['Sucursal 21', 24.805463, -107.402543, 4],
  ];
*/

<?php 
    /*
    $pines = array();
    foreach($rs as $zona){
      $pines[]= [
                  $zona["NOM_ZONA"], 
                  $zona["LATITUD"], 
                  $zona["LONGITUD"]
                ];
    }
    */
?> 

function setMarkers(map, locations) {
  // Add markers to the map

  // Marker sizes are expressed as a Size of X,Y
  // where the origin of the image (0,0) is located
  // in the top left of the image.

  // Origins, anchor positions and coordinates of the marker
  // increase in the X direction to the right and in
  // the Y direction down.
  
  // Shapes define the clickable region of the icon.
  // The type defines an HTML &lt;area&gt; element 'poly' which
  // traces out a polygon as a series of X,Y points. The final
  // coordinate closes the poly by connecting to the first
  // coordinate.
  var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };

  

  <?php for($i = 0; $i < count($rs); $i++){  ?>
    
    //console.log(<?php echo $i ?>);

    <?php 
      if($rs[$i]["META"]!=0){
        $porcentaje = ($rs[$i]["VENTA"] / $rs[$i]["META"]) * 100; 
      }else{
        $porcentaje = 0;
      }
      
      if($porcentaje >= 0 && $porcentaje <= 10.99){
        $imagen = \Yii::$app->request->baseUrl."/images/pinrojo.png";
      }       
      else if($porcentaje >= 11 && $porcentaje <= 20.99){
        $imagen = \Yii::$app->request->baseUrl."/images/pinnaranja.png";
      }       
      else{
        $imagen = \Yii::$app->request->baseUrl."/images/pinverde.png";
      }
    ?>

    var image = {
      url: "<?php echo $imagen; ?>",
      // This marker is 20 pixels wide by 32 pixels tall.
      size: new google.maps.Size(20, 32),
      // The origin for this image is 0,0.
      origin: new google.maps.Point(0,0),
      // The anchor for this image is the base of the flagpole at 0,32.
      anchor: new google.maps.Point(0, 32)
    };
  
  
    var <?php echo "contentString" . $i; ?> = '<?php echo "Meta: $" . number_format($rs[$i]["META"],2) . "<br/>" . "Venta: $" . number_format($rs[$i]["VENTA"],2) . "<br/>" . "Porcentaje: " . number_format($porcentaje,2). "%"; ?>';
    var <?php echo "infowindow" . $i; ?> = new google.maps.InfoWindow({
        content: <?php echo "contentString" . $i; ?>
    });
    
    var beach = locations[<?php echo $i; ?>];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var <?php echo "marker" . $i; ?>  = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,        
        shape: shape,
        title: beach[0],
        zIndex:beach[3]
    });
    
    google.maps.event.addListener(<?php echo "marker" . $i; ?>, 'click', function() {
      <?php echo "infowindow" . $i; ?>.open(map,<?php echo "marker" . $i; ?>);
    });
    
    
  <?php } ?>
  
}

  google.maps.event.addDomListener(window, 'load', initialize);
});
</script>

<div class="row">
  <div class="col-lg-12">
    <div id="map-canvas" style="height:800px; "></div>
  </div>
</div>