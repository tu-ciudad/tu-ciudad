<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Imagenes Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagenesProductos form col-md-8 columns content">
    <?= $this->Form->create($imagenesProducto,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Imagenes Producto') ?></legend>
        <?php
            echo $this->Form->control('numero');
            echo $this->Form->control('foto',['type' => 'file']);
            echo $this->Form->control('productos_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
