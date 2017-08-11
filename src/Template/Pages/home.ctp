 <?php
/**
  * @var \App\View\AppView $this
  */
?>
<img src="../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg" style="display: none;" alt="">
<img src="../../img/comerimg.jpg" style="display: none;" alt="">
 <div class="mainpage">
    <div class="header">
    <div class="jumbotron" style="box-shadow: 0; border: 0; margin-bottom: 0;">
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
</style>
<div class="container">
   <div class="mainpage">
   
      <div class="artDes">
        <div class="jumbotron" style="border-bottom: 0;">
          <h2>
            <span class="title"> Productos destacados &nbsp;&nbsp;</span>
            <img src="../img/cart.png" style="z-index: 1000; position: relative;" alt="">
          </h2>
        </div>
      </div>
<div class="productos-container thumbnail" style=" border-top-right-radius: 0; border-top-left-radius: 0; ">
    <?php
 $i = 0;
 foreach ($productos as $producto) { 
$negocio = $negociosdeproductos[$i][0];
 ?>
               <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                   
                    <div class="preloader"></div>
                    <div class="preview" style="
                      background-image: url(../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg);
                      background-size: cover;
                      background-repeat: no-repeat; 
                      height: 100%; width: 100% !important;" >
                    <img class="" style="opacity: 0;" onload="dimensionar(this);" src=<?= $imagenesproductos[$i]['0']->foto?> alt="">
                    </div>
                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a>
                            <span><?= $negocio->nombre ?></span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        
                       <h3 class="text-danger">  
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
 <div class="comerjum">
    <div class="jumbotron">
    <h2><span class="title"> Comercios en Guaminí &nbsp;&nbsp;</span><img src="../img/store.png" style="z-index: 1000; position: relative;" alt=""></h2>
        
    </div>
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
                    <div class="preview" style="
                      background-image: url(../../img/comerimg.jpg);
                      background-size: cover;
                      background-repeat: no-repeat; 
                      height: 100%; width: 100% !important;" >
                    <img class="card-img-top" style="opacity: 0;" src=<?= $imagenesnegocios[$i]['0']->foto?> alt="Card image cap" onload="comready(this);">
                    </div>
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
</div>
<div class="mainpage">
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
        <?= $this->element('map-index') ?>
</div>
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
    $('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
    });
</script>
<!-- <?= dump($negociosdeproductos) ?> -->
