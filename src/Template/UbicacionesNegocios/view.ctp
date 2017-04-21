<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ubicaciones Negocio'), ['action' => 'edit', $ubicacionesNegocio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ubicaciones Negocio'), ['action' => 'delete', $ubicacionesNegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ubicacionesNegocio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ubicaciones Negocios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ubicaciones Negocio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ubicacionesNegocios view large-9 medium-8 columns content">
    <h3><?= h($ubicacionesNegocio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Negocio') ?></th>
            <td><?= $ubicacionesNegocio->has('negocio') ? $this->Html->link($ubicacionesNegocio->negocio->id, ['controller' => 'Negocios', 'action' => 'view', $ubicacionesNegocio->negocio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ubicacionesNegocio->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('X') ?></h4>
        <?= $this->Text->autoParagraph(h($ubicacionesNegocio->X)); ?>
    </div>
    <div class="row">
        <h4><?= __('Y') ?></h4>
        <?= $this->Text->autoParagraph(h($ubicacionesNegocio->Y)); ?>
    </div>
</div>
