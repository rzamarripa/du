<script type="text/javascript">
	var map;
	function initialize() {
	  var mapOptions = {
	    zoom: 8,
	    center: new google.maps.LatLng(-34.397, 150.644)
	  };
	  map = new google.maps.Map(document.getElementById('map-canvas'),
	      mapOptions);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="row">
<div class="col-lg-12">
<div id="map-canvas" style="height:800px; width: 100%;"></div>
</div>
</div>