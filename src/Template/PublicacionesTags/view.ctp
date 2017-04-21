<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publicaciones Tag'), ['action' => 'edit', $publicacionesTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publicaciones Tag'), ['action' => 'delete', $publicacionesTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicacionesTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publicaciones Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicaciones Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publicacionesTags view large-9 medium-8 columns content">
    <h3><?= h($publicacionesTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Publicacione') ?></th>
            <td><?= $publicacionesTag->has('publicacione') ? $this->Html->link($publicacionesTag->publicacione->id, ['controller' => 'Publicaciones', 'action' => 'view', $publicacionesTag->publicacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $publicacionesTag->has('tag') ? $this->Html->link($publicacionesTag->tag->id, ['controller' => 'Tags', 'action' => 'view', $publicacionesTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publicacionesTag->id) ?></td>
        </tr>
    </table>
</div>
