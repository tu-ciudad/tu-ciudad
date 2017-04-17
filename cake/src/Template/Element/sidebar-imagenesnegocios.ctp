<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="header headd"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Imagenes Negocio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?></li>
    </ul>
</nav>