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
                ['action' => 'delete', $lugare->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lugare->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lugares form large-9 medium-8 columns content">
    <?= $this->Form->create($lugare) ?>
    <fieldset>
        <legend><?= __('Edit Lugare') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
