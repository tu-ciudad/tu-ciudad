<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagenes Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagenesProductos index large-9 medium-8 columns content">
    <h3><?= __('Imagenes Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicaciones_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagenesProductos as $imagenesProducto): ?>
            <tr>
                <td><?= $this->Number->format($imagenesProducto->id) ?></td>
                <td><?= h($imagenesProducto->foto) ?></td>
                <td><?= $this->Number->format($imagenesProducto->numero) ?></td>
                <td><?= $imagenesProducto->has('producto') ? $this->Html->link($imagenesProducto->producto->id, ['controller' => 'Productos', 'action' => 'view', $imagenesProducto->producto->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagenesProducto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagenesProducto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagenesProducto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesProducto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
