
<?php
/**
  * @var \App\View\AppView $this
  */
?>

<br>
<br>
<br>
<?= $this->element('product-upload') ?>

<br>

<?= $this->element('modal-product') ?>


    <div class="container-fluid" style="height: 200vh;">

       

    <!-- /.container -->

    <!-- imagen modal -->
    <!-- <img id="myImg" src="http://placehold.it/700x400" alt="Northern Lights, Norway" width="300" height="200"> 
<! The Modal 
    <div id="myModal" class="modal">
        <span class="close"><br>×</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
-->
<style>
    
 .cropp{ 
        width: 400px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 400px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
        position: relative;  /* MANDATORY */
        
        /margin: 50px 70px 20px;
        border: 3px  solid #FFF;
        box-sizing: content-box;
        -moz-box-sizing: content-box;
        border-radius: 2px;
        background-image: url(../img/placeholder.png);
        background-repeat: no-repeat;
        background-position: center;
        box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
      } 
      
            
            
    </style>
<?= $this->Html->css('croppic.css') ?>

<?= $this->Html->script('croppic') ?>
<ul class="nav nav-tabs" id="appe">
  <li class="active"><a data-toggle="tab" href="#cont0">Cortar</a></li>
</ul>

<div class="tab-content" id="content">
 <div id="cont0" class="tab-pane fade in ">'+'</div>
</div>






        <div id=""></div>

    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   
    
    <script>

       
        
        
    </script>


    </div>