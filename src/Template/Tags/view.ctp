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
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?> </li>
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
        <h4><?= __('Related Productos') ?></h4>
        <?php if (!empty($tag->productos)): ?>
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
            <?php foreach ($tag->productos as $productos): ?>
            <tr>
                <td><?= h($productos->id) ?></td>
                <td><?= h($productos->titulo) ?></td>
                <td><?= h($productos->cuerpo) ?></td>
                <td><?= h($productos->fecha) ?></td>
                <td><?= h($productos->precio) ?></td>
                <td><?= h($productos->negocios_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Productos', 'action' => 'view', $productos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Productos', 'action' => 'edit', $productos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Productos', 'action' => 'delete', $productos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
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
                <th scope="col"><?= __('Users Id') ?></th>
                <th scope="col"><?= __('Lunes') ?></th>
                <th scope="col"><?= __('Martes') ?></th>
                <th scope="col"><?= __('Miercoles') ?></th>
                <th scope="col"><?= __('Jueves') ?></th>
                <th scope="col"><?= __('Viernes') ?></th>
                <th scope="col"><?= __('Sabado') ?></th>
                <th scope="col"><?= __('Domingo') ?></th>
                <th scope="col"><?= __('Feriados') ?></th>
                <th scope="col"><?= __('Perfilinstragram') ?></th>
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
                <td><?= h($negocios->users_id) ?></td>
                <td><?= h($negocios->lunes) ?></td>
                <td><?= h($negocios->martes) ?></td>
                <td><?= h($negocios->miercoles) ?></td>
                <td><?= h($negocios->jueves) ?></td>
                <td><?= h($negocios->viernes) ?></td>
                <td><?= h($negocios->sabado) ?></td>
                <td><?= h($negocios->domingo) ?></td>
                <td><?= h($negocios->feriados) ?></td>
                <td><?= h($negocios->perfilinstragram) ?></td>
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
</div>
