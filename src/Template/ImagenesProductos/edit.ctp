<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $imagenesProducto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesProducto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Imagenes Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagenesProductos form large-9 medium-8 columns content">
    <?= $this->Form->create($imagenesProducto) ?>
    <fieldset>
        <legend><?= __('Edit Imagenes Producto') ?></legend>
        <?php
            echo $this->Form->control('foto');
            echo $this->Form->control('numero');
            echo $this->Form->control('publicaciones_id', ['options' => $productos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
