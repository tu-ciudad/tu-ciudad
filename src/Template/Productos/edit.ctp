<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="productos form table table-striped ">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('cuerpo');
            echo $this->Form->control('fecha');
            echo $this->Form->control('precio');
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?= dump($producto) ?>