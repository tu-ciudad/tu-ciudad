<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lugare'), ['action' => 'edit', $lugare->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lugare'), ['action' => 'delete', $lugare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lugare->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lugares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lugare'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lugares view large-9 medium-8 columns content">
    <h3><?= h($lugare->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($lugare->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lugare->id) ?></td>
        </tr>
    </table>
</div>
