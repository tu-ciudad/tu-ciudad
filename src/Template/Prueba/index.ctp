
<?php
/**
  * @var \App\View\AppView $this
  */
?>

 <style>

  .ver-prod {
    position: absolute;
    width: 50%;
    text-align: left;
  

  }
  .ver-prod img {
    position: absolute;
    float: left;
    left: 0px;
    top: 0px;
  }
  .ver-prod div{
  position: absolute;
  float: left;
  left: 25px;
  top: 0px;
 
  }
  .content-bot h3 {
    margin: 0;
  }
  .content-bot div {
    margin: 0;
    width: 100%;
    text-align: left;

  }
</style>

 <div class="owl-carousel owl-theme">
<div class="ellipsis" style="width: 100px; border: 1px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
<div class="ellipsis multiline" style="max-width: 5%; height: 40px; border: 1px solid black; "><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></div>
<div class="homeprod "  > <!-- producto -->
              <div class="producto1" onclick="dataLayer.push({'event': 'producto-visited'});">
                  <div class="item" style="word-wrap: nowrap; height: 200px; overflow: visible;" data-toggle="modal" data-target="#modalProduct" pid="asd" onclick="pmodal(this);">
                      <div class="preloader"></div>
                      <div class="preview" style="
                          background-image: url(../../files/ImagenesProductos/9ad9ddf1f5721a670fabd95aefb9e737.jpg);
                          background-size: cover;
                          background-repeat: no-repeat; 
                          height: 100%; width: 100% !important;" >
                        <img class="" style="opacity: 0;" onload="dimensionar(this); dataLayer.push({'event': 'producto-mostrado','namep': 'asdasdasd', 'namen': 'asd'});" src=/files/ImagenesProductos/asd alt="">
                      </div>
                      <div class="content">
                        <h3>
                          <span id="tituloGTM">asd</span> <!-- $producto->titulo -->
                        </h3>
                           
                        <h5>
                          <a>
                            <span id="negocioGTM">asd</span>
                          </a>
                        </h5>
                      </div>

                      <div class="content-bot"> 
                       <div class="ver-prod">
                         <img src="../../img/pointer.svg" style="height: 25px; width: 25px;" alt="">
                         <div>ver</div>
                       </div>
                       <h3 class="text-danger">  
                        
                       
                       
                        <span>$123</span><sup>00</sup>
                        
                       </h3>
                       <div class="hidden-md hidden-lg ellipsis " style="height: 20px;"><p style="height: 20px;">adasdasdasd asdasdasd asdasd asdasd asdasd</p></div>
                    </div>              
                    </div>
                </div>
    </div>

    </div>
    <div style="margin-bottom: 400px;"></div>
<style>
.owl-carousel {
display: inherit;
	}
	.ellipsis {
    white-space: nowrap;
    overflow: hidden;
}

.ellipsis.multiline {
    white-space: normal;
}
</style>
<script>
	(function($) {
    $.fn.ellipsis = function()
    {
        return this.each(function()
        {
            var el = $(this);

            if(el.css("overflow") == "hidden")
            {
                var text = el.html();
                var multiline = el.hasClass('multiline');
                var t = $(this.cloneNode(true))
                    .hide()
                    .css('position', 'absolute')
                    .css('overflow', 'visible')
                    .width(multiline ? el.width() : 'auto')
                    .height(multiline ? 'auto' : el.height())
                    ;

                el.after(t);

                function height() { return t.height() > el.height(); };
                function width() { return t.width() > el.width(); };

                var func = multiline ? height : width;

                while (text.length > 0 && func())
                {
                    text = text.substr(0, text.length - 1);
                    t.html(text + "...");
                }

                el.html(t.html());
                t.remove();
            }
        });
    };
})(jQuery);
</script>
<script type="text/javascript">
$(".ellipsis").ellipsis();
</script>
<?= $this->element('footer') ?>



