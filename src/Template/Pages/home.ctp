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

 <div class="mainpage">
    <div class="header">
    <div class="jumbotron">
    <div class="jumbox">
   
    <h1><span class="title footer-distributed1"> 
                
                    <h3>Paseo<span>Ciudad</span></h3></span>
     </h1>
     <div class="titlesub"><h3>¡Desde donde estés!</h3></div>
        </div>
    
    </div>
    </div>
</div>

  <style>

  /*col-min*/

@media (max-width: 430px) {
    .container {
      margin-left: 5px;
      margin-right: 5px;
      padding-left: 0;
      padding-right: 0;
    }
    .mainpage .header .jumbotron .jumbox{
    margin-left: 0;
    width: 100%;
   }
  }
/******home responsive**********/
  .mainpage  .productos-container {
    padding-bottom: 50px;
     padding-top: 15px;
      padding-left: 15px;
       padding-right: 15px;
        background-color: rgb(248, 248, 248);
         border-radius: 5px;
  }

  
@media (max-width: 430px) {
  .mainpage .header .jumbotron .jumbox {
    margin-left: 0;
    width: 100%;
   }
   .mainpage .jumbotron .title {
    font-size: 30px;
   }
 }

</style>
<div class="container">
   <div class="mainpage">
   
     <div class="artDes">
        <div class="jumbotron">
        <h2><span class="title"> Productos destacados &nbsp;&nbsp;</span><img src="../img/cart.png" alt=""></h2>
        </div>
        </div>


<div class="productos-container thumbnail" style="">
    <?php
 $i = 0;
 foreach ($productos as $producto) { 
$negocio = $negociosdeproductos[$i][0];
 ?>

               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                   

                    <img class="" onload="dimensionar(this);" src=<?= $imagenesproductos[$i]['0']->foto?> alt="">
                    
                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="../negocios/perfil/<?= $negocio->id ?>">
                            <span><?= $negocio->nombre ?></span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <a href="../../productos/ver/<?= $producto->id?>" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a>
                       <h3>  
                            <span>$<?= $producto->precio?></span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
                    </div>

            
        </div></div>
    </div> <!-- /producto -->
                 
                

                <?php
                $i=$i+1;
              
 } ?>


                
          <div style="position: absolute; left: calc(50% - 40px); bottom: 15px;"><a class="btn btn-default" href="/buscar?productos"> Ver Más </a></div>
          <br>     
 </div>
 <div class="mainpage">
    <div class="jumbotron">
    <h2><span class="title"> Comercios en Guaminí &nbsp;&nbsp;</span><img src="../img/store.png" alt=""></h2>
        
    </div>
</div>
    <div class="comercio-grid">
        
            <?php
            $i = 0;
            foreach ($negocios as $negocio) {
            ?>
            <div class="comercio-card  " >
            <a href=<?= '/negocios/perfil/'.$negocio->id?>>
                <div class="card" style="">
                    <img class="card-img-top" src=<?= $imagenesnegocios[$i]['0']->foto?> alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title"><?= $negocio->nombre?></h4>
                        <p class="card-text"><?= $negocio->descripcion?></p>
                    </div>
                </div>
            </a>
            </div>
            <?php
            $i = $i+1;
            }
            ?>
             </div>
 <br>
          <center><a href="/comercios"><button  class="btn btn-default">Ver Todos</button></a></center> 
          <br>  

  
 </div>
    
        
        
<div class="mainpage">
     <div class="artDes">
        <div class="jumbotron">
        <h2><span class="title cookie">  
                
                    <co>Paseo<co/><span>Ciudad</span><as class="opens"> en el mapa &nbsp;&nbsp; </as> </span><img src="../img/worldwide.png" style="max-width: 64px;" alt=""></h2>
        </div>
        </div>
<div class="proDes">
        <?= $this->element('map-index') ?>
</div>
</div>
            </div> <!-- fin container principal -->


<br>
<br>
<br>

<?= $this->element('modal-product') ?>
<?php
 $i = 0;
 foreach ($productos as $producto): 
  $negocio = $negociosdeproductos[$i][0]; ?>

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
        $('#l-name').text(nNombre);
        $('.vermasde > a').attr('href', '/negocios/perfil/'+pId);
        $('#vermash1').text(nNombre);
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
<!-- <?= dump($negociosdeproductos) ?> -->
