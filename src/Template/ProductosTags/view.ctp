<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Productos Tag'), ['action' => 'edit', $productosTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Productos Tag'), ['action' => 'delete', $productosTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productosTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Productos Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Productos Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productosTags view large-9 medium-8 columns content">
    <h3><?= h($productosTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Producto') ?></th>
            <td><?= $productosTag->has('producto') ? $this->Html->link($productosTag->producto->id, ['controller' => 'Productos', 'action' => 'view', $productosTag->producto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $productosTag->has('tag') ? $this->Html->link($productosTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $productosTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productosTag->id) ?></td>
        </tr>
    </table>
</div>
