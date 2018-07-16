<?php include_once('header.php'); ?>
<div class="space-between"></div>
<div class="hero-body">
    <div class="container has-text-centered">
        <div class="columns is-vcentered">
            <div class="column is-5">
              <h1 class="title is-2">
                  Notaría 49
              </h1>
              <h2 class="subtitle is-4">
                  Let this cover page describe a product or service.
              </h2>
              <p class="about-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            <div class="column is-6 is-offset-1">
              <div id="map">

              </div>
            <!--  <figure class="image is-4by3">
                  <img src="https://picsum.photos/800/600/?random" width="215px" height="100px" alt="Description">
              </figure> -->
            </div>
        </div>
    </div>
</div>
<div class="space-between"></div>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2oo9FlQc9hlaTpeZZmDuq_8wrN3t0&callback=initMap">
</script>
<script type="text/javascript">
  // Initialize and add the map
  function initMap() {
  // The location of Uluru
  var uluru = {lat: 19.381983, lng: -99.175482};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
  }
</script>
<?php include_once('footer.php'); ?>
