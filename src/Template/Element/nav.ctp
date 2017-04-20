<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="navbar  navbar-fixed-top border-bot" id="navi" data-spy="affix" data-offset-top="50" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header footer-distributed1">
                <button class="c-hamburger c-hamburger--htx pull-right visible-xs" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span>toggle menu</span>
                  </button>
                <div class="navbar-brand  footer-distributed1" >
                <?= $this->Html->link('', array('controller' => 'prueba', 'action' => 'index')) ?>
                    <h3>Tu<span>Ciudad</span></h3>
                </div>
            </div>
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav ">
                    <li>
                        <a class="btn-trans"<?= $this->Html->link('LOCALES', array('controller' => 'prueba', 'action' => 'index')) ?> 
                        
                        </a>

                    </li>
                    <li>
                        <a class="btn-trans">SERVICIOS</a>
                    </li>
                    <li>
                        <a class="btn-trans" href="ofertas.html">OFERTAS</a>
                    </li>
                    <li class="dropdown col-md-push-4">
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
                <!-- 
                <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
                -->
                
<ul class="nav navbar-nav navbar-right navindex">
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
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                             <input type="checkbox"> keep me logged-in
                                             </label>
                                            </div>
                                        </form>
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