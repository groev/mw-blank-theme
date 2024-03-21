<script src="https://api.mapbox.com/mapbox-gl-js/v3.1.2/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v3.1.2/mapbox-gl.css" rel="stylesheet">

<div class='map' id="map"></div>

 <script>
     mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JvZXYiLCJhIjoiY2xzcnN2OXBnMGlkNzJscWsybmI3aThrbSJ9.vgqJd7lom9dvlxAQ5XPwVA';
 const map = new mapboxgl.Map({
 container: 'map',
 // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
 style: 'mapbox://styles/mapbox/streets-v12',
 center: [7.009420, 51.248994],
 zoom:13,

 });
  

  
 // Create a default Marker, colored black, rotated 45 degrees.
 const marker2 = new mapboxgl.Marker({ color: 'black' })
 .setLngLat([7.009420, 51.248994])
 .addTo(map);
 </script>

