<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tags Negocios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tagsNegocios form large-9 medium-8 columns content">
    <?= $this->Form->create($tagsNegocio) ?>
    <fieldset>
        <legend><?= __('Add Tags Negocio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
