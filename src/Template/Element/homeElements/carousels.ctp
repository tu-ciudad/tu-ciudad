<h3 class="catetext">Deportivo</h3>
        <div class="owl-carousel owl-theme">
          

      <?php
 $i = 0;
 foreach ($matriz[0] as $producto) { 
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
                          <span>$<?= $producto->precio?></span><sup>00</sup>
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


<h3 class="catetext">Gastronomía</h3>
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
                          <span>$<?= $producto->precio?></span><sup>00</sup>
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


<h3 class="catetext">ropa de hombre</h3>
        <div class="owl-carousel owl-theme">
          
        <div class="homeprod" > <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(../../img/img1.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../img/img1.jpg' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Producto</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>Comercio Nombre</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <!-- <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a> -->
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Producto</span></h4>
                    </div>

            
        </div></div>
    </div>
<div class="homeprod" > <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(img1.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../img/img1.jpg' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Producto</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>Comercio Nombre</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <!-- <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a> -->
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Producto</span></h4>
                    </div>

            
        </div></div>
    </div>
<div class="homeprod" > <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(img1.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../img/img1.jpg' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Producto</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>Comercio Nombre</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <!-- <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a> -->
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Producto</span></h4>
                    </div>

            
        </div></div>
    </div>
<div class="homeprod" > <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(img1.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../img/img1.jpg' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Producto</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>Comercio Nombre</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <!-- <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a> -->
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Producto</span></h4>
                    </div>

            
        </div></div>
    </div>
<div class="homeprod" > <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(img1.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../img/img1.jpg' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Producto</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>Comercio Nombre</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <!-- <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a> -->
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Producto</span></h4>
                    </div>

            
        </div></div>
    </div>
<div class="homeprod" > <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(img1.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../img/img1.jpg' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Producto</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>Comercio Nombre</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <!-- <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a> -->
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Producto</span></h4>
                    </div>

            
        </div></div>
    </div>

</div>