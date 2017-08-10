<script>
  function dimensionar(elem){
    
    $(elem).css({opacity: '1'});
    $(elem).parent().siblings('div .preloader').removeClass('preloader');
    $(elem).parent().removeClass('preview');
    $(elem).parent().css({'background-image':''});
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  }
  function dimensionar1(elem){
    
    $(elem).css({opacity: '1'});
    $(elem).parent().siblings('div .preloader1').removeClass('preloader1');
    $(elem).parent().removeClass('preview');
    $(elem).parent().css({'background-image':''});
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  }

  function dimensionar2(elem){
    
    $(elem).css({opacity: '1'});
    $(elem).parent().siblings('div .preloader2').removeClass('preloader2');
    $(elem).parent().removeClass('preview');
    $(elem).parent().css({'background-image':''});
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  }
</script>

<style>
    .preview {
        position: relative;
        /z-index: 1000;
        filter: blur(10px);
        -webkit-filter: blur(10px);
      }
      .preloader {
        position: absolute;
        z-index: 1000;
  width: 25px;
  height: 25px;
  top: calc(35% - 12px);
  left: calc(50% - 12px);
  border: 3px solid #ccc;
  border-top: 3px solid #666;
  border-radius: 50%;
  animation-name: girar;
  animation-duration: 1.3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes girar {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.preloader1 {
        position: absolute;
        z-index: 1000;
  width: 25px;
  height: 25px;
  /top: calc(50% - 12px);
  /left: calc(50% - 12px);
  border: 3px solid #ccc;
  border-top: 3px solid #666;
  border-radius: 50%;
  animation-name: girar;
  animation-duration: 1.3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes girar {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.preloader2 {
        position: absolute;
        z-index: 1000;
  width: 25px;
  height: 25px;
  top: 0;
  left: calc(100% - 25px);
  border: 3px solid #ccc;
  border-top: 3px solid #666;
  border-radius: 50%;
  animation-name: girar;
  animation-duration: 1.3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes girar {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
</style>
<div class="container" style="max-width: 800px; margin-top: 50px;">
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader"></div>
                    <div class="preview" style="background-image: url(.../../files/imagenesproductos/919e2e56028d06f3002f93f63d559f46_th.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%; width: 100%;" > 

                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='http://lorempixel.com/800/800' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Blur</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>La Maga Comidas</span>
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
                       <h4 class="hidden-md hidden-lg"><span>Test Blur</span></h4>
                    </div>

            
        </div></div>
    </div> <!-- /producto -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader1"></div>
                    <div class="preview" style="background-image: url(.../../files/imagenesproductos/blur85_th.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%;"> 

                        <img class="" style="opacity: 0;" onload="dimensionar1(this);" src='http://lorempixel.com/800/800' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Blur</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>La Maga Comidas</span>
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
                       <h4 class="hidden-md hidden-lg"><span>Test Blur</span></h4>
                    </div>

            
        </div></div>
    </div> <!-- /producto -->

    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   <div class="preloader2"></div>
                    <div class="preview" style="background-image: url(.../../files/imagenesproductos/blur90_th.jpg); background-size: contain;
        background-repeat: no-repeat; 
        height: 100%;"> 

                        <img class="" style="opacity: 0;" onload="dimensionar2(this);" src='http://lorempixel.com/800/800' alt="">
                    
                   </div>
                    
                    <div class="content">
                        <h3>
                            <span>Test Blur</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>La Maga Comidas</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                        <a href="../../productos/ver/" class="visible-xs visible-sm">
                          <div class="btn-ver">Ver</div>
                        </a>
                       <h3 class="text-danger">  
                            <span>$420</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Test Blur</span></h4>
                    </div>

            
        </div></div>
    </div> <!-- /producto -->
</div>

<div class="" style="height: 800px;"></div>

<?= $this->element('footer') ?>

