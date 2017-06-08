<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Negocios Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="negociosTags index large-9 medium-8 columns content">
    <h3><?= __('Negocios Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('negocios_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tags_negocios_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($negociosTags as $negociosTag): ?>
            <tr>
                <td><?= $this->Number->format($negociosTag->id) ?></td>
                <td><?= $negociosTag->has('negocio') ? $this->Html->link($negociosTag->negocio->id, ['controller' => 'Negocios', 'action' => 'view', $negociosTag->negocio->id]) : '' ?></td>
                <td><?= $this->Number->format($negociosTag->tags_negocios_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $negociosTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $negociosTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $negociosTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $negociosTag->id)]) ?>
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
