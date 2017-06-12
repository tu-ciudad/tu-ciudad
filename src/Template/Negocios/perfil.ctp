
<?php
/**
  * @var \App\View\AppView $this
  */
?>

<?= $this->element('jumbotron02') ?>
   
    <div class="container-fluid" id="content">

        <div class="row">

            <?= $this->element('sidebar-left') ?>

            <div class="col-md-12 col-lg-7 thumbnail" align="center" id="sec0">
        
<?= $this->element('tabla-horarios') ?>
<hr>

<div class="productos-container">
<div class="container">
<?php
 $i = 0;
 foreach ($productos as $producto): ?>
               <div class="producto1 col-xs-6 col-sm-4 col-md-3 col-lg-4"> <!-- producto -->
        <div class="item" data-toggle="modal" data-target=#<?= $i?>>

                    <img class="" src=<?= $imagenesproductos[$i][0]->foto ?> alt="">
                    
                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo ?></span>
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
                    </div>

<input type="hidden" id="pid" value="producto id"></input>
            
        </div>
    </div> <!-- /producto -->
                 
                <!-- modal del pructo -->
                <div id=<?= $i?> class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog px">
                    <div class="modal-content">
                    <h4 class="modal-title _4-i0"><?= $negocio->nombre ?></h4>

                      <span class="close pclose" data-dismiss="modal" aria-label="Close">×</span>
                      <div class="modal-body" style="background-color: #FAFAFA;">
                    
                <!-- cuerpo -->

                    <div class="row">
                <div class=" col-sm-4 col-xs-4">
                <div id='carousel-custom'<?= $i?> class='carousel slide' data-ride='carousel'>
                    <div class='carousel-outer'>
                        <!-- me art lab slider -->
                        <div class='carousel-inner '>

                      <?php $q=0;  
                      foreach ($imagenesproductos[$i] as $imagen): 
                         if ($q==0) {?>
                                <div class='item active'>
                                   <img src=<?= $imagen->foto ?> alt="" />
                                 </div>
                            <?php
                           }
                           else{?>
                               <div class='item'>
                                    <img src=<?= $imagen->foto ?> alt="" />
                               </div>
                           <?php
                          }
                           $q = $q + 1;
                      endforeach; ?>

                            
                        </div>
                            
                        <!-- sag sol -->
                       
                    </div>
                    
                    <!-- thumb -->
                    
                </div>
                </div>
                <div class="col-md-8">
                    <center>
                    <h2><?= $producto->titulo ?>
                    <ul class="list list-inline">

                         <li><del class="text-danger"><h3>$99.99</h3></del></li>
                         <li><h5 class="text-primary">$<?= $producto->precio ?></h5></li>
                     </ul>
                     </h2>
                    <p><?= $producto->cuerpo ?></p>
                    <br><br>
                            <p style="font-weight:bold;">La oferta finaliza en: </p>                         
                            <ul class="countdown list-inline">
                                <li class="round">
                                    <span class="days">100</span>
                                    <p>Days</p>
                                </li>
                                <li class="round">
                                    <span class="hours">15</span>
                                    <p>Hours</p>
                                </li>
                                <li class="round">
                                    <span class="minutes">28</span>
                                    <p>Mins</p>
                                </li>
                                <li class="round">
                                    <span class="seconds">30</span>
                                    <p>Secs</p>
                                </li>
                            </ul><!-- end countdown -->
                    </center>

                </div>
                </div></div>
                <div class="modal-footer" id="" style="padding: 0;">
                <div class="col-md-6">
                <div id='carousel-custom'<?= $i?> data-ride='carousel'>
                  <ol class='carousel-indicators' >

                          <?php
                            foreach ($imagenesproductos[$i] as $imagen):
                            $p=0;  ?>

                        <li data-target='#carousel-custom'<?= $i?> data-slide-to=<?= $p ?> class='active'><img src=<?= $imagen->foto ?> alt='' /></li>

                              <?php
                              $p=$p+1;
                                    endforeach; ?>

                        

                    </ol>
                 </div></div>
                 <div class="col-md-6">
                        <center>
                            <p> 
                    <h4 class="marg"><span class="glyphicon glyphicon-share-alt"></span> Compartir</h4>
                    <a class="btn btn-primary social-login-btn social-facebook" href="/auth/facebook"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-primary social-login-btn social-twitter" href="/auth/twitter"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-primary social-login-btn social-linkedin" href="/auth/linkedin"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-primary social-login-btn social-google" href="/auth/google"><i class="fa fa-google-plus"></i></a>
                            </p>
                        </center>
                 </div>  
                    </div>

                <!-- fin row -->
                <!-- fin cuerpo -->
                      
                    </div>
                  </div>
                </div>

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
        <div class="topmap" alt=""></div>
        <address>
  <strong>Example Inc.</strong>
  <br>
  1234 Example Street
  <br>
  Antartica, Example 0987
  <br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

        <address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">exam.ple@example.com</a>
</address>
    </div>

    <section id="sec2" class="contact-section" style="height: 70vh;">
       


            <div id="map" align="center" class="col-md-8 col-md-push-1 img-rounded "></div>


    </section>

<?= $this->element('footer') ?>



 <style>
    #map {
        height: 350px;
        box-shadow: 1px 1px #ccc ;
        margin-top: 50px;
    }
</style>


<script>
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
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1363818250353028',
      xfbml      : true,
      version    : 'v2.7'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
  $('.item').click(function(){
    var p_id = $('input#pid').val();
    console.log(p_id);
  });
</script>