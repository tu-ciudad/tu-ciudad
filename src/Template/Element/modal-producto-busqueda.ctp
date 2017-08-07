<style>
    .pPrecio {
        //font-weight: bold;
    }
    .pPrecio:before {
        content: "$";
    }
    .pCuerpo {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 18px;
        color: #666666;
        margin-top: 20px;
    }
    .related {
        margin-top: 10px;
        max-width: 400px;
        padding-top: 30px;
        /padding-bottom: 5px;
        border-left: 2px solid #ccc;
        max-height: 80px;
    }
    .related h4 {
       color: #ccc;
    }
    .related li {
         list-style:none;
        
    }

    @media (min-width: 900px) {

      .comercio-card {
          width: 230px;
          position: absolute;
          top: 125%;
          left: calc(50% - 115px);


      }
      .comercio-card .card-title{
          margin: 3px;
      }

      .comercio-card .card{
          margin: 0;
          
      }
      .comercio-card .card:hover {
        border-color: rgba(0, 0, 0, 0.15);
      }
     .comercio-card .card-img-top {

        
        width: 100%;
        max-height: 100px;
        overflow: hidden;
        background-image: url(../../img/comercio1.jpg);
        background-position: center center;
         display:inline-block;
         opacity: .8;
         filter: alpha(opacity=100);
         transition: all 0.3 ease-in;
}
    .comercio-card .card-img-top:hover {
      opacity: 1;
    }
    .comercio-card .card-img-top:hover:after {
      content: 'Ver más de este comercio';
      font-size: 20px;
      color: black;
      position: absolute;
      top: 0;
      left: 0px;
      width: 100%;
      height: 100px;
      opacity: 1;
      background-color: rgba(255, 255, 255,0.8);
    }
}

 #pTitulo {
  margin: 0;
 }
 .modal-body {
  padding-bottom: 3px;
 }
 .pPrecio {
  margin-top: 5px;
 }
 .pCuerpo {
  margin-top: 5px;
  margin-bottom: 15px;
 }
 .modal-backdrop { 
    background: #000; /* For browsers that do not support gradients */
    opacity: 0.9 !important;
    /*background: -webkit-linear-gradient(rgba(0, 0, 0, 0.6) 540px, rgba(0, 0, 0, 0.99) 50px); /* For Safari 5.1 to 6.0 
    background: -o-linear-gradient(rgba(0, 0, 0, 0.6) 534px, rgba(0, 0, 0, 0.99) 50px);  For Opera 11.1 to 12.0 
    background: -moz-linear-gradient(rgba(0, 0, 0, 0.6) 540px, rgba(0, 0, 0, 0.99) 50px); /* For Firefox 3.6 to 15 
    background: linear-gradient(rgba(0, 0, 0, 0.6) 540px, rgba(0, 0, 0, 0.99) 50px); /* Standard syntax 
    */
 }

  .modal {
    transition: all 0.1s ease-in !important;
  }
  .modal.fade .modal-dialog {
    transform: translate(0, 0);
  }
   .carousel-indicators li img{
      width: 60px;
      height: 60px;
    }
</style>
<div id="modalProduct" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog px" >
    <div class="modal-content" >
    <h4 class="modal-title _4-i0 nNombre" id="l-name">asdasd</h4>
      <span class="close pclose" data-dismiss="modal" aria-label="Close">×</span>
      <div class="modal-body" style="background-color: #FAFAFA;">
	
<!-- cuerpo -->

    <div class="row">
<div class=" col-sm-4 ">
<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
    <div class='carousel-outer'>
        <!-- me art lab slider -->
        <div class='carousel-inner' id="caru">
            <div class='item thumbnail active'>
                <img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt="" />
            </div>
            
        </div>
            
        <!-- sag sol -->
       
    </div>
    
    <!-- thumb -->
    
</div>
</div>
<div class="col-md-8">
	<center>
	<h2 id="pTitulo">Producto Name
	<ul class="list list-inline">
         <li><del class="text-danger"><h3>$99.99</h3></del></li>
         
     </ul>

     </h2>
     <h2 class="text-danger pPrecio" id="pPrecio">$49.99</h2>
	<p class="pCuerpo" id="pCuerpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam delectus atque vel similique illo, praesentium, ratione eligendi esse officiis, accusantium nisi! Quis modi quia accusantium, sunt ab exercitationem nam.</p>
	<style>
    .vermash1 {
      
    }
    .vermasde h2 {
      
    }
    .vermasde a:hover {text-decoration:nounderline; }
    .vermasde a:link {text-decoration:none; } /* Link no visitado*/
    .vermasde a:visited {text-decoration:none; } /*Link visitado*/
    .vermasde a:active {text-decoration:none;  } /*Link activo*/
    
  </style>
  <div class="vermasde">
  <br>
    <a href="" id="vermaslink" ><h2 style="margin-bottom: 0; font-size: 20px;">Ver más de </h2><h1 id="vermash1" style="margin-top: 0; font-size: 30px;"></h1></a>
  </div>
  
            <!-- <div class="comercio-card  " >
              <a href="../negocios/perfil/1">
                <div class="card" style="">
                    <div class="card-img-top" style="background-image: no-repeat center center;" src="" alt="Card image cap"></div>
                  <div class="card-block">
                      <h4 class="card-title">Comercio Name</h4>
                      <p class="card-text"></p>
                    </div>
                </div>
              </a>
              </div> -->

	</center>

</div>
</div></div>
<div class="modal-footer" id="" style="padding: 0; ">
<div class="col-md-6">
<div id='carousel-custom' data-ride='carousel'>
  <ol class='carousel-indicators' id="carui">
        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='http://images.asos-media.com/inv/media/8/2/3/3/5313328/print/image1xxl.jpg' alt='' /></li>
        
        

    </ol>
 </div></div>
 <div class="col-md-6">
		<center>
			<p> 
	<h4 class="marg"><span class="glyphicon glyphicon-share-alt"></span> Compartir</h4>
	<a class="btn btn-primary social-login-btn social-facebook" id="share-prod-fb"><i class="fa fa-facebook"></i></a>
	<a class="btn btn-primary social-login-btn social-twitter" href="/auth/twitter"><i class="fa fa-twitter"></i></a>
	<a class="btn btn-primary social-login-btn social-linkedin" href="/auth/linkedin"><i class="fa fa-linkedin"></i></a>
	<a class="btn btn-primary social-login-btn social-google" href="/auth/google"><i class="fa fa-google-plus"></i></a>
			</p>
		</center>
 </div>  
	</div>

<!-- fin row -->
<!-- fin cuerpo -->
      
  	</div>
  </div>
</div>

<?php
 $i = 0;
 foreach ($variable as $producto): ?>

<ul id="pid<?= $i?>" class="hidden">
   <li><?= $producto->titulo ?></li>
   <li><?= $producto->titulo ?></li>
   <li><?= $producto->precio ?></li>
   <li><?= $producto->cuerpo ?></li>
   <li><?= $producto->imagenes_productos[0]->foto ?></li>
   <li><?= $producto->negocios_id ?></li>
   
   <!-- <ul>
   <li><?= count($imagenesproductos[$i]) ?></li>
   <?php

        foreach ($producto->imagenes_productos[$i] as $imagen):
        ?>

        <li><?= $imagen->foto ?></li>
        <?php

        endforeach; ?> 

   </ul> -->
        </ul>
<?php
                $i=$i+1;
 endforeach; ?>

<script>
  $('#modalProduct').on('show.bs.modal', function (e) {
  if (window.innerWidth < 992) {
    return e.preventDefault();
  }
})
</script>