<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>
<br>
<br>
<br>
<br>
<?= $this->Html->css('croppic.css') ?>
<?= $this->Html->script('croppic') ?>
<style>
    
    #yourId{ 
        width: 500px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 500px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
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
<?= $this->element('sidebar-imagenesnegocios') ?>

<div class="imagenesNegocios form col-md-8 columns content">
<div id="yourId"></div>
<br>
<br>
    <?= $this->Form->create($imagenesNegocio,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Imagenes Negocio') ?></legend>
        <?php
            echo $this->Form->control('ubicacion');
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
            echo $this->Form->control('foto',['type' => 'file']);
          //  echo $this->Form->control('foto_dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
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
<script>

    
    var croppicOpt = {
        //uploadUrl:'img_save_to_file.php',
        cropUrl:'img_crop_to_file.php',  //realiza el proceso de corte
        outputUrlId:'outputUrlId', //link de donde se guardó
        processInline:true,
    } 
    var croppic = new Croppic('yourId', croppicOpt);
        
        
    </script>