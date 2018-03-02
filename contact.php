<?php
  require_once('action/ContactAction.php');
  $action = new ContactAction();
  $action->execute();
  $page = $action->getTranslator();
  require_once('partial/header.php');
?>
<script>
  function initialize() {
    var map_canvas = document.getElementById('map_canvas');
    var myLatlng = new google.maps.LatLng(50.0802004,14.4248994);
    var map_options = {
      center: new google.maps.LatLng(50.0802004,14.4248994),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(map_canvas, map_options);

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'V jámě 699/5, Nové Město, 110 00 Praha 1'
  	});
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="contact-page">
  <h4><?php echo $page->read('contact', 'par1'); ?></h4>
  <p><?php echo $page->read('contact', 'par2'); ?></p>
	<div id="map_canvas"></div>
</div>
<?php
    require_once('partial/footer.php');
