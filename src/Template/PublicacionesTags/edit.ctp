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
                ['action' => 'delete', $publicacionesTag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publicacionesTag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Publicaciones Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicacionesTags form large-9 medium-8 columns content">
    <?= $this->Form->create($publicacionesTag) ?>
    <fieldset>
        <legend><?= __('Edit Publicaciones Tag') ?></legend>
        <?php
            echo $this->Form->control('publicaciones_id', ['options' => $publicaciones]);
            echo $this->Form->control('tags_id', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
