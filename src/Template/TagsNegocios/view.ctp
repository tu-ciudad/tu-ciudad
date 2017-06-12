<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tagsnegocio'), ['action' => 'edit', $tagsnegocio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tagsnegocio'), ['action' => 'delete', $tagsnegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tagsnegocio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tagsnegocios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tagsnegocio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tagsnegocios view large-9 medium-8 columns content">
    <h3><?= h($tagsnegocio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tagsnegocio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tagsnegocio->id) ?></td>
        </tr>
    </table>
</div>
