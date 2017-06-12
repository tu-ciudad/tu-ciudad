
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

      .cropp1{ 
        width: 200px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 200px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
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
<br>
<br>
<br>
<br>
   <h3 id="data"></h3>
    
    <div id="yourIdasd" class="cropp1"></div>

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
<script>
    var croppicOpt = {
        uploadUrl:'imagenes-negocios/img_save_to_file.php',
                      cropUrl:'imagenes-negocios/img_crop_to_file.php',  //realiza el proceso de corte
                      
                      //loadPicture: dim[0],
                  } 
                  var croppic = new Croppic( 'yourIdasd' , croppicOpt);
</script>



<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<style>
    
/* Apply these styles only when #preview-pane has
   been placed within the Jcrop widget */
.jcrop-holder #preview-pane {
  display: block;
  position: absolute;
  //z-index: 2000;
  top: 10px;
  right: -280px;
  padding: 6px;
  border: 1px rgba(0,0,0,.4) solid;
  background-color: white;

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;

  -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}

/* The Javascript code will set the aspect ratio of the crop
   area based on the size of the thumbnail preview,
   specified here */
#preview-pane .preview-container {
  width: 200px;
  height: 200px;
  overflow: hidden;
}
      
            
            
    </style>
<?= $this->Html->css('jquery.Jcrop.css') ?>
<?= $this->Html->script('jquery.Jcrop.min.js') ?>
<?= $this->element('sidebar-imagenesnegocios') ?>


    <div class="col-md-8 col-md-push-1">
         <img src="../../img/adidas.jpg" id="target" >
         
         <input type="button" value="cortar" onclick="enviar();">
    </div>
   <div id="preview-pane">
    <div class="preview-container">
      <img src="img/adidas.jpg" class="jcrop-preview" alt="Preview" />
    </div>
  </div>
    
    



<div class="modal fade" id="modal-yes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-success">
success
            </div>
            <div class="modal-body">
            <div id="preview-pane">
    <div class="preview-container">
      <img src="img/adidas.jpg" class="jcrop-preview" alt="Preview" />
    </div>
  </div>
<button><?= $this->Html->link(__('Go Back'), ['action' => 'add']) ?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-no" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-danger">
Error
            </div>
            <div class="modal-body">
Seleccione un area!!
            </div>
        </div>
    </div>
</div>





    <script type="text/javascript">
        var x='';
        var y='';
        var w='';
        var h='';
        var imgurl='img/adidas.jpg';
        var imgurl1='img/adidas.jpg';
        var jcrop_api;
        var boundx;
        var boundy;
        

            
            
            


        // Grab some information about the preview pane
        $preview = $('#preview-pane'),
        $pcnt = $('#preview-pane .preview-container'),
        $pimg = $('#preview-pane .preview-container img'),

        xsize = $pcnt.width(),
        ysize = $pcnt.height();

        function showCoords(c)
          {
              // variables can be accessed here as
              // c.x, c.y, c.x2, c.y2, c.w, c.h
              //alert(c.x+' '+c.y+' '+c.x2+' '+c.y2+' '+c.w+' '+c.h)
              x=c.x;
              y=c.y;
              w=c.w;
              h=c.h;
          };    
        
        jQuery(function($) {
            $('#target').Jcrop({
                onChange: updatePreview,
                onSelect: showCoords,
                bgColor:     'grey',
                bgOpacity:   .1,
                aspectRatio: xsize / ysize,
                //setSelect:   [0,0,500],
            },function(){
      // Use the API to get the real image size
      var bounds = this.getBounds();
      boundx = bounds[0];
      boundy = bounds[1];
      // Store the API in the jcrop_api variable
      jcrop_api = this;

      // Move the preview into the jcrop container for css positioning
      $preview.appendTo(jcrop_api.ui.holder);
    });
            function updatePreview(c)
    {
              c.x1=c.x;
              c.y1=c.y;
              c.w1=c.w;
              c.h1=c.h;
      if (parseInt(c.w) > 0)
      {
        var rx = xsize / c.w1;
        var ry = ysize / c.h1;

        $pimg.css({
          width: Math.round(rx * boundx) + 'px',
          height: Math.round(ry * boundy) + 'px',
          marginLeft: '-' + Math.round(rx * c.x1) + 'px',
          marginTop: '-' + Math.round(ry * c.y1) + 'px'
        });
      }
    };
        });
        function enviar()
        {
            if (parseInt(w)) {
                $.ajax({
                url:'cortar.php',
                type:'POST',
                data:'x='+x+'&y='+y+'&w='+w+'&h='+h+'&imgurl='+imgurl+'&imgurl1='+imgurl1,
                success: function(data) {
                    $('#modal-yes').modal('toggle');

                    
                    },
                error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                        }       
                    

                    });
            }else{
                $('#modal-no').modal('toggle');
            }
            
        }
        function goBack() {
    window.history.back()
}
    </script>