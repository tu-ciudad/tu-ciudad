 <?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>


</style>

 <div class="mainpage">
    <div class="header">
    <div class="jumbotron">
    <div class="jumbox">
   
    <h1><span class="title footer-distributed1"> 
                
                    <h3>Tu<span>Ciudad</span></h3></span>
     </h1>
     <div class="titlesub"><h3>¡Desde donde estés!</h3></div>
        </div>
    
    </div>
    </div>
</div>


<div class="container">
   <div class="mainpage">
     <div class="artDes">
        <div class="jumbotron">
        <h2><span class="title"> Articulos destacados &nbsp;&nbsp;</span><img src="../img/cart.png" alt=""></h2>
        </div>
        </div>
   

<div class="productos-container thumbnail" style="padding-bottom: 50px; padding-top: 15px; padding-left: 15px; padding-right: 15px;">
    <?php
 $i = 0;
 foreach ($productos as $producto) { ?>
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"> <!-- producto -->
               <div class="producto1">
        <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                   

                    <img class="" src=<?= $imagenesproductos[$i]['0']->foto?> alt="">
                    
                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>negocio name</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        
                       <h3>  
                            <span>$<?= $producto->precio?></span><sup>00</sup>
                       </h3>
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
                
                    <co>Tu<co/><span>Ciudad</span><as class="opens"> en el mapa &nbsp;&nbsp; </as> </span><img src="../img/worldwide.png" style="max-width: 64px;" alt=""></h2>
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
        <?= $this->element('footer') ?>

        <script>
  function pmodal(elem){
$('#caru  > .item').addClass('active');
    var id = $(elem).attr('pid');
        nNombre = $('#pid' + id + ' > li:nth-child(1)').text();
        pTitulo = $('#pid' + id + ' > li:nth-child(2)').text();
        pPrecio = $('#pid' + id + ' > li:nth-child(3)').text();
        pCuerpo = $('#pid' + id + ' > li:nth-child(4)').text();
        pImagen = $('#pid' + id + ' > li:nth-child(5)').text();
        numImagen = $('#pid' + id + ' > ul > li:first-child').text();
        //asigno los datos del producto al modal incluyendo la primer imagen
        $('#pTitulo').text(pTitulo);
        $('#pPrecio').text(pPrecio);
        $('#pCuerpo').text(pCuerpo);
        $('#caru > div > img').attr('src', pImagen);
        $('#carui > li > img').attr('src', pImagen);

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