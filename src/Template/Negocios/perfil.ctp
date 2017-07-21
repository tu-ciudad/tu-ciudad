
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<script>
  function dimensionar(elem){
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  }
</script>
<?= $this->element('jumbotron02') ?>
   
    <div class=" container-fluid" id="content" style="padding-right: 0; padding-left: 0;">

        <div class=" perf  " >

            <?= $this->element('sidebar-left') ?>

            <div class="col-md-12 col-lg-7  " align="center" id="sec0" style="padding-right: 0; padding-left: 0;">
        
<?= $this->element('tabla-horarios') ?>
<div style="margin-bottom: 10px;"></div>

<div class="productos-container thumbnail " style="padding-top: 10px;">
<div class="container">
<?php
 $i = 0;
 foreach ($productos as $producto): ?>
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                   

                    <img class="" onload="dimensionar(this);" src=<?= $imagenesproductos[$i][0]->foto ?> alt="">
                    
                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo ?></span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span><?= $negocio->nombre ?></span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        
                       <h3>  
                            <span>$<?= $producto->precio ?></span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
                    </div>

            
        </div></div>
    </div> <!-- /producto -->
                 
                

                <?php
                $i=$i+1;
 endforeach; ?>
</div>
</div>







                

              


                </div>

            

             <?= $this->element('sidebar-right') ?>
            
            <!--/span-->



        </div>



    </div>

    <!-- /.container -->

    <!-- imagen modal -->
    <!-- <img id="myImg" src="http://placehold.it/700x400" alt="Northern Lights, Norway" width="300" height="200"> 
<! The Modal 
    <div id="myModal" class="modal">
        <span class="close"><br>×</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
-->


<div id="fbot"></div>
    <div class="col-md-2 location hidden-xs hidden-sm ">
    <h2 class="tittle-contacto">Contacto</h2>
        <div class="topmap" alt=""></div>
        <address>
  <strong><?= $negocio->nombre ?>.</strong>
  <br>
  <?= $negocio->direccion ?> 
  <br>
  <?= $ubicacion[0]->nombre ?>
  <br>
  <abbr title="Phone">T:</abbr> <?= $negocio->telefono ?>
</address>

        <address>
        <strong>Facebook</strong><br>
        <a href="<?= $negocio->perfilfb ?>"><?= $negocio->nombre ?></a>
        <strong>Email</strong><br>
        <a href="mailto:#"><?= $negocio->email ?></a>
</address>
    </div>

    <section id="sec2" class="contact-section" style="height: 81vh; top: 25px;">
       
   <?= $this->element('modal-product') ?>
  <h2 class="tittle-map">asdfqwe en el mapa</h2>
            <div id="map" align="center" class="col-md-8 col-md-push-1 img-rounded "></div>


    </section>
<?php
 $i = 0;
 foreach ($productos as $producto): ?>

<ul id="pid<?= $i?>" class="hidden">
    <li><?= $negocio->nombre ?></li>
   <li><?= $producto->titulo ?></li>
   <li><?= $producto->precio ?></li>
   <li><?= $producto->cuerpo ?></li>
   <li><?= $imagenesproductos[$i][0]->foto ?></li>
   <li><?= $negocio->id ?></li>
   <ul>
   <li><?= count($imagenesproductos[$i]) ?></li>
   <?php

        foreach ($imagenesproductos[$i] as $imagen):
        ?>

        <li><?= $imagen->foto ?></li>
        <?php

        endforeach; ?> 

   </ul>
        </ul>
<?php
                $i=$i+1;
 endforeach; ?>
<?= $this->element('footer') ?>



 <style>
    #map {
        height: 350px;
        box-shadow: 1px 1px #ccc ;
        margin-top: 90px;
    }
    .tittle-map {
      position: absolute;
      top: 20px;
      left: 47%;
      font-weight: 300;
      font-family: normal, 'roboto';
    }
    .tittle-contacto{
      font-family: normal, 'roboto';
      position: absolute;
      font-weight: 300;
      top: 20px;
    }
</style>


<script>
$('meta[property=og:description]').remove();
    $('head').append( '<meta property="og:description" content="this is new">' );

    function initMap() {
   var locations = [
      
      ['Maroubra Beach', -37.0122, -62.417804, 1]
    ];
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: new google.maps.LatLng(-37.013179, -62.417755),
    scrollwheel: false,

    styles: [
          {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
          {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
          {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
          {
            featureType: 'administrative',
            elementType: 'geometry.stroke',
            stylers: [{color: '#c9b2a6'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'geometry.stroke',
            stylers: [{color: '#dcd2be'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#ae9e90'}]
          },
          {
            featureType: 'landscape.natural',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#93817c'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [{color: '#a5b076'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#447530'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#f5f1e6'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [{color: '#fdfcf8'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#f8c967'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{color: '#e9bc62'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry',
            stylers: [{color: '#e98d58'}]
          },
          {
            featureType: 'road.highway.controlled_access',
            elementType: 'geometry.stroke',
            stylers: [{color: '#db8555'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#806b63'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.fill',
            stylers: [{color: '#8f7d77'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'labels.text.stroke',
            stylers: [{color: '#ebe3cd'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#dfd2ae'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [{color: '#b9d3c2'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#92998d'}]
          }
        ],
  });

  var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: '../../img/marker_blue.png'
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkKG7urAJ1fTHIXbcuQDoePM2ReP-LKtQ&callback=initMap"
    async defer></script>
    
<script> //script de horarios y dias
var d = new Date();
var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

var n = weekday[d.getDay()];

var daysOfTheWeek = document.getElementsByTagName("li");

dayOfTheWeek(daysOfTheWeek);

function dayOfTheWeek (weekDays) {
    for(var i = 0; i < weekDays.length; i++)
  { 

    if(weekDays[i].getAttribute("name") == n)
    {
        weekDays[i].className = 'active';
      weekDays[i].childNodes[0].className = 'active';
    }
  }
}
</script>
<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
  method: 'share',
  href: 'http://shopciudad.000webhostapp.com',
}, function(response){});
}
</script>

<script>
  function pmodal(elem){
$('#caru  > .item').addClass('active');
    var id = $(elem).attr('pid');
        nNombre = $('#pid' + id + ' > li:nth-child(1)').text();
        pTitulo = $('#pid' + id + ' > li:nth-child(2)').text();
        pPrecio = $('#pid' + id + ' > li:nth-child(3)').text();
        pCuerpo = $('#pid' + id + ' > li:nth-child(4)').text();
        pImagen = $('#pid' + id + ' > li:nth-child(5)').text();
        pId = $('#pid' + id + ' > li:nth-child(6)').text();
        numImagen = $('#pid' + id + ' > ul > li:first-child').text();
        //asigno los datos del producto al modal incluyendo la primer imagen
        $('#pTitulo').text(pTitulo);
        $('#pPrecio').text(pPrecio);
        $('#pCuerpo').text(pCuerpo);
        $('#caru > div > img').attr('src', pImagen);
        $('#carui > li > img').attr('src', pImagen);
        $('.vermasde > a').attr('href', '/negocios/perfil/'+pId);
        $('#vermash1').text(nNombre);
          //j es la posicion de la imagen, arranca del 3 porque el 1 es la cantidad de imagenes y el 2 es la primer imagen
         var j = 3;
         for ( var i = 1; i < numImagen; i++ ) {
          //agrega las imagenes que falta (elementos virtuales)
          allImagenes = $('#pid' + id + ' > ul > li:nth-child('+ j +')').text();

          $('#caru').append('<div class="item thumbnail dom">'+'<img src='+ allImagenes +' /></div>');
         
         $('#carui').append('<li data-target='+'#carousel-custom'+' class="dom" data-slide-to='+ i +'><img src='+ allImagenes +' /></li>');
         j = j + 1;
         }
     console.log(numImagen )
    };

    $('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
      
    });
</script>
<!--  <?= dump($productos) ?> 
 <?= dump($negocio) ?>  -->