<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Imagenes Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagenesProductos form large-9 medium-8 columns content">
    <?= $this->Form->create($imagenesProducto,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Imagenes Producto') ?></legend>
        <?php
            echo $this->Form->control('foto');
            echo $this->Form->control('numero');
            echo $this->Form->control('foto',['type' => 'file']);
            echo $this->Form->control('productos_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
