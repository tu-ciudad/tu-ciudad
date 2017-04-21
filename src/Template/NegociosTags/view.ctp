<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Negocios Tag'), ['action' => 'edit', $negociosTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Negocios Tag'), ['action' => 'delete', $negociosTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $negociosTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Negocios Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocios Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="negociosTags view large-9 medium-8 columns content">
    <h3><?= h($negociosTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Negocio') ?></th>
            <td><?= $negociosTag->has('negocio') ? $this->Html->link($negociosTag->negocio->id, ['controller' => 'Negocios', 'action' => 'view', $negociosTag->negocio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $negociosTag->has('tag') ? $this->Html->link($negociosTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $negociosTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($negociosTag->id) ?></td>
        </tr>
    </table>
</div>
