<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div style="margin-top: 50px;"></div>
<nav class="col-md-3" id="actions-sidebar">
    <ul class="side-nav nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Negocio'), ['action' => 'edit', $negocio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Negocio'), ['action' => 'delete', $negocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $negocio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Negocios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="negocios view col-md-4">
    <!-- <h3><?= h($negocio->id) ?></h3> -->
    <table class="vertical-table table table-striped">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($negocio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($negocio->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($negocio->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($negocio->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lugare') ?></th>
            <td><?= $negocio->has('lugare') ? $this->Html->link($negocio->lugare->id, ['controller' => 'Lugares', 'action' => 'view', $negocio->lugare->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfilfb') ?></th>
            <td><?= h($negocio->perfilfb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($negocio->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($negocio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Users Id') ?></th>
            <td><?= $this->Number->format($negocio->users_id) ?></td>
        </tr>
    </table>
</div>
