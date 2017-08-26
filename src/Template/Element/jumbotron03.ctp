<?php
/**
  * @var \App\View\AppView $this
  */
  foreach ($negocio->imagenes_negocios as $imagen) {
    if ($imagen->ubicacion = 'portada'){
      $fportada = $imagen->foto;
    }
  }
?>
<div class="jumbotron03" style=" /margin-bottom: 5px;">
  <div class="col-md-12">
    <div class="fb-profile-block">
          <div class="fb-profile-block-thumb">
            <img src="<?= $fportada ?>" alt="" title="">
          </div>
          <!-- <div class="profile-img"><a href="#"><img src="http://themeboxer.com/demo/snipp/profile.jpg" alt="" title=""></a></div> -->
          <div class="profile-name">
            <h2><?= $negocio->nombre ?></h2>
            <h3><?= $negocio->descripcion ?></h3>
          </div>
          
          <div class="fb-profile-block-menu">
               <div class="block-menu">
                    <ul>
                      <li><a>Información</a></li>
                      <li>
                        <a href="#"><span class="glyphicon glyphicon-earphone" style="left: -8px;"></span><?= $negocio->telefono ?></a></li>
                        <li class="hidden-xs hidden-sm" id="dirInfo">
                        <a href="#"><span class="glyphicon glyphicon-globe" style="left: -8px;"></span><?= $negocio->direccion ?></a></li>
                      <li class="hidden-xs hidden-sm" id="emailInfo" data-toggle="tooltip" title="Click para ver" data-placement="top">
                        <a href="#" data-toggle="popover" data-content="<?= $negocio->email ?>" data-placement="top"><span class="glyphicon glyphicon-envelope" style="left: -8px;"></span>Email</a></li>
                      <li class="hidden-xs hidden-sm" id="fbInfo"  data-toggle="tooltip" title="Click para ir" data-placement="top">
                        <a href="https://<?= $negocio->perfilfb ?>" target="_blank">Facebook</a></li>
                      <li class="hidden-xs hidden-sm" target="_blank" data-toggle="tooltip" title="Compartir en Facebook" data-placement="top">
                        <a id="shareBtn" href="#"><span class="glyphicon glyphicon-share-alt" style="left: -8px;"></span>Compartir</a></li> 
                      <li class="hidden-md hidden-lg" onclick="moreInfo();">
                        <a >Más...</a></li>

                        <!-- categorias -->
                        <li class="navbar-right hidden-xs hidden-sm" style="margin-right: 0;">
                         <a>Categorias: </a>
                         <a href="../../../buscar?comercios=<?= $negocio->tags[0]->nombre ?>" data-toggle="tooltip" title="ver más de esta categoría" data-placement="top" ><?= $negocio->tags[0]->nombre ?></a>
                        </li>

                    </ul>
               </div>
          </div>
           
        </div>
        <div class="more-info hidden" id="horarios">
             <ul class="ul-more">
               <li><a ><span class="glyphicon glyphicon-globe" style="left: -8px;"></span><?= $negocio->direccion ?></a></li>
               <li data-toggle="popover" data-content="<?= $negocio->email ?>" data-placement="top"><a ><span class="glyphicon glyphicon-envelope" style="left: -8px;"></span>Email</a></a></li>
               <li data-toggle="popover" data-content="<?= $negocio->perfilfb ?>" data-placement="top"><a >Facebook</a></li>
             </ul>
           </div>
  </div>
</div>

<script>
  function moreInfo(){ 
    $('.more-info').removeClass('hidden');
  }
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover(); 
});
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<style>
/***************more-info-jumbotron03************/
.jumbotron03 .arrow { 
margin-bottom: 0;
}
.jumbotron03 .popover { 
  max-width: 300px;
}
.jumbotron03 .more-info {
  border: 1px solid #d3d6db;
  border-top: 0;
  border-left: 0;
  border-radius: 0 0 3px 3px;
  background: #FAFAFA;
  height: 44px;
  position: relative;
  width:100%;
  /overflow:hidden;
  -webkit-transition: all 1s;
}
.jumbotron03 .more-info ul {
  margin:0;
    padding:0;
}
.jumbotron03 .more-info ul li a {
  border-right: 1px solid #e9eaed;
  float: left;
  font-size: 14px;
  font-weight: bold;
  height: 43px;
  line-height: 3.0;
  padding: 0 17px;
  position: relative;
  vertical-align: middle;
  white-space: nowrap;
  color:#4b4f56;
  text-transform:capitalize;
}
.jumbotron03 .more-info ul li {
  display:inline-block;
}

  /*******************************jumbotron03**********************************/


.jumbotron03 .fb-profile-block {
  /margin: auto;
  position: relative;
  width: 100%;
  margin-bottom: 10px;
}
.jumbotron03 img{
    width: 100%;
    /height: auto;
    max-height: 375px;
    min-height: 200px;
}
.jumbotron03 .fb-profile-block-thumb{
  display: block;
  max-height: 375px;
  /overflow: hidden;
  position: relative;
  text-decoration: none;
}
.jumbotron03 .fb-profile-block-menu {

  border: 1px solid #d3d6db;
  border-top: 0;
  border-left: 0;
  border-radius: 0 0 3px 3px;
  background: #FAFAFA;
}
.jumbotron03 .profile-img a{
    bottom: 15px;
    box-shadow: none;
    display: block;
    left: 15px;
    padding:1px;
    position: absolute;
    height: 160px;
    width: 160px;
    background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;
    z-index:9;
}
.jumbotron03 .profile-img img {
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.07);
  height:158px;
  padding: 5px;
  width:158px;
}
.jumbotron03 .profile-name {
  bottom: 60px;
  /left: 50px;
  position: absolute;
  background: rgba(0, 0, 0, .6);
  padding-left: 30px;
  padding-right: 20px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  max-width: 500px;
}
.jumbotron03 .profile-name h2 {
  color: #fff;
  font-size: 26px;
  font-weight: 600;
  line-height: 30px;
  /max-width: 275px;
  position: relative;
  text-transform: uppercase;
  text-shadow: 1.1px 1px #292C2F;
}
.jumbotron03 .profile-name h3 {
  color: #fff;
  font-size: 20px;
  position: relative;
  /text-transform: uppercase;
  text-shadow: 1.1px 1px #292C2F;
}
.jumbotron03 .fb-profile-block-menu{
  height: 44px;
  position: relative;
  width:100%;
  /overflow:hidden;
  }
.jumbotron03 .block-menu {
  clear: right;
  /padding-left: 205px;
}
.jumbotron03 .block-menu ul{
    margin:0;
    padding:0;
    }
.jumbotron03 .block-menu ul li{
    display:inline-block;
    }
.jumbotron03 .block-menu ul li a {
  border-right: 1px solid #e9eaed;
  float: left;
  font-size: 14px;
  font-weight: bold;
  height: 43px;
  line-height: 3.0;
  padding: 0 17px;
  position: relative;
  vertical-align: middle;
  white-space: nowrap;
  color:#4b4f56;
  text-transform:capitalize;
}

.jumbotron03 .block-menu ul li:first-child a{
      border-left: 1px solid #5383D3;
      background: #5383D3;
      color: #FAFAFA;
      border-bottom-left-radius: 2px;
    }


    @media (max-width: 600px) {
  .jumbotron03 .col-md-12 {
    padding-right: 0;
    padding-left: 0;
  }
  .jumbotron03 .profile-name {
    position: absolute;
    /left: 20px;
    bottom: 35px;
  }
  .jumbotron03 .visible-xs {
    display: inline-block  !important;
  }

}
</style>