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
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="negocios form col-md-8 columns content">
    <?= $this->Form->create($negocio) ?>
    <fieldset>
        <legend><?= __('Add Negocio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('telefono');
            echo $this->Form->control('direccion');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('lugares_id', ['options' => $lugares]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
