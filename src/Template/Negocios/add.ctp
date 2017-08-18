<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div style="margin-top: 50px;"></div>
<nav class="large-3 medium-4 columns col-md-3" id="actions-sidebar">
    <ul class="side-nav nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="negocios form large-9 medium-8 col-md-9 columns content ">
    <?= $this->Form->create($negocio) ?>
    <fieldset>
        <legend><?= __('Add Negocio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('telefono');
            echo $this->Form->control('direccion');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('lugares_id', ['options' => $lugares]);
            echo $this->Form->control('perfilfb');
            echo $this->Form->control('email');
            echo $this->Form->control('users_id');
            echo $this->Form->control('lat',['type' => 'hiden', 'default' => '1234']);
            echo $this->Form->control('lng',['type' => 'hiden', 'default' => '4321']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
