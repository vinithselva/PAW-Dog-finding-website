<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->

</head>
<body>
  <div id="map" style="width: 100%; height: 800px; background: grey" />

  <header class="py-4">
  	<div class="container">
  			<div id="logo">
  				<h1> <a href="index.html"><span class="fa fa-paw" aria-hidden="true"></span><font color="#FF00FF"> Paw</font></a></h1>
  			</div>
  		<!-- nav -->
  		<nav class="d-lg-flex">

  			<label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
  			<input type="checkbox" id="drop" />
  			<ul class="menu mt-2 ml-auto">
  				<li class=""><a href="index.html">Home</a></li>
  				<li class=""><a href="#about">About</a></li>
  				<li class="">
  				<!-- First Tier Drop Down
  				<label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
  				<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
  				<input type="checkbox" id="drop-2"/>
  				<ul class="inner-ul">
  					<li><a href="#process">Marketing Process</a></li>
  					<li><a href="#portfolio">Portfolio</a></li>
  				<li><a href="#partners">Partners</a></li>
  				</ul>
  				</li>-->
  				<li class=""><a href="team.html">Breeds</a></li>

  			</ul>
  			<div class="login-icon ml-lg-2">
  				<a class="user" href="#popup3"> Contact Us</a>
  			</div>
  		</nav>
  		<div class="clear"></div>
  		<!-- //nav -->
  	</div>
  </header>
  <div id="popup3" class="popup-effect">
  	<div class="popup">
  		<div class="login px-sm-4 mx-auto mw-100">
  			<h5 class="text-center mb-4">Anytime for You</h5>
  			<form action="#" method="post">
  				<div class="form-group">
  					<label class="mb-2">Email address</label>
            <h3> paw@corporate.net </h3>
            </div>
  				<div class="form-group">
  					<label class="mb-2">Mobile No</label>
            <h3> 856494949 </h3>
            </div>

  				<p class="text-center mt-2">

  				</p>
  			</form>
  		</div>

  		<a class="close" href="#">&times;</a>
  	</div>
  </div>
  <script  type="text/javascript" charset="UTF-8" >

/**
 * Creates a new marker and adds it to a group
 * @param {H.map.Group} group       The group holding the new marker
 * @param {H.geo.Point} coordinate  The location of the marker
 * @param {String} html             Data associated with the marker
 */
function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

/**
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addInfoBubble(map) {
  var group = new H.map.Group();

  map.addObject(group);

  // add 'tap' event listener, that opens info bubble, to the group
  group.addEventListener('tap', function (evt) {
    // event target is the marker itself, group is a parent event target
    // for all objects that it contains
    var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
      // read custom data
      content: evt.target.getData()
    });
    // show info bubble
    ui.addBubble(bubble);
  }, false);

  addMarkerToGroup(group, {lat:9.9252, lng:78.1198},
    '<div><a href=\'http://www.mcfc.co.uk\' >Madurai City</a>' +
    '</div><div >Labradour <br> Color : BLack </div>');

  addMarkerToGroup(group, {lat:13.0827, lng:80.2707},
    '<div ><a href=\'http://www.liverpoolfc.tv\' >Chennai</a>' +
    '</div><div >German Shepard <br>Color : Brown</div>');

    addMarkerToGroup(group, {lat:9.4653, lng:77.5275},
      '<div ><a href=\'http://www.liverpoolfc.tv\' >Rajapalayam</a>' +
      '</div><div >Retriver <br>Color : Gold</div>');

}



/**
 * Boilerplate map initialization code starts below:
 */

// initialize communication with the platform
var platform = new H.service.Platform({
  app_id: 'lgrF7Qds7kwQPD3xbXcv',
  app_code: 'fj9ATQbVwUzlcbx_csaVKg',
  useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map,{
  center: {lat: 11.1271, lng:78.6569 },
  zoom: 7,
  pixelRatio: pixelRatio
});

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);
  </script>
</body>
</html>
