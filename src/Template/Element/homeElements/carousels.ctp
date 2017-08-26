<?php 
 $carou = ['Ofertas','Deportivo','Infantil'];
 $link = ['oferta', 'deportivo+deporte', 'infantil+juguete']
 ?>
<hr>
<h3 class="catetext" style="margin-top: 25px;"><?= $carou[0] ?> <a href="/buscar?categorias=<?= $link[0] ?>&ref=feedhome" class="btn btn-xs btn-default" style="text-transform: initial;">Ver más</a></h3>
        <div class="owl-carousel owl-theme">
      <?php

 $i = 0;
 foreach ($matriz[0] as $producto) { 
  $precio = explode(".",$producto->precio,2);
 ?>    
        <div class="homeprod" > <!-- producto -->
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
    </div>
    <?php
                $i=$i+1;
              
 } ?>


<div class="homeprod" > <!-- producto -->
              <div class="producto1" >
              <div class="morecat">
                  <div class="item">
                      <a href="/buscar?categorias=<?= $link[0] ?>&ref=lastItemCarousel">
                      <div class="content-top">
                        <h3>Ver más</h3>
                      </div>
                      <div class="content-mid">
                        <img src="../../img/pointer.svg" style="height: 40px;" alt="">
                       
                      </div>
                      <div class="content-bot-more"> 
                       <h3><?= $carou[0] ?></h3>
                      </div>
                      </a>
                    </div>              
                    </div>
                </div>
    </div>

</div>
<style>

</style>


<h3 class="catetext" style="margin-top: 25px;"><?= $carou[1] ?> <a href="/buscar?categorias=<?= $link[1] ?>&ref=feedhome" class="btn btn-xs btn-default" style="text-transform: initial;">Ver más</a></h3>
        <div class="owl-carousel owl-theme">
          

      <?php

 foreach ($matriz[1] as $producto) { 
  $precio = explode(".",$producto->precio,2);
 ?>    
        <div class="homeprod" > <!-- producto -->
              <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});" >
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
                            <span><?= $producto->negocio->nombre ?></span>
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
    </div>
    <?php
                $i=$i+1;
              
 } ?>
<div class="homeprod" > <!-- producto -->
              <div class="producto1" >
              <div class="morecat">
                  <div class="item">
                      <a href="/buscar?categorias=<?= $link[1] ?>&ref=lastItemCarousel">
                      <div class="content-top">
                        <h3>Ver más</h3>
                      </div>
                      <div class="content-mid">
                        <img src="../../img/pointer.svg" style="height: 40px;" alt="">
                       
                      </div>
                      <div class="content-bot-more"> 
                       <h3><?= $carou[1] ?></h3>
                      </div>
                      </a>
                    </div>              
                    </div>
                </div>
    </div>
</div>



<h3 class="catetext" style="margin-top: 25px;"><?= $carou[2] ?> <a href="/buscar?categorias=<?= $link[2] ?>&ref=feedhome" class="btn btn-xs btn-default" style="text-transform: initial;">Ver más</a></h3>
       <div class="owl-carousel owl-theme">
          

      <?php

 foreach ($matriz[2] as $producto) { 
  $precio = explode(".",$producto->precio,2);
 ?>    
        <div class="homeprod" > <!-- producto -->
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
                          <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                        <h5>
                          <a>
                            <span><?= $producto->negocio->nombre ?></span>
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
    </div>
    <?php
                $i=$i+1;
              
 } ?>
 <div class="homeprod" > <!-- producto -->
              <div class="producto1" >
              <div class="morecat">
                  <div class="item">
                      <a href="/buscar?categorias=<?= $link[2] ?>&ref=lastItemCarousel">
                      <div class="content-top">
                        <h3>Ver más</h3>
                      </div>
                      <div class="content-mid">
                        <img src="../../img/pointer.svg" style="height: 40px;" alt="">
                       
                      </div>
                      <div class="content-bot-more"> 
                       <h3><?= $carou[2] ?></h3>
                      </div>
                      </a>
                    </div>              
                    </div>
                </div>
    </div>
</div>
