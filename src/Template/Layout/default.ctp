<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License


  <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    
 */
 
$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('scrolling-nav.css') ?>
    <?= $this->Html->css('onepage-scroll.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?> 
    <?= $this->Html->css('font-awesome-animation.min.css') ?>
    <?= $this->Html->css('ofersec.css') ?>
     <?= $this->Html->css('owl.css') ?>
    <?= $this->Html->css('owl_002.css') ?>
    <?= $this->Html->css('animate.css') ?>

    <?= $this->Html->script(array('jquery-3.2.1.min', 'pace.min', 'bootstrap.min', 'parallax', 'scrolling-nav', 'jquery.easing.min', 'countdown', 'afixx')); ?>

    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body data-spy="scroll" class="fixed-sn" onconte-xtmenu='return false' onkey-down='return false'>
        
    <?= $this->element('nav') ?>



    

    <?= $this->Flash->render() ?>
    <div class="">
        <?= $this->fetch('content') ?>
    </div>

<!--
   <?= $this->element('footer') ?> -->

</body>
</html>
