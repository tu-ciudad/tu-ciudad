<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br>
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos form col-md-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Add Producto') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('cuerpo');
            echo $this->Form->control('fecha');
            echo $this->Form->control('precio');
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
