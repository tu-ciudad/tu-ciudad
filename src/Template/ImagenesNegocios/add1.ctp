<?php
/**
  * @var \App\View\AppView $this
  */
$this->layout = 'add';
?>
<style>
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
      <!--  <legend>Add Imagenes Negocio</legend>  -->
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
    <div class="blah" ondrop="drop(event)" ondragover="allowDrop(event)" id="droptarget">
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
