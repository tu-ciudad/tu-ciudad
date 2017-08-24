<hr>
<h3 class="catetext" style="margin-top: 25px;">Deportivo <a href="/buscar?categorias=deporte+deportivo&ref=feedhome" class="btn btn-xs btn-default" style="text-transform: initial;">Ver más</a></h3>
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
                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src=/files/ImagenesProductos/<?= $producto->imagenes_productos['0']->foto?> alt="">
                      </div>
                      <div class="content">
                        <h3>
                          <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                           <img src="../../../img/pointer.svg" style="height: 30px;" alt=""> 
                        <h5>
                          <a>
                            <span><?= $producto->negocio->nombre ?></span>
                          </a>
                        </h5>
                      </div>

                      <div class="content-bot"> 
                       <h3 class="text-danger">  
                        <?php 
                        if (isset($producto->precio)) {
                         if (sizeof($precio)==2) {  
                        ?>
                        <span>$<?= $precio[0] ?></span><sup><?= $precio[1] ?></sup>
                        <?php } else { ?>
                        <span>$<?= $precio[0] ?></span><sup>00</sup>
                        <?php }} ?>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
                    </div>               
                    </div>
                </div>
    </div>
    <?php
                $i=$i+1;
              
 } ?>
</div>


<h3 class="catetext">Elaboraciones y de rotisería <a href="/buscar?categorias=rotiseria+comida+elaboraciones&ref=feedhome" class="btn btn-xs btn-default" style="text-transform: initial;">Ver más</a></h3>
        <div class="owl-carousel owl-theme">
          

      <?php

 foreach ($matriz[1] as $producto) { 
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
                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src=/files/ImagenesProductos/<?= $producto->imagenes_productos['0']->foto?> alt="">
                      </div>
                      <div class="content">
                        <h3>
                          <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                           <img src="../../../img/pointer.svg" style="height: 30px;" alt=""> 
                        <h5>
                          <a>
                            <span><?= $producto->negocio->nombre ?></span>
                          </a>
                        </h5>
                      </div>

                     <div class="content-bot"> 
                       <h3 class="text-danger">  
                        <?php 
                        if (isset($producto->precio)) {
                         if (sizeof($precio)==2) {  
                        ?>
                        <span>$<?= $precio[0] ?></span><sup><?= $precio[1] ?></sup>
                        <?php } else { ?>
                        <span>$<?= $precio[0] ?></span><sup>00</sup>
                        <?php }} ?>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
                    </div>                   
                    </div>
                </div>
    </div>
    <?php
                $i=$i+1;
              
 } ?>
</div>


<h3 class="catetext">infantil <a href="/buscar?categorias=infantil+juguetes&ref=feedhome" class="btn btn-xs btn-default" style="text-transform: initial;">Ver más</a></h3>
       <div class="owl-carousel owl-theme">
          

      <?php

 foreach ($matriz[2] as $producto) { 
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
                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src=/files/ImagenesProductos/<?= $producto->imagenes_productos['0']->foto?> alt="">
                      </div>
                      <div class="content">
                        <h3>
                          <span><?= $producto->titulo?></span> <!-- $producto->titulo -->
                        </h3>
                           <img src="../../../img/pointer.svg" style="height: 30px;" alt=""> 
                        <h5>
                          <a>
                            <span><?= $producto->negocio->nombre ?></span>
                          </a>
                        </h5>
                      </div>

                      <div class="content-bot"> 
                       <h3 class="text-danger">  
                        <?php 
                        if (isset($producto->precio)) {
                         if (sizeof($precio)==2) {  
                        ?>
                        <span>$<?= $precio[0] ?></span><sup><?= $precio[1] ?></sup>
                        <?php } else { ?>
                        <span>$<?= $precio[0] ?></span><sup>00</sup>
                        <?php }} ?>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
                    </div>                     
                    </div>
                </div>
    </div>
    <?php
                $i=$i+1;
              
 } ?>
</div>