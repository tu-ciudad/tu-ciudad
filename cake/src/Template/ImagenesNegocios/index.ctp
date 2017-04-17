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
 <?= $this->element('sidebar-imagenesnegocios') ?>

<div class="col-md-8 index  columns content">
    <h3><?= __('Imagenes Negocios') ?></h3>
    <table class="nav nav-stacked">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ubicacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('negocios_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagen') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($imagenesNegocios as $imagenesNegocio): ?>
            <tr>
                <td><?= $this->Number->format($imagenesNegocio->id) ?></td>
                <td><?= h($imagenesNegocio->ubicacion) ?></td>
                <td><?= $imagenesNegocio->has('negocio') ? $this->Html->link($imagenesNegocio->negocio->id, ['controller' => 'Negocios', 'action' => 'view', $imagenesNegocio->negocio->id]) : '' ?></td>
                 <td><?= $this->Html->image('../files/ImagenesNegocios/foto/'. $imagenesNegocio->foto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $imagenesNegocio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $imagenesNegocio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imagenesNegocio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imagenesNegocio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

