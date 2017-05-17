
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
        width: 250px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 250px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
        position: relative;  /* MANDATORY */
        /margin: 90px auto;
        /margin: 50px 70px 20px;
        border: 3px  solid #FFF;
        box-sizing: content-box;
        -moz-box-sizing: content-box;
        border-radius: 2px;
        /background-image: url(../img/placeholder.png);
        background-repeat: no-repeat;
        background-position: center;
        /box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
      } 
      
  .thumbRes {
    width: 100px;
     background-color: rgb(233, 235, 238);
    border: 3px solid rgb(233, 235, 238);
    border-radius: 3px;
    margin-right: 10px;
  }          
            
    </style>
<?= $this->Html->css('croppic.css') ?>

<?= $this->Html->script('croppic-product') ?>

   <h3 id="data"></h3>
    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   
    
    <script>
                var k = 0;
                var h = 0;
                var j = 0;
                //---al apretar el cortar, el coppic-product.js llama a esta funcion, que esconde el content actual y muestra el siguiente
                function cropped(){
                h = h + 1;
                j = h + 1;
                k = k - 1;
                console.log(h);
                if (h > 0){
                    $('#cont'+[h]).addClass('hidden');
                    $('#cont'+[j]).addClass('active');
                    var srch = $('#cont'+[h]+' .croppedImg').attr('src');
                    $('#result').append('<img class="thumbRes" src="'+ srch +'">')
                    $('#restantes').text(k);
                }
             };
             //---el btnNext llama al content del primer croppic
        $('.btnNext').click(function(){
        $('#cropPro').prepend('<h2 style="margin: 0;">Imagenes restantes: <div id="restantes">'+[k]+'</div></h2>');
        $('#cont1').removeClass('hidden');
        $('#id0').addClass('hidden');
        $('#cont1').addClass('active');
        $('.btnNext').addClass('hidden');
        $('.success').addClass('hidden');
        

      });
        
    </script>


    </div>