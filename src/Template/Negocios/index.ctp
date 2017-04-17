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
        <li><?= $this->Html->link(__('New Negocio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="negocios index col-md-8 columns content">
    <h3><?= __('Negocios') ?></h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lugares_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($negocios as $negocio): ?>
            <tr>
                <td><?= $this->Number->format($negocio->id) ?></td>
                <td><?= h($negocio->nombre) ?></td>
                <td><?= h($negocio->telefono) ?></td>
                <td><?= h($negocio->direccion) ?></td>
                <td><?= h($negocio->descripcion) ?></td>
                <td><?= $negocio->has('lugare') ? $this->Html->link($negocio->lugare->id, ['controller' => 'Lugares', 'action' => 'view', $negocio->lugare->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $negocio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $negocio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $negocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $negocio->id)]) ?>
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
