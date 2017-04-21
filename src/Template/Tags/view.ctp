<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tag->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Negocios') ?></h4>
        <?php if (!empty($tag->negocios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Telefono') ?></th>
                <th scope="col"><?= __('Direccion') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Lugares Id') ?></th>
                <th scope="col"><?= __('Perfilfb') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->negocios as $negocios): ?>
            <tr>
                <td><?= h($negocios->id) ?></td>
                <td><?= h($negocios->nombre) ?></td>
                <td><?= h($negocios->telefono) ?></td>
                <td><?= h($negocios->direccion) ?></td>
                <td><?= h($negocios->descripcion) ?></td>
                <td><?= h($negocios->lugares_id) ?></td>
                <td><?= h($negocios->perfilfb) ?></td>
                <td><?= h($negocios->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Negocios', 'action' => 'view', $negocios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Negocios', 'action' => 'edit', $negocios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Negocios', 'action' => 'delete', $negocios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $negocios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Publicaciones') ?></h4>
        <?php if (!empty($tag->publicaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Cuerpo') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Negocios Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->publicaciones as $publicaciones): ?>
            <tr>
                <td><?= h($publicaciones->id) ?></td>
                <td><?= h($publicaciones->titulo) ?></td>
                <td><?= h($publicaciones->cuerpo) ?></td>
                <td><?= h($publicaciones->fecha) ?></td>
                <td><?= h($publicaciones->precio) ?></td>
                <td><?= h($publicaciones->negocios_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publicaciones', 'action' => 'view', $publicaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publicaciones', 'action' => 'edit', $publicaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publicaciones', 'action' => 'delete', $publicaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
