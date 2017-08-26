<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>

</style>


<?php
if (!isset($variable)) {
?>
<div class="container">
 <div class="mainpage">
    <div class="jumbotron"  style="margin-top: 30px;">

    <h2><span class="title"> No encontramos lo que buscas :(</span></h2>
       <!--  <h4 style="color: #666666;">Pero no te preocupes! </h4> -->
    </div>
    <div style="height: 350px;"></div>
</div>
</div>
<?php
            } else {
              if ($comercios == 0){
?>

<div class="busheader" >
  <div class="busheader__search container">
  <div class="jumbotron" style="height: 200px;">
  <h2 class="tittle"><span>Todos los productos</span></h2>
  <div class="col-md-3 " style="float: initial; margin: 0 auto;">
   <form  method="get" action="/buscar" >
    <div class="input-group">
     <input type="text" class="prodsearch form-control" id="dato" name="productos"  placeholder="Buscar Productos...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" style="height: 50px;"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
      </span>
    </div><!-- /input-group -->
    </form>
  </div>
    </div>
  </div>
</div>
<div class="comercio container">
    <nav class="navbar navbar-default bshadow">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class=""><a href="../../buscar?productos=&ref=navProductos">Todos</a></li>
          <li style="font-weight: bold;"><a href="?categorias=OFERTA&ref=navProductos">OFERTAS!</a></li>
          <li><a href="?categorias=Moda&ref=navProductos">Moda</a></li>
          <li><a href="?categorias=infantil+juguetes&ref=navProductos">Infantil</a></li>
          <li><a href="?categorias=deporte+deportivo&ref=navProductos">Deportivo</a></li>
          <li><a href="?categorias=comida+rotiseria&ref=navProductos">De rotisería</a></li>
        </ul>
      </div>
    </nav>
    </div>


<div class="buscarpage">
<div class="productos-container container" style="float: initial; margin: 0 auto;">

<div class="container thumbnail" style="//padding-top: 15px;">
<div class="col-xs-12">
 <div class="paginator">
        <p style="margin-bottom: 0;"><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}.')]) ?></p>
        
    </div>
    </div>
<?php
 $i = 0;
 foreach ($variable as $producto):
 $precio = explode(".",$producto->precio,2); ?>

               <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-3 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
                   <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                      <div class="preloader"></div>
                      <div class="preview" style="
                          background-image: url(../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg);
                          background-size: cover;
                          background-repeat: no-repeat; 
                          height: 100%; width: 100% !important;" >
                        <img class="" style="opacity: 0;" onload="dimensionar(this); dataLayer.push({'event': 'producto-mostrado','namep': '<?= $producto->titulo?>', 'namen': '<?= $producto->negocio->nombre ?>'});" src=/files/ImagenesProductos/<?= $producto->imagenes_productos['0']->fototh?> alt="">
                      </div>
                      <div class="content">
                        <h3>
                          <span id="tituloGTM"><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                           
                        <h5>
                          <a>
                            <span id="negocioGTM"><?= $producto->negocio->nombre ?></span>
                          </a>
                        </h5>
                      </div>

                      <div class="content-bot"> 
                       <div class="ver-prod">
                         <img src="../../img/pointer.svg" style="height: 23px; width: 23px;" alt="pointer">
                         <div class="ver">ver</div>
                       </div>
                       <h3 class="text-danger">  
                        <?php 
                        if (isset($producto->precio)) {
                         if (sizeof($precio)==2) {
                          if ($precio[1] < 10){
                            $precio[1]=$precio[1]*10;
                            }  
                        ?>
                        <span>$<?= $precio[0] ?></span><sup><?= $precio[1] ?></sup>
                        <?php } else { ?>
                        <span>$<?= $precio[0] ?></span><sup>00</sup>
                        <?php }} ?>
                       </h3>
                       <div class="hidden-md hidden-lg ellipsis"><p><?= $producto->titulo?></p></div>
                    </div>              
                    </div>
                </div>
    </div> <!-- /producto -->
                <?php
                $i=$i+1;
 endforeach;
  ?>
  
 <?= $this->element('modal-producto-busqueda') ?>
 <div class="col-xs-12">
 <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?> 
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}.')]) ?></p>
    </div>
    </div>
</div>
</div>
</div>
<?php
 $i = 0;
 foreach ($variable as $producto): ?>

<ul id="pid<?= $i?>" class="hidden">
   <li><?= $producto->negocio->nombre ?></li>
   <li><?= $producto->titulo ?></li>
   <li><?= $producto->precio ?></li>
   <li><?= $producto->cuerpo ?></li>
   <li><?= $producto->imagenes_productos[0]->foto ?></li>
   <li><?= $producto->negocios_id ?></li>
   <li><?= $producto->id ?></li>
   <ul>
   <li><?= count($producto->imagenes_productos) ?></li>
   <?php
   
        foreach ($producto->imagenes_productos as $imagen):
        ?>
        <li><?= $imagen->foto ?></li>
        <?php

        endforeach; ?> 

   </ul>
        </ul>
<?php
                $i=$i+1;
 endforeach; ?>
<?php
} else {
  ?>
  <div class="busheader">
  <div class="busheader__search">
  <div class="jumbotron" style="height: 200px;">
  <h2 class="tittle"><span>Comercios en Guaminí</span></h2>
<div class="col-md-3 " style="float: initial; margin: 0 auto;">
   <form  method="get" action="/buscar" >
    <div class="input-group">
     <input type="text" class="prodsearch form-control" id="dato" name="comercios"  placeholder="Buscar Comercios...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" style="height: 50px;"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
      </span>
    </div><!-- /input-group -->
    </form>
  </div>
  </div>
</div>
  <div class="comercio">
    <nav class="navbar navbar-default bshadow">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a href="?comercios&ref=navComercios">Todos</a></li>
          <li><a href="?comercios=Moda&ref=navComercios">Moda</a></li>
          <li><a href="?comercios=regaleria&ref=navComercios">Regalería</a></li>
          <li><a href="?comercios=supermercado&ref=navComercios">Supermercados</a></li>
          <li><a href="?comercios=deportivo&ref=navComercios">Deportivo</a></li>
          <li><a href="?comercios=comida&ref=navComercios">Rotiserías</a></li>
          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Más
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="?comercios=asd">Page 1-1</a></li>
              <li><a href="?comercios=asd">Page 1-2</a></li>
              <li><a href="?comercios=asd">Page 1-3</a></li>
            </ul>
          </li>   
          <li>
          <div class="comercio">  
          <input type="text" name="search" placeholder="Buscar..">
          </div>
          </li> -->
        </ul>
      </div>
    </nav>
    </div>
  <div class="container">
    <div class="comercio-grid">  
  <?php
   $i = 0;
 foreach ($variable as $comercio): ?>

 <div class="comercio-card  " >
      <a href="../negocios/perfil/<?= $comercio['id']?>" + >
        <div class="card" style="min-height: 275px; max-height: 275px;">
            <img class="card-img-top" src=<?= $comercio->imagenes_negocios[0]->foto?> alt="Card image cap">
          <div class="card-block">
              <h4 class="card-title"><?= $comercio['nombre'] ?></h4>
              <p class="card-text"><?= $comercio['descripcion'] ?></p>
            </div>
        </div>
      </a>
      </div>
                <?php
                $i=$i+1;
 endforeach;
}
}
?> 
</div>
<div style="margin-top: 50px;"></div>
</div>

</div>
<?= $this->element('footer') ?>


<script>  
    $('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
    });
    </script>
