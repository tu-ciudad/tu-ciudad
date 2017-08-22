<style>
	*, *:before, *:after {
    box-sizing: border-box;
}




.categoriasnav nav.menu {
	background: transparent;
	position: relative;
	height: 40px;
	/height: 100%;
    border-bottom: 1px solid #5383D3;
    border-top: 1px solid #5383D3;
    margin-top: 20px;
}


.categoriasnav .menu > ul > li {
	list-style: none;
	display: inline-block;
	line-height: 40px;
	border-right: 1px solid;
	border-left: 1px solid;
	border-color: transparent;
	
}
.categoriasnav .menu > ul > li:hover {
	background: #fff;
	border-left: 1px solid #5383D3;
	border-right: 1px solid #5383D3;
	border-bottom: 1px solid;
	border-bottom-color: transparent;
	/box-shadow: 0 1px 1px #DDDDDD;
	margin-bottom: -1px;
	text-decoration: underline !important;
	box-shadow: 3px 3px 1px rgba(0,0,0,0.08);
	

}
.categoriasnav .menu > ul li a, .xs-menu li a {
	text-decoration: none;
	/color: #fff;
	 display:block;
	 padding: 0px 24px;
	
    
}
.categoriasnav .menu .licat {
	list-style: none;
	display: inline-block;
	line-height: 25px;
	border: inherit;
	border-right: 1px solid #5383D3;
	padding: 0 40px 0 0;
}
.categoriasnav .menu .licat:hover {
	list-style: none;
	color: inherit;
	background: inherit;
	border: inherit;
	border-right: 1px solid #5383D3;
	box-shadow: inherit;
	text-decoration: none !important;
}
.categoriasnav .active{
	/background:#444 !important;
	
}
.categoriasnav .displaynone{
	display: none;
}
.categoriasnav .xs-menu-cont{
display:none;
}
.categoriasnav .xs-menu-cont > a {
    background: none repeat scroll 0 0 #5383D3;
    border-radius: 3px;
    padding: 3px 6px;
	display: block;
	border-bottom:1px solid #5383D3;
	    box-shadow: 0 1px 2px #5383D3;
		-webkit-box-shadow: 0 1px 2px #5383D3;
		-moz-box-shadow: 0 1px 2px #5383D3;
}
.categoriasnav .xs-menu-cont > a:hover{
 cursor: pointer;
}
  
.categoriasnav .xs-menu li {
color: black;
padding: 14px 30px;
border-bottom: 1px solid #ccc;
background: #5383D3;

}
.categoriasnav .xs-menu  a{
text-decoration:none;
}

.categoriasnav .mega-menu {
   background: none repeat scroll 0 0 #FFFFFF;
    left: 0;
    margin-top: -1px;
    position: absolute;
    width: 100%;
	padding:15px;
	display:none;
	 transition-duration: 0.9s;
	 z-index: 10;
	 border: 1px solid #5383D3;
	 border-top: none;
	 box-shadow: 3px 3px 1px rgba(0,0,0,0.08);
    
}
.categoriasnav #menutoggle i {
    color: black;
    font-size: 33px;
    margin: 0;
    padding: 0;
}


/*--column--*/
.categoriasnav .mm-6column:after, .mm-6column:before, .mm-3column:after, .mm-3column:before{
content:"";
display:table;
clear:both;


}
.categoriasnav .mm-6column, .mm-3column {
 float: left;
 position: relative;
 }
.categoriasnav .mm-6column {
    width: 50%;
}
.categoriasnav .mm-3column {
        width: 25%;
}
.categoriasnav .responsive-img {
    display: block;
    max-width: 100%;

}
.categoriasnav .right-images{
margin-left:25px;
}
.categoriasnav  .right-images {
float: right;
}
 .left-categories-list {
   float: left;
}
.categoriasnav .categories-list li {
    display: block;
    line-height: normal;
    margin: 0;
    padding: 7px 0;
}
.categoriasnav .categories-list li :hover{
		background:inherit !important;
		text-decoration: underline !important;

}
.categoriasnav .categories-list li > a :hover{
		text-decoration: underline !important;
}
.categoriasnav .right-images > p {
    background: none repeat scroll 0 0 #5383D3;
    display: block;
    font-size: 18px;
    line-height: normal;
    margin: 0;
    padding: 5px 14px;
    color: white;
}
.categoriasnav .categories-list span {
    padding-bottom: 3px;
    text-transform: uppercase;
    border-bottom: 1px solid #5383D3;
    font-weight: bold;
    min-width: 190px;
    display: table-cell;
    line-height: 25px;
    font: normal 16px 'Roboto', Helvetica;
}
.categoriasnav .mm-view-more{
	background: none repeat scroll 0 0 #5383D3;
    color: #fff;
    display: inline !important;
    line-height: normal;
    padding: 5px 8px !important;
	margin-top:10px;
}
.categoriasnav .display-on{
display:block;
 transition-duration: 0.9s;
}

 /*MediaQuerys*/
 @media (max-width: 600px) {
.categoriasnav .menu {
 display:none;
 }
.categoriasnav  .xs-menu li a {

	 padding:0px;
}
.categoriasnav  .xs-menu-cont{
 display:block ;
 }
 }


/*Animation--*/

.categoriasnav .animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
@-webkit-keyframes fadeIn {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 1;
  }

  100% {
    opacity: 1;
  }
}

.categoriasnav .fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

a.disabled {
  /* Make the disabled links grayish*/
  color: gray;
  /* And disable the pointer events */
  pointer-events: none;
}
</style>
<div class="categoriasnav" style="margin-bottom: 15px;">
<div class="">

			
			
			<nav itemprop="breadcrumb" class="menu">
				<ul>
					<li class="licat" ">Categorias</li>
					<li class="drop-down drop01">
						<a href="../../buscar?categorias=moda">Moda <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					 
						<div class="mega-menu megadrop01 fadeIn animated">
							<div class="mm-3column">
								
								<span class="categories-list">
							<ul>
							<span>Categorías principales</span>
								<li style="margin-top: 5px;"><a href="../../buscar?categorias=">Mujer</a></li>
								<li><a href="../../buscar?categorias=">Hombre</a></li>
								<li><a href="../../buscar?categorias=">Niños</a></li>
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>
							
							</div>
							<div class="mm-3column">
						<span class="categories-list">
						<ul>
							 <span style="border-bottom: 1px solid #5383D3;">Ver</span>

								<li><a class="disabled" href="../../buscar?categorias=">Bijouterie y relojes</a></li>
								<li><a href="../../buscar?categorias=">Carteras, bolsos y accesorios</a></li>
								<li><a href="../../buscar?categorias=">Salud y belleza</a></li>
								<li><a href="../../buscar?categorias=calzado+zapatillas">Calzado</a></li>
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>	
						</div>
						<div class="mm-6column">
						<span class="right-images">
								<img  src="../../img/img1.jpg" width="200px" height="200px">
								<p>Most Popular Styles </p>
				</span>						
							</div>
							
					</div>
			 
					</li>

					<li class="drop-down drop02">
						<a href="../../buscar?categorias=">Tecnología <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					 
						<div class="mega-menu megadrop02 fadeIn animated">
							<div class="mm-3column">
								
								<span class="categories-list">
							<ul>
							<span>Categorías principales</span>
								<li style="margin-top: 5px;"><a class="disabled" href="../../buscar?categorias=">Celulares y accesorios</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">Cámaras y accesorios</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">Computadoras y tablets</a></li>
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>
							
							</div>
							<div class="mm-3column">
						<span class="categories-list">
						<ul>
							 <span style="border-bottom: 1px solid #5383D3;">Otras categorías</span>

								<li><a class="disabled" href="../../buscar?categorias=">Audio, video y GPS para autos</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">Samsung</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">TV, sistemas de audio</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">Consolas y videojuegos</a></li>
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>	
						</div>
						<div class="mm-6column">
						<span class="right-images">
								<img  src="../../img/img1.jpg" width="200px" height="200px">
								<p>Most Popular Styles </p>
				</span>						
							</div>
							
					</div>
			 
					</li>
					
         			<li class="drop-down drop03">
						<a href="../../buscar?categorias=deportivo+deporte?ref=navhome">Artículos deportivos <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					 
						<div class="mega-menu megadrop03 fadeIn animated">
							<div class="mm-3column">
								
								<span class="categories-list">
							<ul>
							<span>Categorías principales</span>
								<li style="margin-top: 5px;"><a href="../../buscar?categorias=">Futbol</a></li>
								<li><a href="../../buscar?categorias=">Hockey</a></li>
								<li><a href="../../buscar?categorias=">Paddle</a></li>
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>
							
							</div>
							<div class="mm-3column">
						<span class="categories-list">
						<ul>
							 <span style="border-bottom: 1px solid #5383D3;">Otras categorías</span>

								<li><a href="../../buscar?categorias=">Ejercicio y condición física</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">Pesca</a></li>
								<li><a class="disabled" href="../../buscar?categorias=">Deportes al aire libre</a></li>
								
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>	
						</div>
						<div class="mm-6column">
						<span class="right-images">
								<img  src="../../img/img1.jpg" width="200px" height="200px">
								<p>Most Popular Styles </p>
				</span>						
							</div>
							
					</div>
			 
					</li>	

					<li class="drop-down drop04">
						<a href="../../buscar?categorias=">Gastronomía <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					 
						<div class="mega-menu megadrop04 fadeIn animated">
							<div class="mm-3column">
								
								<span class="categories-list">
							<ul>
							<span>Categorías principales</span>
								<li style="margin-top: 5px;"><a href="../../buscar?categorias=">De rotiseria</a></li>
								<li><a href="../../buscar?categorias=">De restaurant</a></li>
								<li><a href="../../buscar?categorias=">De supermercado</a></li>
								
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>
							
							</div>
							<div class="mm-3column">
						<span class="categories-list">
						<ul>
							 <span style="border-bottom: 1px solid #5383D3;">Otras categorías</span>
								<li><a href="../../buscar?categorias=">Postres y tortas</a></li>
								<li><a href="../../buscar?categorias=">Elaboraciones</a></li>
								<li><a href="../../buscar?categorias=">Envio a domicilio</a></li>
								
								
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>	
						</div>
						<div class="mm-6column">
						<span class="right-images">
								<img  src="../../img/img1.jpg" width="200px" height="200px">
								<p>Most Popular Styles </p>
				</span>						
							</div>
							
					</div>
			 
					</li>

					<li class="drop-down drop05">
						<a href="../../buscar?comercios=" style="font-weight: bold;">COMERCIOS <i class="fa fa-caret-down" aria-hidden="true"></i></a>
					 
						<div class="mega-menu megadrop05 fadeIn animated">
							<div class="mm-3column">
								
								<span class="categories-list">
							<ul>
							<span>Categorías principales</span>
								<li style="margin-top: 5px;"><a href="../../buscar?comercios=">Moda</a></li>
								<li><a href="../../buscar?comercios=">Regalería</a></li>
								<li><a class="disabled" href="../../buscar?comercios=">Tecnología</a></li>
								<li><a class="disabled" href="../../buscar?comercios=">Hogar y jardín</a></li>
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>
							
							</div>
							<div class="mm-3column">
						<span class="categories-list">
						<ul>
							  <span style="border-bottom: 1px solid #5383D3;">&nbsp;&nbsp;&nbsp;&nbsp;</span> 

								<li><a href="../../buscar?comercios=">Deportivo</a></li>
								<li><a class="disabled" href="../../buscar?comercios=">Pesca</a></li>
								<li><a class="disabled" href="../../buscar?comercios=">Automotor</a></li>
								
								<!-- <li><a class="mm-view-more" href="#">View more →</a></li> -->
							</ul>
						</span>	
						</div>
						<div class="mm-6column">
						<span class="right-images">
								<img  src="../../img/img1.jpg" width="200px" height="200px">
								<p>Most Popular Styles </p>
				</span>						
							</div>
							
					</div>
			 
					</li>
				</ul>
			</nav>
		</div>
	</div>
<script>
$(document).ready(function() {
				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				
			//drop down menu	
					$(".drop01").hover(function() {
						$('.megadrop01').addClass('display-on');
					});
					$(".drop01").mouseleave(function() {
						$('.megadrop01').removeClass('display-on');
					});

					$(".drop02").hover(function() {
						$('.megadrop02').addClass('display-on');
					});
					$(".drop02").mouseleave(function() {
						$('.megadrop02').removeClass('display-on');
					});
					
					$(".drop03").hover(function() {
						$('.megadrop03').addClass('display-on');
					});
					$(".drop03").mouseleave(function() {
						$('.megadrop03').removeClass('display-on');
					});
					
					$(".drop04").hover(function() {
						$('.megadrop04').addClass('display-on');
					});
					$(".drop04").mouseleave(function() {
						$('.megadrop04').removeClass('display-on');
					});

					$(".drop05").hover(function() {
						$('.megadrop05').addClass('display-on');
					});
					$(".drop05").mouseleave(function() {
						$('.megadrop05').removeClass('display-on');
					});

					
			});

	 
</script>