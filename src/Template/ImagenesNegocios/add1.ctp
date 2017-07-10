<?php
/**
  * @var \App\View\AppView $this
  */
$this->layout = 'add';


?>
<style>
    .pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}

.pace-inactive {
  display: none;
}

.pace .pace-progress {
  background: #29d;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 2px;
}

.pace .pace-progress-inner {
  display: block;
  position: absolute;
  right: 0px;
  width: 100px;
  height: 100%;
  box-shadow: 0 0 10px #29d, 0 0 5px #29d;
  opacity: 1.0;
  -webkit-transform: rotate(3deg) translate(0px, -4px);
  -moz-transform: rotate(3deg) translate(0px, -4px);
  -ms-transform: rotate(3deg) translate(0px, -4px);
  -o-transform: rotate(3deg) translate(0px, -4px);
  transform: rotate(3deg) translate(0px, -4px);
}

.pace .pace-activity {
  display: block;
  position: fixed;
  z-index: 2000;
  top: 15px;
  right: 15px;
  width: 14px;
  height: 14px;
  border: solid 2px transparent;
  border-top-color: #29d;
  border-left-color: #29d;
  border-radius: 10px;
  -webkit-animation: pace-spinner 400ms linear infinite;
  -moz-animation: pace-spinner 400ms linear infinite;
  -ms-animation: pace-spinner 400ms linear infinite;
  -o-animation: pace-spinner 400ms linear infinite;
  animation: pace-spinner 400ms linear infinite;
}

@-webkit-keyframes pace-spinner {
  0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
}
@-moz-keyframes pace-spinner {
  0% { -moz-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -moz-transform: rotate(360deg); transform: rotate(360deg); }
}
@-o-keyframes pace-spinner {
  0% { -o-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -o-transform: rotate(360deg); transform: rotate(360deg); }
}
@-ms-keyframes pace-spinner {
  0% { -ms-transform: rotate(0deg); transform: rotate(0deg); }
  100% { -ms-transform: rotate(360deg); transform: rotate(360deg); }
}
@keyframes pace-spinner {
  0% { transform: rotate(0deg); transform: rotate(0deg); }
  100% { transform: rotate(360deg); transform: rotate(360deg); }
}
</style>
<?= $this->Html->css('croppic.css') ?>
<?= $this->Html->css('main.css') ?>

<?= $this->Html->script('croppic') ?>
<style>
#yourId{ 
        width: 1024px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 400px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
        position: relative;  /* MANDATORY */
        
        margin: 0 auto;
        border: 3px  solid #FFF;
        box-sizing: content-box;
        -moz-box-sizing: content-box;
        border-radius: 2px;
        background-image: url(../img/placeholder.png);
        background-repeat: no-repeat;
        background-position: center;
        /box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
      } 

 </style>
<div id="yourId"></div> <!-- este llama al form para el recorte -->
 <form enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-group" id="fperfil" action="/imagenes-negocios/add1" onsubmit="window.parent.closeModal();">
             <div style="display: none;">
                 <input type="hidden" name="_method" value="POST">
             </div>
             <fieldset>
                
                    <input type="hidden" name="ubicacion" required="required" id="ubicacion" value="portada">
               
                
                    <input type="hidden" name="negocios_id" id="negocios-id" value="5">
                
                   
                 <div class="field">
                     <br>
                     <input type="text" name="foto" id="foto" style="position: absolute; opacity: 0;" required >
                 </div>
                     
            
             <button style="width: 100%; position: absolute;" class="btn btn-primary" type="submit"  id="dis">Guardar</button>
             </fieldset>
             <br>

         </form> 






<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>

        var croppicOpt = {
        uploadUrl:'img_save_to_file.php',
        cropUrl:'img_crop_to_file.php',  //realiza el proceso de corte

        outputUrlId:'foto', //link de donde se guardó
        processInline:false,
    } 
    var croppic = new Croppic('yourId', croppicOpt);     
</script>

<script> //cambia el texto de la validacion (si hay imagen subida y cortada)
  $('#fperfil input[type=text]').on('change invalid', function() {
    var textfield = $(this).get(0);
    
    // 'setCustomValidity not only sets the message, but also marks
    // the field as invalid. In order to see whether the field really is
    // invalid, we have to remove the message first
    textfield.setCustomValidity('');
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity('Debe subir una imagen!');  
    }
});

  $('#dis').click(function(){ //le pasa el valor del src rel recorte a la ventana padre (jumbotron02) a la funcion changeImg()

    var srcc = $('.croppedImg').attr('src');
    window.parent.srcc=srcc; 
    window.parent.changeImg(); 
  });

</script>












