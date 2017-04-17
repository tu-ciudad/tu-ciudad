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
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagenes Publicacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagenesPublicaciones index col-md-8 columns content">
    <h3><?= __('Imagenes Publicaciones') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicaciones_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto_dir') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagenesPublicaciones as $imagenesPublicacione): ?>
            <tr>
                <td><?= $this->Number->format($imagenesPublicacione->id) ?></td>
                <td><?= h($imagenesPublicacione->foto) ?></td>
                <td><?= $this->Number->format($imagenesPublicacione->numero) ?></td>
                <td><?= $imagenesPublicacione->has('publicacione') ? $this->Html->link($imagenesPublicacione->publicacione->id, ['controller' => 'Publicaciones', 'action' => 'view', $imagenesPublicacione->publicacione->id]) : '' ?></td>
                <td><?= h($imagenesPublicacione->foto_dir) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagenesPublicacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagenesPublicacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagenesPublicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesPublicacione->id)]) ?>
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
