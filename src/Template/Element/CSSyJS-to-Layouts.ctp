<?php
 /**
   *aca van ls verciones de los css y js para evitar el cache
   *ejemplo: tuvieja.css?v=2
   *lo mismo para js
 **/
?>
	<?= $this->Html->css('normalize.css') ?>
    <?= $this->Html->css('nav.css') ?> 
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css?=v5') ?>
    <?= $this->Html->css('productos.css?=v8') ?>
    <?= $this->Html->css('font-awesome.min.css') ?> 
      
     
    

    <?= $this->Html->script(array('jquery-3.2.1.min','main', 'pace.min', 'bootstrap.min')); ?>