<script>
  function dimensionar(elem){
    
    $(elem).css({opacity: '1'});
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
        
        filter: blur(10px);
        -webkit-filter: blur(10px);
      }
</style>
<div class="container" style="max-width: 800px; margin-top: 50px;">
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 col-min"> <!-- producto -->
               <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
        <div class="item " data-toggle="modal" data-target="#modalProduct" pid="1" onclick="pmodal(this);">
                   
                    <div class="preview" style="background-image: url(../../files/imagenesproductos/3f51276d05f00bd2fdc978a5784108de_th.jpg); background-size: cover;
        background-repeat: no-repeat; 
        height: 100%;"> 
                        <img class="" style="opacity: 0;" onload="dimensionar(this);" src='../../files/imagenesproductos/3f51276d05f00bd2fdc978a5784108de.jpg' alt="">
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

