 <?php
/**
  * @var \App\View\AppView $this
  */
?>
<img src="../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg" style="display: none;" alt="producto">
<img src="../../img/comerimg.jpg" style="display: none;" alt="comercio">
 <div class="mainpage" style="margin-top: 20px;">
 <div class=""> 
    <div class="header">
    <div class="jumbotron" style="box-shadow: 0; border: 0; margin-bottom: 0;">
    <div class="jumbox">  
   
        </div>
    </div>
    </div>
</div></div> 
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
        .owl-stage-outer {
          max-height: 220px;
        }
</style>
<?= $this->element('homeElements/categoriasNav') ?>
<div class="container">
   <div class="mainpage">
      
<?= $this->element('homeElements/carousels') ?>


      <!-- <div class="artDes">
        <div class="jumbotron" style="border-bottom: 0;">
          <h2>
            <span class="title"> Productos destacados &nbsp;&nbsp;</span>
            <img src="../img/cart.png" style="z-index: 1000; position: relative;" alt="">
          </h2>
        </div>
      </div>
      
      <div class="productos-container thumbnail" style=" border-top-right-radius: 0; border-top-left-radius: 0; ">
         
            
                <div style="position: absolute; left: calc(50% - 40px); bottom: 15px;"><a class="btn btn-default" href="/buscar?productos"> Ver Más </a></div>
                <br>     
       </div> -->
     
 
  <div class="mainpage">
    <div class="comerjum">
      <div class="jumbotron">
        <h2><span class="title"> Comercios en Guaminí &nbsp;&nbsp;</span><img src="../img/store.png" style="z-index: 1000; position: relative;" alt=""></h2>
      </div>
    </div>
  </div>

  <div class="comercio-grid"> 
    <?= $this->element('homeElements/comercios') ?>           
  </div>
          <br>
          <center><a href="/comercios"><button  class="btn btn-default">Ver Todos</button></a></center> 
          <br>  

</div>
</div>
<!-- <div class="mainpage">
  <div class="artDes">
     <div class="jumbotron" style=" border-left: 0; border-right: 0; border-bottom: 0;">
       <h2>
          <span class="title cookie">  
            <co>Paseo<co/><span>Ciudad</span><as class="opens"> en el mapa &nbsp;&nbsp; </as> 
          </span>
          <img src="../img/worldwide.png" style="max-width: 64px; z-index: 1000; position: relative;" alt="">
      </h2>
    </div>
  </div>
</div>
<div class="proDes">
     
</div> -->

<div class="onepagesub">
  <img class="subimg" src="img/subimg.jpg" alt="guamini">
  <div class="container">
    <h2>Sumate a nuestra <b>plataforma de exposición</b> de productos y servicios de forma online.</h2>
    <a href="/sumate"><div class="boxsub">Comienza hoy mismo!</div></a>
  </div>

</div>
<style>
 
</style>

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