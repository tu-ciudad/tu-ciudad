<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>
  @media (min-width: 768px) {
  
.navbar-brand {
  margin-left: 40px !important;
}
}
</style>
<nav class="navbar  navbar-fixed-top border-bot"  role="navigation" id="navv">
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header footer-distributed1">
      <button class="c-hamburger c-hamburger--htx pull-right hidden-lg" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span>toggle menu</span>
      </button>
      <div class="navbar-brand  footer-distributed1 logoLink" style="">
       <a href="/">
       <img src="../../../../img/navicon7.png" style="margin-top: -9px; margin-left: -55px; position: absolute;" alt="">
       <h3>paseo<span>ciudad</span></h3>
        </a>
      </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="navbar" style="    text-align: center;">
      <ul class="nav navbar-nav navbar-center" >
        <li>
          <a class="btn-trans" href="../../../../?ref=nav">INICIO</a>
        </li>
        <li>
          <a class="btn-trans" href="../../buscar?productos&ref=nav">PRODUCTOS</a>
        </li>
        <li>
          <a class="btn-trans" href="../../buscar?comercios&ref=nav">COMERCIOS</a>
        </li>
        <li>
          <a class="btn-trans" href="../../contacto&ref=nav">CONTÁCTANOS</a>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right: 0;">
        <li>
          <ul class="navbar-form navbar-left navi-search" role="search" style="padding-right: 0;">
            <form class="form-search" method="get" action="/buscar" id="ua-buscar-nav">
              <div class="input-group " >
                <input type="text" id="dato" name="productos" class="form-control hidden-sm" placeholder="Buscar...">
                <span class="input-group-btn">
                  <button class="btn btn-primary " type="submit"><i class="fa fa-search fa-lg" aria-hidden="true"></i></button>
                </span>
              </div>
            </form>
          </ul>
        </li>
    </ul>
    </div>
    </div>        <!-- /.navbar-collapse -->
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