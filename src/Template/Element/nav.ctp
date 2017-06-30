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
                            <a class="btn-trans" href="../../../../">
                              INICIO
                             </a>
                    </li>
                    <li>
                            <a class="btn-trans" href="../../buscar?productos">
                              PRODUCTOS
                             </a>
                    </li>
                    <li>
                        <a class="btn-trans" href="../../buscar?comercios"> 
                        COMERCIOS
                        </a>

                    </li>
                    
                    <li>
                        <a class="btn-trans"<?= $this->Html->link('Tests', array('controller' => 'prueba', 'action' => 'index')) ?> 
                        
                        </a>

                    </li>
                    <!-- <li class="dropdown ">
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
                    </li> -->
                   
                </ul>
 <ul class="navbar-form navbar-left navi-search" role="search">
                      <form class="form-search" method="get" action="/buscar">
                                <div class="input-group " >
                                    <input type="text" id="dato" name="productos" class="form-control hidden-sm" placeholder="Buscar...">
                                    <span class="input-group-btn"><button class="btn btn-primary " type="submit"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button></span>
                                </div>
                         </form>     
                    </ul>
                 
              
                
<ul class="nav navbar-nav navbar-right navindex" style="position: absolute; right: 100px;">
                    <!-- 
        <li><p class="navbar-text">Already have an account?</p></li>
          -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu animate1">
                            <li>
                                <div class="row ">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or
<form method="POST" action="/users/login">
    <fieldset>
       <input type="text" name="email">
       <input type="password" name="password">
    </fieldset>
<button type="submit">submit</button>
</form>
</div>
                                    </div>
                                    <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div>
                                </div>
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