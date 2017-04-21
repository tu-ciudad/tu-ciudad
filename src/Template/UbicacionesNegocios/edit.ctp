<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ubicacionesNegocio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ubicacionesNegocio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ubicaciones Negocios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ubicacionesNegocios form large-9 medium-8 columns content">
    <?= $this->Form->create($ubicacionesNegocio) ?>
    <fieldset>
        <legend><?= __('Edit Ubicaciones Negocio') ?></legend>
        <?php
            echo $this->Form->control('X');
            echo $this->Form->control('Y');
            echo $this->Form->control('negocios_id', ['options' => $negocios]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
