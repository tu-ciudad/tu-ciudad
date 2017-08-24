<?php
 /**
   *aca van ls verciones de los css y js para evitar el cache
   *ejemplo: tuvieja.css?v=2
   *lo mismo para js
 **/
?>
	<?= $this->Html->css('normalize.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css?=v19') ?>
    <?= $this->Html->css('productos.css?=v15') ?>
    <?= $this->Html->css('font-awesome.min.css') ?> 

     
    

    <?= $this->Html->script(array('jquery-3.2.1.min','main', 'pace.min', 'bootstrap.min')); ?>
    <script>
    	function dimensionar(elem){
    $(elem).css({opacity: '1'});
    $(elem).parent().siblings('div .preloader').removeClass('preloader');
    $(elem).parent().removeClass('preview');
    $(elem).parent().css({'background-image':''});
    dwidth = $(elem).width();
    dheight = $(elem).height();
    if(dwidth > dheight){
      $(elem).css({'width': '100%','height': 'auto'});     
    }
  };
  		function comready(elem) {
  			$(elem).css({opacity: '1'});
  			$(elem).parent().removeClass('preview');
  			$(elem).parent().css({'background-image':''});
  		}
    </script>
