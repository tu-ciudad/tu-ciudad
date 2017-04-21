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
<?= $this->element('sidebar-imagenesnegocios') ?>

<div class="imagenesNegocios form col-md-8 columns content">
<div id="yourId"></div>
<br>
<br>
    <?= $this->Form->create($imagenesNegocio,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Imagenes Negocio') ?></legend>
        <?php
            echo $this->Form->select('ubicacion', ['Ubicacion' => ['perfil','otra']]);
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
            echo $this->Form->control('foto',['type' => 'file']);
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
