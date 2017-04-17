<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagenes Publicacione'), ['action' => 'edit', $imagenesPublicacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagenes Publicacione'), ['action' => 'delete', $imagenesPublicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesPublicacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagenes Publicaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagenes Publicacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagenesPublicaciones view large-9 medium-8 columns content">
    <h3><?= h($imagenesPublicacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($imagenesPublicacione->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publicacione') ?></th>
            <td><?= $imagenesPublicacione->has('publicacione') ? $this->Html->link($imagenesPublicacione->publicacione->id, ['controller' => 'Publicaciones', 'action' => 'view', $imagenesPublicacione->publicacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto Dir') ?></th>
            <td><?= h($imagenesPublicacione->foto_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagenesPublicacione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($imagenesPublicacione->numero) ?></td>
        </tr>
    </table>
</div>
