<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Html->script('stackblur.js') ?>
<div class=" text-center cardc" >
   <canvas class="bg-1" id="header-blur"></canvas>
                <div class="avatar">
                    <img class="" src="" alt="" />
                </div>
    </div> 
    
<div class="container visible-xs ">
    <div class="row">
        <div class="col-lg-3 col-sm-6">

            <div class="procard hovercard">
                <div class="cardheader headerblur">

                </div>
                <div class="avatar">
                    <img alt="" class="" src=<?= $fperfil ?>>
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="#">Script Eden</a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="#">
                        <i class="fa fa-home"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
           
    <div class="jumbotron container img-rounded hidden-xs">
<div class="row row-margin-bottom sinpadding">
            <div class="col-md-10 no-padding lib-item col-md-push-1"  data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow border-1">
                        <div class="col-md-4 col-sm-4 avatar">
                            <img class="lib-img-show src-image" src=<?= $fperfil ?>>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="lib-row lib-header">
                                <?= $negocio->nombre ?>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <?= $negocio->descripcion ?>
                                <button class="btnmodal btn btn-primary">show modal</button>

                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg1">
                                    <div class="modal-content">
                                       
                                      <iframe src="" frameborder="0" class="iframe-modal"></iframe>
                                      </div>
                                  </div>
                                </div>
    
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 border-col-2">
                           
        <div class="col-md-12">
           
            <div class=" psocial">
                <a href="#" class="list-group-item visitor">
                    <h3 class="pull-right">
                        <i class="fa fa-home"></i>
                    </h3>
                    
                    <p class="">
                        Profile </p>
                        
                </a>
                   <a href="#" class="list-group-item facebook-like">
                    <h3 class="pull-right">
                        <i class="fa fa-facebook-square"></i>
                    </h3>
                    
                    <p class="">
                        Facebook</p>
                </a>
                   <a href="#" class="list-group-item google-plus">
                    <h3 class="pull-right">
                        <i class="fa fa-google-plus-square"></i>
                    </h3>
                    
                    <p class="">
                        Google+</p>
                </a>
                   <a href="#" class="list-group-item twitter">
                    <h3 class="pull-right">
                        <i class="fa fa-twitter-square"></i>
                    </h3>
                    
                    <p class="">
                        Twitter</p>
                </a>
            </div>
        </div>
                       
                        </div>
                    </div>
                </div>
            </div>
            </div>
</div>

<script>
$('.btnmodal').click(function(){

    $('.modal').on('shown.bs.modal',function(){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
  $(this).find('iframe').attr('src','http://localhost:8765/imagenes-negocios/add1')
})
      $('.modal').modal();
   
   
    
});
</script>