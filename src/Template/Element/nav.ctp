<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="navbar  navbar-fixed-top border-bot"  role="navigation" id="navv">
        <div class="container">
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
 <ul class="navbar-form navbar-right" role="search">
                      
                                <div class="input-group " >
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn"><button class="btn btn-primary " type="button"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button></span>
                                </div>
                              
                    </ul>
                <!-- 
                <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
                -->
                


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