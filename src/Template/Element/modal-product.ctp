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
    .carousel-indicators li img{
      width: 60px;
      height: 60px;
    }
</style>
<div id="modalProduct" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog px">
    <div class="modal-content">
    <h4 class="modal-title _4-i0 nNombre" id="l-name"></h4>
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
                <img src='' alt="" />
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
    .vermasde a:hover {text-decoration:nounderline; }
    .vermasde a:link {text-decoration:none; } /* Link no visitado*/
    .vermasde a:visited {text-decoration:none; } /*Link visitado*/
    .vermasde a:active {text-decoration:none;  } /*Link activo*/
    
  </style>
  <div class="vermasde">
  <br>
    <a href="" id="vermaslink" ><h2 style="margin-bottom: 0; font-size: 20px;">Ver más de </h2><h1 id="vermash1" style="margin-top: 0; font-size: 30px;"></h1></a>
  </div>
    

	</center>

</div>
</div></div>
<div class="modal-footer" id="" style="padding: 0; ">
<div class="col-md-6">
<div id='carousel-custom' data-ride='carousel'>
  <ol class='carousel-indicators' id="carui">
        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='' alt='' /></li>
        
        

    </ol>
 </div></div>
 <div class="col-md-6">
		<center>
			<p> 
	<h4 class="marg"><span class="glyphicon glyphicon-share-alt"></span> Compartir</h4>
	<a class="btn btn-primary social-login-btn social-facebook" id="share-prod-fb" ><i class="fa fa-facebook"></i></a>
<!-- 	<a class="btn btn-primary social-login-btn social-twitter" href="/auth/twitter"><i class="fa fa-twitter"></i></a>
	<a class="btn btn-primary social-login-btn social-linkedin" href="/auth/linkedin"><i class="fa fa-linkedin"></i></a>
	<a class="btn btn-primary social-login-btn social-google" href="/auth/google"><i class="fa fa-google-plus"></i></a> -->
			</p>
		</center>
 </div>  
	</div>

<!-- fin row -->
<!-- fin cuerpo -->
      
  	</div>
  </div>
</div>



<script>
  $('#modalProduct').on('show.bs.modal', function (e) {
  if (window.innerWidth < 992) {
    return e.preventDefault();
  }
})
</script>