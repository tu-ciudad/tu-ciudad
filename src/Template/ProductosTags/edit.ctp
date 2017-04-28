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
                ['action' => 'delete', $productosTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productosTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Productos Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['controller' => 'Productos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productosTags form large-9 medium-8 columns content">
    <?= $this->Form->create($productosTag) ?>
    <fieldset>
        <legend><?= __('Edit Productos Tag') ?></legend>
        <?php
            echo $this->Form->control('productos_id', ['options' => $productos]);
            echo $this->Form->control('tags_id', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
