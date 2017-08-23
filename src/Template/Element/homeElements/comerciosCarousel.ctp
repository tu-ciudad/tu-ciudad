  <div class="owl-carousel owl-theme" id="carucomer" style=" height: 300px; margin-left: -5px;">
<?php
            $i = 0;
            foreach ($negocios as $negocio) {
            ?>
            <div class="comercio-card  " style="width: 330px; ">
            <a href=<?= '/negocios/perfil/'.$negocio->id?>>
                <div class="card" style="min-height: 275px; max-height: 275px;" >
                    <div class="preview" style="
                      background-image: url(../../img/comerimg.jpg);
                      background-size: cover;
                      background-repeat: no-repeat; 
                      height: 100%; width: 100% !important;" >
                    <img class="card-img-top" style="opacity: 0; width: 100%;" src=<?= $negocio->imagenes_negocios[0]->foto?> alt="Card image cap" onload="comready(this);">
                    </div>
                    <div class="card-block">
                        <h4 class="card-title"><?= $negocio->nombre?></h4>
                        <p class="card-text"><?= $negocio->descripcion?></p>
                    </div>
                </div>
            </a>
            </div>
            <?php
            $i = $i+1;
            }
            ?>
  </div>

  <script>
    $(document).ready(function(){
  $("#carucomer").owlCarousel({
      margin:0,
    loop:true,
    autoWidth:true,
    items:5,
      dots: true,
      autoplay:true,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"] ,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
            margin: 5,
            
        },
        600:{
            items:3,
            
        },
        1000:{
            items:5,
            
        }
    }  
    
  });
});
    </script>