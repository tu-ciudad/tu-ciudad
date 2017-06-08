<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tags Negocio'), ['action' => 'edit', $tagsNegocio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tags Negocio'), ['action' => 'delete', $tagsNegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagsNegocio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags Negocios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tags Negocio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tagsNegocios view large-9 medium-8 columns content">
    <h3><?= h($tagsNegocio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tagsNegocio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tagsNegocio->id) ?></td>
        </tr>
    </table>
</div>
