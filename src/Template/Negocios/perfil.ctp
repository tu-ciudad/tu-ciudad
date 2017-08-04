
<?php
/**
  * @var \App\View\AppView $this
  */
$this->layout = 'perfil';
?>
<style>
  .mainperf {
    padding-right: 0; 
    padding-left: 0;
  }
.mainperf {
    margin-left: 0;
    margin-right: 0;
   }
</style>
<script>
  function dimensionar(elem){
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  }
</script>
<?= $this->element('jumbotron03') ?>
   
    <div class=" container-fluid mainperf" id="content" style="">

        <div class=" perf  " >

            <?= $this->element('sidebar-left') ?>

            <div class="col-md-12 col-lg-7  " align="center" id="sec0" style="padding-right: 0; padding-left: 0;">
        
<?= $this->element('tabla-horarios') ?>
<div style="margin-bottom: 10px;"></div>


<div class="perfilpage">
<div class="productos-container thumbnail " style="padding-top: 10px;">
<div class="">
<?php
 $i = 0;
 foreach ($productos as $producto): ?>
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 col-min"> <!-- producto -->
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
                        <a href="../../productos/ver/<?= $producto->id?>" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a>
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
<section id="sec2" class="contact-section" style="height: 81vh; ">
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

    
       
   <?= $this->element('modal-product') ?>
  <!-- <h2 class="tittle-map"><?= $negocio->nombre ?> en el mapa</h2> -->

            <?= $this->element('map-perfil') ?>

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
   <li><?= $producto->id ?></li>
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

<script>
function shareProd (id){
  FB.ui({
  method: 'share',
  href: 'http://paseociudad.website/productos/ver/'+id,
  //caption: 'An example caption',
  //picture: 'http://paseociudad.website/files/ImagenesProductos/7315acfe5f85612ac3b95c54deee11a8.jpg',
  
}, function(response){
});
}

</script>

 <style>
    
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
      margin-left: 15px;
    }
</style>



    
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
  href: 'http://paseociudad.website/negocios/perfil/<?= $negocio->id ?>',
  //caption: 'An example caption',
  //picture: 'http://paseociudad.website/files/ImagenesProductos/7315acfe5f85612ac3b95c54deee11a8.jpg',
  
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
        pIdShare = $('#pid' + id + ' > li:nth-child(7)').text();
        numImagen = $('#pid' + id + ' > ul > li:first-child').text();
        //asigno los datos del producto al modal incluyendo la primer imagen
        $('#pTitulo').text(pTitulo);
        $('#pPrecio').text(pPrecio);
        $('#pCuerpo').text(pCuerpo);
        $('#caru > div > img').attr('src', pImagen);
        $('#carui > li > img').attr('src', pImagen);
        $('.vermasde > a').attr('href', '/negocios/perfil/'+pId);
        $('#vermash1').text(nNombre);
        $('#l-name').text(nNombre);
        $('#share-prod-fb').attr('onclick', 'shareProd('+pIdShare+');');
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
<!--   <?= dump($productos) ?> 
 <?= dump($negocio) ?>   -->