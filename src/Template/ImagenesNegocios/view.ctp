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
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Imagenes Negocio'), ['action' => 'edit', $imagenesNegocio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Imagenes Negocio'), ['action' => 'delete', $imagenesNegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesNegocio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Imagenes Negocios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Imagenes Negocio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="imagenesNegocios view large-9 medium-8 columns content">
    <h3><?= h($imagenesNegocio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ubicacion') ?></th>
            <td><?= h($imagenesNegocio->ubicacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Negocio') ?></th>
            <td><?= $imagenesNegocio->has('negocio') ? $this->Html->link($imagenesNegocio->negocio->id, ['controller' => 'Negocios', 'action' => 'view', $imagenesNegocio->negocio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($imagenesNegocio->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto Dir') ?></th>
            <td><?= h($imagenesNegocio->foto_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($imagenesNegocio->id) ?></td>
        </tr>
    </table>
</div>
