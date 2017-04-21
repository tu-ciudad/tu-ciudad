<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publicaciones Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicacionesTags index large-9 medium-8 columns content">
    <h3><?= __('Publicaciones Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publicaciones_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tags_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publicacionesTags as $publicacionesTag): ?>
            <tr>
                <td><?= $this->Number->format($publicacionesTag->id) ?></td>
                <td><?= $publicacionesTag->has('publicacione') ? $this->Html->link($publicacionesTag->publicacione->id, ['controller' => 'Publicaciones', 'action' => 'view', $publicacionesTag->publicacione->id]) : '' ?></td>
                <td><?= $publicacionesTag->has('tag') ? $this->Html->link($publicacionesTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $publicacionesTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publicacionesTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publicacionesTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publicacionesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicacionesTag->id)]) ?>
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
