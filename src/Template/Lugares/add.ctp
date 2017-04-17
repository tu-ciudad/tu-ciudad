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
        <li><?= $this->Html->link(__('List Lugares'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lugares form col-md-8 columns content">
    <?= $this->Form->create($lugare) ?>
    <fieldset>
        <legend><?= __('Add Lugare') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
