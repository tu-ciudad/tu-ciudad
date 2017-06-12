<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="navbar  navbar-fixed-top border-bot"  role="navigation" id="navv">
        <div class="">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header footer-distributed1">
                <button class="c-hamburger c-hamburger--htx pull-right visible-xs" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span>toggle menu</span>
                  </button>
                <div class="navbar-brand  footer-distributed1 logoLink" >
               <a href="/"> 
                    <h3>Tu<span>Ciudad</span></h3>
                    </a>
                </div>
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="btn-trans"<?= $this->Html->link('LOCALES', array('controller' => 'comercios', 'action' => 'index')) ?> 
                        
                        </a>

                    </li>
                    <li>
                            <a class="btn-trans" <?= $this->Html->link('ARTICULOS', array('controller' => 'Articulos', 'action' => 'index')) ?> </a>
                            </li>
                    <li>
                        <a class="btn-trans" <?= $this->Html->link('OFERTAS', array('controller' => 'ofertas', 'action' => 'index')) ?></a>
                    </li>
                    <li>
                        <a class="btn-trans"<?= $this->Html->link('Tests', array('controller' => 'prueba', 'action' => 'index')) ?> 
                        
                        </a>

                    </li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                             <?= $this->Html->link('users', array('controller' => 'Users', 'action' => 'index')) ?> 
                            </li>
                             <li>
                             <?= $this->Html->link('ImagenesNegocios', array('controller' => 'ImagenesNegocios', 'action' => 'index')) ?> 
                            </li>
                            <li>
                             <?= $this->Html->link('ImagenesPublicaciones', array('controller' => 'ImagenesPublicaciones', 'action' => 'index')) ?> 
                            </li>
                            <li>
                             <?= $this->Html->link('Lugares', array('controller' => 'Lugares', 'action' => 'index')) ?> 
                            </li>
                            <li>
                             <?= $this->Html->link('Negocios', array('controller' => 'Negocios', 'action' => 'index')) ?> 
                            </li>
                         </ul>
                    </li>
                   
                </ul>
 <ul class="navbar-form navbar-left navi-search" role="search">
                      <form class="form-search" method="get" action="/buscar">
                                <div class="input-group " >
                                    <input type="text" id="dato" name="articulos" class="form-control hidden-sm" placeholder="Buscar...">
                                    <span class="input-group-btn"><button class="btn btn-primary " type="submit"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button></span>
                                </div>
                         </form>     
                    </ul>
                 
              
                
<ul class="nav navbar-nav navbar-right nav-logged" style="">
                   
<li class="dropdown ">  

                        <div class="dropdown-toggle rosca" data-toggle="dropdown"><span class="user">useraccount@gmail.com </span><span class="glyphicon glyphicon-cog"></span></div>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="../../../../negocios/perfil/1">Ir a perfil</a></li>
                            <li><a href="../../../../negocios/edit/1">Editar perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Agregar producto</a></li>
                            <li><a href="#">Editar producto</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                             <a href="/users/logout">Cerrar sesión</a> 
                            </li>
                         </ul>
                    </li>

                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <script>
  (function() {
    "use strict";
    var toggles = document.querySelectorAll(".c-hamburger");
    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };
    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
      });
    }
  })();
</script>