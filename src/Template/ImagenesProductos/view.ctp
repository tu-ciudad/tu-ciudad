<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagenes Producto'), ['action' => 'edit', $imagenesProducto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagenes Producto'), ['action' => 'delete', $imagenesProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesProducto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagenes Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagenes Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagenesProductos col-md-8 index  columns content">
    <h3><?= h($imagenesProducto->id) ?></h3>
    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($imagenesProducto->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagenesProducto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($imagenesProducto->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productos Id') ?></th>
            <td><?= $this->Number->format($imagenesProducto->productos_id) ?></td>
        </tr>
    </table>
</div>
