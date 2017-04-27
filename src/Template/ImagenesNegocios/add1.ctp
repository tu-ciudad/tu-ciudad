<?php
/**
  * @var \App\View\AppView $this
  */
$this->layout = 'add';


?>
<?= $this->Html->css('croppic.css') ?>
<?= $this->Html->css('main.css') ?>

<?= $this->Html->script('croppic') ?>
<style>
#yourId{ 
        width: 400px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
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
               
                         <input type="hidden" name="ubicacion" required="required" id="ubicacion" value="perfil">
                 
                        <input type="hidden" name="negocios_id" id="negocios-id" value="1">
                   
                 
                     
                     <input type="hidden" name="foto" id="foto" >
            
             </fieldset>
             <br>

             <button style="width: 100%; position: absolute;" class="btn btn-primary" type="submit">Submit</button>
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













<!-- <style>
body {
    background-color: #fafafa;
    font:15px 'Open Sans', sans-serif;
        color: #5e5b64;
        text-align:center;
        margin: 0px;
       
}
</style>



<div class="imagenesNegocios" >

    <?= $this->Form->create($imagenesNegocio,['type' => 'file',  'class' => 'form-group']) ?>
    <fieldset>
      <!--  <legend>Add Imagenes Negocio</legend>  
        <?php
            echo $this->Form->control('ubicacion', ['options' => ['perfil'=>'perfil']]); //nombre y valor al que equivalen
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
            echo $this->Form->control(
                'foto',
                [ 'label' => [
                    'text' => 'Seleccione una imagen o arraste y suelte -> AQUÍ <-',
                    'class' => 'labelf', 
                    ], 
                'type' => 'file', 'onChange' => 'readURL(this);'
                ],['<h1>hola</h1>']);
        ?>
    </fieldset>
    <!-- <output id="list"></output> -->
   <!-- <div class="blah" ondrop="drop(event)" ondragover="allowDrop(event)" id="droptarget">
        <div style="border: 2px; border-style: dashed; height:180px; width:180px; margin: 0 auto; border-radius: 8px;" >   
        <img id="blah" src="http://icon-icons.com/icons2/564/PNG/128/Add_Image_icon-icons.com_54218.png" alt="" />
        </div>
    </div>
    
    <?= $this->Form->button(__('Submit'), [ 'class' => 'btn btn-primary']) ?>
    
    <?= $this->Form->end() ?>
    
</div>


<script>
    $('.btn').click(function(e)
{   
    if( !$('#foto').val() ) {
        e.preventDefault();
       alert('Seleccione un imagen');
    }
});
</script>
<script>
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);

                    
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

<script>
function dragStart(event) {
    event.dataTransfer.setData("Text", event.target.id);
}

function allowDrop(event) {
    event.preventDefault();
    document.getElementById("demo").innerHTML = "The p element is OVER the droptarget.";
    event.target.style.border = "4px dotted green";
}

function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    event.target.appendChild(document.getElementById(data));
    document.getElementById("demo").innerHTML = "The p element was dropped.";
}
</script>
 -->