 <?php
/**
  * @var \App\View\AppView $this
  */
?>
<img src="../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg" style="display: none;" alt="producto">
<img src="../../img/comerimg.jpg" style="display: none;" alt="comercio">
 <div class="mainpage">
    <div class="header">
    <div class="jumbotron" style="box-shadow: 0; border: 0; margin-bottom: 0;">
    <div class="jumbox">  
    <h1 itemprop="name"><span class="title footer-distributed1"> 
                    <h3>Paseo<span>Ciudad</span></h3></span>
     </h1>
     <div class="titlesub"><h3>¡Desde donde estés!</h3></div>
        </div>
    </div>
    </div>
</div>
  <style>
  /*col-min*/
.mainpage {
  font-family: normal, 'Helvetica';
}
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


 .homeprod {
            width: 200px;
        }
        .catetext {
          font: normal 22px 'Roboto', Helvetica;
          text-transform: uppercase;
        }
        @media (max-width: 500px) {
            .homeprod {
            width: 170px;
        }
            .producto1 .item {
                width: 100%;
                height: 170px;
            }
        }
        @media (max-width: 430px) {
            .homeprod {
            width: 120px;
        }
            .producto1 .item {
                width: 100%;
                height: 120px;
            }
        }
        .proproca .owl-stage-outer {
          max-height: 220px;
        }
</style>
<div class="container">
<?= $this->element('homeElements/categoriasNav') ?>
<?= $this->element('homeElements/comerciosCarousel') ?>
          <center><a href="/buscar?comercios"><button  class="btn btn-default">Ver Todos</button></a></center> 
          <br>
</div>
<div class="container">
   <div class="mainpage">
            



<div class="proproca">

<?= $this->element('homeElements/carousels') ?>


     </div>
 


           

</div>
</div>


<div class="onepagesub">
  <img class="subimg" src="img/subimg.jpg" alt="guamini">
  <div class="container">
    <h2>Sumate a nuestra <b>plataforma de exposición</b> de productos y servicios de forma online.</h2>
    <a href="/sumate"><div class="boxsub">Comienzá hoy mismo!</div></a>
  </div>

</div>


<?= $this->element('modal-product') ?>
<?php


 $i = 0;
  foreach ($matriz as $matriz): 

 foreach ($matriz as $producto): 
 ?>

<ul id="pid<?= $i?>" class="hidden">
    <li><?= $producto->negocio->nombre ?></li>
   <li><?= $producto->titulo ?></li>
   <li><?= $producto->precio ?></li>
   <li><?= $producto->cuerpo ?></li>
   <li>../../files/ImagenesProductos/<?= $producto->imagenes_productos[0]->foto ?></li>
   <li><?= $producto->negocio->id ?></li>
   <li><?= $producto->id ?></li>
   <ul>
   <li><?= count($producto->imagenes_productos) ?></li>
   <?php
        foreach ($producto->imagenes_productos as $imagen):
        ?>
        <li>../../files/ImagenesProductos/<?= $imagen->foto ?></li>
        <?php
        endforeach; ?> 
   </ul>
        </ul>
<?php
                $i=$i+1;
 endforeach;
endforeach;

  ?>

        <?= $this->element('footer') ?>
<script>
    $('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
    });
</script>

<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      margin:10,
    loop:true,
    autoWidth:true,
    items:5,
      dots: false,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"] ,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            margin: 5,
            
        },
        600:{
            items:3,
            
        },
        1000:{
            items:5,
            
        }
    }  
    
  });
});
    </script>