<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>
.buscar .header .jumbotron {
     background-color: inherit;
    background-image:url('../img/buscar.jpg') ;
    background-position: center center; 
    background-repeat: no-repeat;
    height: 300px;
    text-align: center;
    box-shadow: 1px 2px 1px #ccc;
}
.buscar .header .jumbotron .jumbox  {
    margin: 0 auto;
    margin-top: 0 auto;
    background-color: rgba(248, 248, 248, 0.1);
    /height: 500px;
    width: 50%;
    text-align: center;
    margin-bottom: 30px;
    margin-top: 100px;
    padding-bottom: 10px;
    padding-top: 10px;
    border-radius: 5px;
    
}
    .buscar .jumbotron {
    background-color: #F8F8F8;
    height: 100px;
    text-align: center;
    padding: 1px;
    box-shadow:  1px 1px #ccc;
}
.buscar .title {
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
   / display: inline-block;
   / margin-bottom: 20px;
    font-size: 43px;
    /padding-bottom: 10px;
    color: #fafafa;
    text-shadow: 1px 1px 1px rgba(1, 1, 1, 0.9);
}

.buscar .navbar .container-fluid {
	margin: 0;
	padding: 0;
}
.buscar .bshadow {
    border-bottom: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.buscar .navbar-nav {
  float: none;
  text-align: center;
}

.buscar .navbar-nav li {
  float: none;
  display: inline-block;
  margin: 0;
  padding: 0;
  

}
.buscar .navbar-nav  .active a{
    cursor: default;
        background-color: #5383d3; 
        color: #fff;
}
.buscar .navbar-nav  .active a:hover, .buscar .navbar-nav  .active a:active, .buscar .navbar-nav  .active a:focus{
    cursor: default;
        background-color: #5383d3; 
        color: #fff;
}
.buscar .navbar-nav li:hover {
  background-color: #BABABA;

}
.non-search .tittle {
	font-family: Arial,Helvetica,"Nimbus Sans L",sans-serif;
	color: #666666;
	font-size: 32px;
	text-align: center;
}

.non-search .categorias {
	margin: 0 auto;
	max-width: 600px;
	padding: 15px 20px 0 0;
	vertical-align: top;

}
.non-search .categorias h3 {
	margin: 5px 0 8px;
	font-size: 13px;
	color: #999;
	line-height: 1em;
	

}
.non-search .categorias ul{
    list-style: none;
}
.non-search .categorias .list{
    margin-right: 3%;
    /float: left;
    width: 30%;

}
.non-search .categorias .list li a{
    -webkit-border-radius:4px;
    border-radius:4px;
    background-color:#ddd;
    color:#444;
    /line-height:22px;
    padding:1px 10px;
    display:inline-block;
    /max-width:85%;
    vertical-align:middle;
    margin: 3px;
    float: left;
    

}
.non-search .categorias .list li a:hover{
    text-decoration:none;
    background-color:#B7B7B7;
}

.mainpage .jumbotron {
    background-color: #F8F8F8;
    height: 100px;
    text-align: center;
    padding: 1px;
    box-shadow:  1px 1px #ccc;
}

.mainpage .title {
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
   / display: inline-block;
   / margin-bottom: 20px;
    font-size: 37px;
    /padding-bottom: 10px;
    color: #666666;
    padding: 0 auto;
}
</style>

<div class="buscar">
	<div class="header">
    <div class="jumbotron">
    <div class="jumbox">
	<h1><span class="title"> Busqueda &nbsp;&nbsp;</span><img src="../img/store.png" style="top: -15px;" alt=""></h1>
		
	</div>
	</div>
	</div>
</div>
<div class="buscar">
<nav class="navbar navbar-default bshadow">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="col-md-5 active"><a href="#">Articulos</a></li>
      <li class="col-md-5"><a href="#">Comercios</a></li>
      
      
      <!-- <li>
      <div class="comercio">	
      <input type="text" name="search" placeholder="Buscar..">
      </div>
      </li> -->
    </ul>
  </div>
</nav>
</div>


<div class="container">
 <div class="mainpage">
    <div class="jumbotron">
    <h2><span class="title"> No encontramos lo que buscas :(</span></h2>
        <h4 style="color: #666666;">Pero no te preocupes! </h4>
    </div>

</div>
</div>
<hr>
<div class="non-search">
	<header>
		<h2 class="tittle">¡Tambien puedes buscar estas categorias!</h2>
	</header>
	<div class="categorias">
		
		<ul class="list">
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
		</ul>
		<ul class="list">
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
		</ul>
		<ul class="list">
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
			<li><a href="#" tittle="Categoria ">Categoria </a></li>
		</ul>

	</div>
</div>

<div style="height: 1000px;"></div>

<?= $this->element('footer') ?>