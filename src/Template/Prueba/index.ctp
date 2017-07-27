
<?php
/**
  * @var \App\View\AppView $this
  */
?>
<style>
.prodpage {
  margin-top: 20px;
}
.imgnegocio>img{
  /width: 100%;
}
article{
    background-color: #E0E0E0;
    padding: 10px;
    margin-bottom: 10px;
    margin-top: 10px;
}
figure img{
    width: 100%;
    height: 100%;
}
.glyphicon-folder-open,
.glyphicon-user,
.glyphicon-calendar,
.glyphicon-eye-open,
.glyphicon-comment{
    padding: 5px;
}

   
   
img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 10px;
  background: #E0E0E0;
  padding: 1em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  /color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  /margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.share-fb {
   background: #4c699e;;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; 
        }

  .share-fb:hover {
    background: #47618d;
    color: #fff; 
  }



.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */

</style>

<div class="prodpage">
  <div class="container">
    <div class="card">
      <div class="">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="/files/ImagenesProductos/d50e7aa7677dc26656d2971bdf57f6cd.jpg" /></div>
              <div class="tab-pane" id="pic-2"><img src="/files/ImagenesProductos/5f2ef2b721822dab6c314b53dfef666e.jpg" /></div>
              
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="/files/ImagenesProductos/d50e7aa7677dc26656d2971bdf57f6cd.jpg" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="/files/ImagenesProductos/5f2ef2b721822dab6c314b53dfef666e.jpg" /></a></li>
              
            </ul>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">Producto name</h3>
            <hr>
            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
            <hr>
            <h4 class="price">Precio: <span class="text-danger">$180</span></h4>
            <hr>
            <h4 class="price">Comercio: </h4> <a href="#"><h4 class="product-description">La Maga Comidas</h4></a>
            
            <div class="action" style="position: absolute; bottom: 0; right: 1em;">
              <button class="add-to-cart btn btn-default" type="button">Ver más</button>
              <button class="share-fb btn btn-default" type="button"> Compartir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  


  



<div class="row">
      <div class=" col-sm-12 ">
          <article>
              <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <figure>
                          <img src="/files/imagenesnegocios/foto/3806.jpeg">
                      </figure>
                  </div>
                  <div class="col-sm-6 col-md-8">
                      <!-- <span class="label label-default pull-right"><i class="glyphicon glyphicon-comment"></i>50</span> -->
                      <h2>la Maga Comidas</h2>
                      <p>Casa de comidas "La Maga". ENVÍOS SIN CARGO.</p>
                      <section>
                          <i class="glyphicon glyphicon-folder-open"></i>tags
                          <i class="glyphicon glyphicon-user"></i>tags
                          <i class="glyphicon glyphicon-calendar"></i>tags
                          <i class="glyphicon glyphicon-eye-open"></i>tags
                          <a href="#" class="btn btn-default btn-sm pull-right">Entrar ... </a>
                      </section>
                  </div>
              </div>
          </article>  
        </div>
      </div>


  </div>
</div>





<div style="height: 800px"></div>

<?= $this->element('footer') ?>



