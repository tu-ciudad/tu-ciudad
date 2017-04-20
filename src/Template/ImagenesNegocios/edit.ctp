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
<div class="imagenesNegocios form large-9 medium-8 columns content">
    <?= $this->Form->create($imagenesNegocio,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Imagenes Negocio') ?></legend>
        <?php
            echo $this->Form->control('ubicacion');
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
            echo $this->Form->control('foto',['type' => 'file']);
            echo $this->Form->control('foto_dir', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
