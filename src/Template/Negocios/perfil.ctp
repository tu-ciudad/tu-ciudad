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
                    <div class="preloader"></div>
                    <div class="preview" style="background-image: url(../../files/ImagenesProductos/blur70_th.jpg); background-size: contain;
                      background-repeat: no-repeat; 
                      height: 100%; width: 100%;" >
                    <img class="" onload="dimensionar(this);" src=<?= $producto->imagenes_productos[0]->foto ?> alt="">
                    </div>
                    <div class="content">
                        <h3>
                            <span><?= $producto->titulo ?></span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a >
                            <span><?= $negocio->nombre ?></span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                       
                       <h3 class="text-danger">  
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
        </div>
    </div>
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
  <?= $negocio->lugare->nombre ?>
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
   <li><?= $producto->imagenes_productos[0]->foto ?></li>
   <li><?= $negocio->id ?></li>
   <li><?= $producto->id ?></li>
   <ul>
   <li><?= count($imagenesproductos[$i]) ?></li>
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
<?= $this->element('footer') ?>

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
$('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
    });
</script>

<!--   <?= dump($productos) ?> 
 <?= dump($negocio) ?>   -->