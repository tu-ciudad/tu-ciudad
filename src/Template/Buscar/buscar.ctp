<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>
.buscar .header .jumbotron {
     background-color: inherit;
    background-image:url('../img/buscar.jpg') ;
    background-position: center center; 
    background-repeat: no-repeat;
    width: 100% !important;
    height: 300px;
    text-align: center;
    box-shadow: 1px 2px 1px #ccc;
    margin-bottom: 0;
}
.buscar .header .jumbotron .jumbox  {
    margin: 0 auto;
    margin-top: 0 auto;
    background-color: rgba(248, 248, 248, 0.1);
    /height: 500px;
    width: 50%;
    text-align: center;
    margin-bottom: 30px;
    margin-top: 100px;
    padding-bottom: 10px;
    padding-top: 10px;
    border-radius: 5px;
}
    .buscar .jumbotron {
    background-color: #F8F8F8;
    height: 100px;
    text-align: center;
    padding: 1px;
    box-shadow:  1px 1px #ccc;
}
.buscar .title {
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
   / display: inline-block;
   / margin-bottom: 20px;
    font-size: 43px;
    /padding-bottom: 10px;
    color: #fafafa;
    text-shadow: 1px 1px 1px rgba(1, 1, 1, 0.9);
}
.buscar .navbar .container-fluid {
	margin: 0;
	padding: 0;
}
.buscar .bshadow {
    border-bottom: 1px solid #ccc;
    border-right: 0px solid #ccc;
}
.buscar .navbar-nav > li > a {
      padding-top: 0;
      padding-bottom: 0px;
  }
.buscar .navbar-nav {
  float: none;
  text-align: center;
}
.buscar .navbar {
  border-top: 0px;
}
.buscar .navbar-nav li {
  float: none;
  display: inline-block;
  margin: 0;
}
.buscar .navbar-nav  .active {
   background-color: #5383d3; 
}
.buscar .navbar-nav  .active:hover, .buscar .navbar-nav  .active:focus {
   background-color: #5383d3; 
}
.buscar .navbar-nav  .active a{
        cursor: default;
        background-color: #5383d3; 
        color: #fff;
        padding: 5px;
}
.buscar .navbar-nav .active:hover{
        border: 0px;
}
.buscar .navbar-nav li:hover{       
        border: 2px solid #5383d3;
        color: #fff;
}
.buscar .navbar-nav  .active a:hover, .buscar .navbar-nav  .active a:active, .buscar .navbar-nav  .active a:focus{
    cursor: default;
        background-color: #5383d3; 
        color: #fff;
}
.non-search .tittle {
	font-family: Arial,Helvetica,"Nimbus Sans L",sans-serif;
	color: #666666;
	font-size: 32px;
	text-align: center;
}
.non-search .categorias {
	margin: 0 auto;
	max-width: 600px;
	padding: 15px 20px 0 0;
	vertical-align: top;
}
@media (min-width: 1000px) {
  .non-search {
    margin-left: 350px;
  }
}
.non-search .categorias h3 {
	margin: 5px 0 8px;
	font-size: 13px;
	color: #999;
	line-height: 1em;
}
.non-search .categorias ul{
    list-style: none;
}
.non-search .categorias .list{
    margin-right: 3%;
    /float: left;
    width: 30%;
}
.non-search .categorias .list li a{
    -webkit-border-radius:4px;
    border-radius:4px;
    background-color:#ddd;
    color:#444;
    /line-height:22px;
    padding:1px 10px;
    display:inline-block;
    /max-width:85%;
    vertical-align:middle;
    margin: 3px;
    float: left;
}
.non-search .categorias .list li a:hover{
    text-decoration:none;
    background-color:#B7B7B7;
}

.mainpage .jumbotron {
    background-color: #F8F8F8;
    height: 100px;
    text-align: center;
    padding: 1px;
    box-shadow:  1px 1px #ccc;
}

.mainpage .title {
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
   / display: inline-block;
   / margin-bottom: 20px;
    font-size: 37px;
    /padding-bottom: 10px;
    color: #666666;
    padding: 0 auto;
}
.comercio .header .jumbotron {
     background-color: inherit;
    background-image:url('../img/nature.jpg') ;
    background-position: center center; 
    background-repeat: no-repeat;
    height: 300px;
    text-align: center;
    box-shadow: 1px 2px 1px #ccc;
}
.comercio .header .jumbotron .jumbox  {
    margin: 0 auto;
    margin-top: 0 auto;
    background-color: rgba(248, 248, 248, 0.1);
    /height: 500px;
    width: 50%;
    text-align: center;
    margin-bottom: 30px;
    margin-top: 100px;
    padding-bottom: 10px;
    padding-top: 10px;
    border-radius: 5px;
}
    .comercio .jumbotron {
    background-color: #F8F8F8;
    height: 100px;
    text-align: center;
    padding: 1px;
    box-shadow:  1px 1px #ccc;
}
.comercio .title {
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
   / display: inline-block;
   / margin-bottom: 20px;
    font-size: 43px;
    /padding-bottom: 10px;
    color: #fafafa;
    text-shadow: 1px 1px 1px rgba(1, 1, 1, 0.9);
}

.busheader .busheader__search .prodsearch {
  margin: 0 auto;
  height: 50px;
  width: 20em;
   background-image: url('../img/search.png');
    background-color: rgba(255,255,255, 0.6);
    background-position: 5px 10px; 
    background-repeat: no-repeat;
    padding: 14px 20px 14px 40px;
  
}
.busheader .busheader__search h2 {
   font: normal, 'Helvetica';
   margin: 0 auto;
   text-align: center;
   margin-bottom: 25px;
   margin-top: 0;
   text-shadow: 0 1px 2px #ccc;
}
.busheader .busheader__search .jumbotron {
  background: #FAFAFA;
  border-bottom: 1px solid #DFE0E4;
  margin-bottom: 0px;
  background-image: url(../../img/pattern2.svg);
  /background-size: cover;
}
</style>


<?php
if (!isset($variable)) {
?>
<div class="container">
 <div class="mainpage">
    <div class="jumbotron">
    <h2><span class="title"> No encontramos lo que buscas :(</span></h2>
        <h4 style="color: #666666;">Pero no te preocupes! </h4>
    </div>
</div>
</div>
<?php
            } else {
              if ($comercios == 0){
?>

<div class="busheader" >
  <div class="busheader__search">
  <div class="jumbotron">
  <h2 class="tittle"><span>Todos los productos</span></h2>
  <form method="get" action="/buscar">
    <input type="text" class="prodsearch form-control" id="dato" name="productos" placeholder="Buscar productos...">
    <button type="submit" class="hidden"></button>
    </form>
    </div>
  </div>
</div>
<br>
 <?= $this->element('side-menu-prod') ?>
<div class="buscarpage">
<div class="productos-container col-md-9">

<div class="container thumbnail" style="padding-top: 15px;">
<div class="col-xs-12">
 <div class="paginator">
        <ul class="pagination" style="margin: 0;">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        
    </div>
    </div>
<?php
 $i = 0;
 foreach ($variable as $producto): ?>
               <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-3 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
                       <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick=" pmodal(this);">
                    <div class="preloader"></div>
                    <div class="preview" style="
                          background-image: url(../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg);
                          background-size: cover;
                          background-repeat: no-repeat; 
                          height: 100%; width: 100% !important;" >
                    <img class="" onload="dimensionar(this);" src=<?= $producto->imagenes_productos[0]->foto ?> alt="">
                    </div>

                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo ?></span>
                        </h3>
                         <img src="../../../img/pointer.svg" style="height: 30px;" alt=""> 
                        <h5>
                        <a  >
                            <span><?= $producto->negocio->nombre ?></span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                       <h3 class="text-danger">  
                            <?php
                        if (isset($producto->precio)) {
                        ?>
                            <span>$<?= $producto->precio ?></span><sup>00</sup>
                        <?php   
                        }
                        ?>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
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
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}.')]) ?></p>
    </div>
    </div>
</div>
</div>
</div>
<?php
} else {
  ?>
  <div class="busheader">
  <div class="busheader__search">
  <div class="jumbotron">
  <h2 class="tittle"><span>Comercios en Guaminí</span></h2>
    <input type="text" class="prodsearch form-control" placeholder="Buscar Comercios...">
    </div>
  </div>
</div>
  <div class="comercio">
    <nav class="navbar navbar-default bshadow">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Todos</a></li>
          <li><a href="?comercios=Moda">Moda</a></li>
          <li><a href="?comercios=Regaleria">Regaleria</a></li>
          <li><a href="?comercios=Tecnología">Tecnología</a></li>
          <li><a href="?comercios=Bazar">Bazar</a></li>
          <li><a href="?comercios=Jugueteria">Jugueteria</a></li>
          <li class="dropdown">
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
          </li>
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
        <div class="card" style="">
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
</div>

</div>
<?= $this->element('footer') ?>
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

<script>  
    $('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
    });
    </script>
