<div class="col-md-3" id="side-menu">
	<div class="side-menu thumbnail " style="padding: 0;"  data-offset-top="280">
	<div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <div class="navbar-brand" href="#" >
                    Categorias
                </div>
                <div class="comercio"> 
                <div class="srch">	
          		<input type="text" name="search" placeholder="Buscar..">
                </div> 
          </div>
            </div>

           

            
        </div>

    </div>
		<nav class="nav-side-menu ">
			<ul class="nav  tabs" style="margin-top: 50px;">
				<li class="active"><?= $this->Paginator->sort('precio') ?></li>
				<li class="dropdown">
		          <a href="" class="dropdown-toggle" data-toggle="dropdown">Articulos deportivos <span class="fa fa-angle-down" style="position: absolute; top: 20%; right: 20px; font-size: 28px;"></span></a>
		          <ul class="dropdown-menu forAnimate" role="menu">
		            <li><a href="?productos=Pesca">Pesca</a></li>
		            <li><a href="?productos=Ejersicio">Ejersicio y condicion fisica</a></li>
		            <li><a href="?productos=Deportes">Deportes</a></li>
		          </ul>
		        </li>
		        <li class=""><a href="?productos=Celulares+telefonos" >Celulares y telefonos</a></li>
		        <li class=""><a href="?productos=Juegos+juguetes" >Juegos y juguetes</a></li>
		        <li class=""><a href="?productos=Herramientas+construcción" >Herramientas y construcción</a></li>
		        <li class=""><a href="?productos=Hogar+muebles+jardín" >Hogar, muebles y jardín</a></li>
				<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Moda<span class="fa fa-angle-down" style="position: absolute; top: 20%; right: 20px; font-size: 28px;"></span></a>
		          <ul class="dropdown-menu forAnimate" role="menu">
		            <li><a href="?productos=Hombre">Hombre</a></li>
		            <li><a href="?productos=Mujer">Mujer</a></li>
		            <li><a href="?productos=Niños">Niños</a></li>
		            <li><a href="?productos=Joyería+relojes">Joyería y relojes</a></li>
		            <li><a href="?productos=Carteras+bolsos+accesorios">Carteras bolsos y accesorios</a></li>
		            <li><a href="?productos=Salud+belleza">Salud y belleza</a></li>
		            <li><a href="?productos=Calzado">Calzado</a></li>
		          </ul>
		        </li>
		        <li class=""><a href="?productos=Tecnología" >Tecnología</a></li>
		        
			</ul>
		</nav>
	</div>
</div>




<style>
	 .side-menu .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
      box-shadow: none;
    }
    .side-menu .dropdown-menu > li{
		padding-left: 20px;
    }
    .side-menu .dropdown-menu > li a{
		border: 0;
		color: rgb(83, 131, 211);
    }
    .side-menu a {
    	color: rgb(83, 131, 211);
    }
    .side-menu  li > a{
    	border-bottom: 1px solid rgba(83, 131, 211,0.5);
    }
    .comercio .srch input[type=text] {
    position: absolute;
    top: 1px;
    width: 50px;
    box-sizing: border-box;
    border: 0px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: inherit;
    background-image: url('../img/search.png');
    background-position: 5px 10px; 
    background-repeat: no-repeat;
    padding: 14px 20px 14px 40px;
    cursor: pointer;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
.comercio .srch input[type=text]:focus {
    background-color: white;
    cursor: grab;
    width: 187px;

}
.comercio .srch input[type=text]:hover {
   -ms-transform: scale(1.1);
      /* IE 9 */
      -webkit-transform: scale(1.1);
      /* Chrome, Safari, Opera */
      transform: scale(1.1); 
  }
  .comercio .srch input[type=text]:focus:hover {
   -ms-transform: scale(1);
      /* IE 9 */
      -webkit-transform: scale(1);
      /* Chrome, Safari, Opera */
      transform: scale(1); 
  }
#side-menu .affix {
    top: 70px;
}
@media (max-width: 1000px) {
            .affix {
                position: static;
            }
        }
</style>

<!-- <script>
    $('.side-menu').on('affix.bs.affix', function () { // before affix
    $(this).css({
        /*'top': headerHeight,*/    // for fixed height
            'width': $(this).outerWidth()  // variable widths
    });
});
</script> -->