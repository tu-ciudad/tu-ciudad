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
        <li><?= $this->Html->link(__('List Imagenes Publicaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Publicaciones'), ['controller' => 'Publicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicacione'), ['controller' => 'Publicaciones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="imagenesPublicaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($imagenesPublicacione) ?>
    <fieldset>
        <legend><?= __('Add Imagenes Publicacione') ?></legend>
        <?php
            echo $this->Form->control('foto');
            echo $this->Form->control('numero');
            echo $this->Form->control('publicaciones_id', ['options' => $publicaciones]);
            echo $this->Form->control('foto_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
