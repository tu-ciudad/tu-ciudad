 <style>
#map-canvas {
  margin: 0;
  padding: 0;
  height: 81vh;
  /width: 80%;
}
#map-canvas img {
  max-width: none !important;
}
.gm-style-iw {
  width: 350px !important;
  top: 15px !important;
  left: 0px !important;
  background-color: #fff;
  box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
  border: 1px solid rgba(83, 131, 211, 0.6);
  /border-radius: 2px 2px 10px 10px;
}

#iw-container {
  margin-bottom: 10px;
}
#iw-container .iw-title {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 22px;
  font-weight: 400;
  padding: 10px;
  background-color: rgb(83, 131, 211);
  color: white;
  margin: 0;
  /border-radius: 2px 2px 0 0;
  width: 350px;
}
#iw-container .iw-content {
  font-size: 13px;
  line-height: 18px;
  font-weight: 400;
  margin-right: 1px;
  /padding: 15px 5px 20px 15px;
  max-height: 140px;
  overflow-y: auto;
  overflow-x: hidden;
}
.iw-content img {
  float: right;
  margin: 0 5px 5px 10px; 
}
.iw-subTitle {
  font-size: 16px;
  font-weight: 700;
  padding: 5px 0;
}
.iw-bottom-gradient {
  position: absolute;
  width: 326px;
  height: 25px;
  bottom: 10px;
  right: 18px;
  
}

</style>
<div id="map-canvas" align="center" class="col-md-10   "></div>
<script>
    function initMap() {
   var locations = [
      ['Maroubra Beach', -37.0122, -62.417804, 1]
    ];
    var center = new google.maps.LatLng(-37.013179, -62.417755);
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 16,
    center: center,
    scrollwheel: false,
  });

<?php
foreach ($negocio->imagenes_negocios as $imagen) {
    if ($imagen->ubicacion = 'portada'){
      $fportada = $imagen->foto;
    }
  }
?>
  // InfoWindow content
  var content = '<div id="iw-container">' +
                    '<div class="iw-title"><?= $negocio->nombre ?></div>' +
                    '<img src="<?= $fportada ?>" alt="<?= $negocio->nombre ?>" height="115" width="350">' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle"></div>' +
                      '<p><?= $negocio->descripcion ?></p>' +
                      '<div class="iw-subTitle">Perfil</div>' +
                      '<a href="../../negocios/perfil/<?= $negocio->id ?>"><?= $negocio->nombre ?></a>'+
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>';

  // A new Info Window is created and set content
  var infowindow = new google.maps.InfoWindow({
    //content: content,

    // Assign a maximum value for the width of the infowindow allows
    // greater control over the various content elements
    maxWidth: 350
  });

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: '../../img/marker_blue.png'
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(content);
          infowindow.open(map, marker);
        }
      })(marker, i));

    }//fin for
google.maps.event.addListener(infowindow, 'domready', function() {

    // Reference to the DIV that wraps the bottom of infowindow
    var iwOuter = $('.gm-style-iw');

    /* Since this div is in a position prior to .gm-div style-iw.
     * We use jQuery and create a iwBackground variable,
     * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
    */
    var iwBackground = iwOuter.prev();

    // Removes background shadow DIV
    iwBackground.children(':nth-child(2)').css({'display' : 'none'});

    // Removes white background DIV
    iwBackground.children(':nth-child(4)').css({'display' : 'none'});

    // Moves the infowindow 115px to the right.
    iwOuter.parent().parent().css({left: '115px'});

    // Moves the shadow of the arrow 76px to the left margin.
    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

    // Moves the arrow 76px to the left margin.
    iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

    // Changes the desired tail shadow color.
    iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(83, 131, 211, 0.6) 0px 1px 6px', 'z-index' : '1'});

    // Reference to the div that groups the close button elements.
    var iwCloseBtn = iwOuter.next();

    // Apply the desired effect to the close button
    iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '0px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});

    // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
    if($('.iw-content').height() < 140){
      $('.iw-bottom-gradient').css({display: 'none'});
    }

    // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
    iwCloseBtn.mouseout(function(){
      $(this).css({opacity: '1'});
    });
  });


} //fin initMap














</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkKG7urAJ1fTHIXbcuQDoePM2ReP-LKtQ&callback=initMap"
    async defer></script>