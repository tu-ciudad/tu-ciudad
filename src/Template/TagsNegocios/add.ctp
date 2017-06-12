<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tagsnegocios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tagsnegocios form large-9 medium-8 columns content">
    <?= $this->Form->create($tagsnegocio) ?>
    <fieldset>
        <legend><?= __('Add Tagsnegocio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
