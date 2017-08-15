<?php
 $i = 0;
 foreach ($productos as $producto) { 
 ?>
              <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-min"> <!-- producto -->
                <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
                  <div class="item" data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">
                      <div class="preloader"></div>
                      <div class="preview" style="
                          background-image: url(../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg);
                          background-size: cover;
                          background-repeat: no-repeat; 
                          height: 100%; width: 100% !important;" >
                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src=<?= $producto->imagenes_productos['0']->foto?> alt="">
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
                            
                        <h3 class="text-danger">  
                          <span>$<?= $producto->precio?></span><sup>00</sup>
                        </h3>
                        <h4 class="hidden-md hidden-lg"><span><?= $producto->titulo ?></span></h4>
                      </div>           
                    </div>
                </div>
              </div> <!-- /producto -->
                 
                <?php
                $i=$i+1;
              
 } ?>