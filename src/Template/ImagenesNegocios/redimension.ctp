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
<style>
    

      
			
			
    </style>
<?= $this->Html->css('jquery.Jcrop.css') ?>
<?= $this->Html->script('jquery.Jcrop.min.js') ?>
<?= $this->element('sidebar-imagenesnegocios') ?>

<h4><?= $ruta; ?></h4>

<!--	
<div id="destino"></div>
<input type="text" name="" value="<?= $ruta; ?>">
-->
    <img src="<?= $ruta1; ?>" id="target">
    
 	<input type="button" value="cortar" onclick="enviar();">


    <script type="text/javascript">
        var x='';
        var y='';
        var w='';
        var h='';
        var imgurl='<?= $ruta; ?>';
        function showCoords(c)
          {
              // variables can be accessed here as
              // c.x, c.y, c.x2, c.y2, c.w, c.h
              //alert(c.x+' '+c.y+' '+c.x2+' '+c.y2+' '+c.w+' '+c.h)
              x=c.x;
              y=c.y;
              w=c.w;
              h=c.h;
          };    
        
        jQuery(function($) {
            $('#target').Jcrop({
                onSelect: showCoords,
                bgColor:     'grey',
                bgOpacity:   .4,
                aspectRatio: 1,
            });
        });
        function enviar()
        {
            if (parseInt(w)) {
                $.ajax({
                url:'cortar.php',
                type:'POST',
                data:'x='+x+'&y='+y+'&w='+w+'&h='+h+'&imgurl='+imgurl,
                success:function(rpt){
                    //alert(rpt);
                    $("#destino").html(rpt);
                }        
                    });
            }else{
                alert('seleccion area de recorte');
            }
            
        }
    </script>
