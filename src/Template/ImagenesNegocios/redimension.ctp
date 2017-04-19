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
    
/* Apply these styles only when #preview-pane has
   been placed within the Jcrop widget */
.jcrop-holder #preview-pane {
  display: block;
  position: absolute;
  //z-index: 2000;
  top: 10px;
  right: -280px;
  padding: 6px;
  border: 1px rgba(0,0,0,.4) solid;
  background-color: white;

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;

  -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}

/* The Javascript code will set the aspect ratio of the crop
   area based on the size of the thumbnail preview,
   specified here */
#preview-pane .preview-container {
  width: 200px;
  height: 200px;
  overflow: hidden;
}
      
			
			
    </style>
<?= $this->Html->css('jquery.Jcrop.css') ?>
<?= $this->Html->script('jquery.Jcrop.min.js') ?>
<?= $this->element('sidebar-imagenesnegocios') ?>

<h4><?= $ruta; ?></h4>

<!--	
<div id="destino"></div>
<input type="text" name="" value="<?= $ruta; ?>">
-->
	<div class="col-md-8 col-md-push-1">
		 <img src="<?= $ruta1; ?>" id="target">
		 <input type="button" value="cortar" onclick="enviar();">
	</div>
   <div id="preview-pane">
    <div class="preview-container">
      <img src="<?= $ruta1; ?>" class="jcrop-preview" alt="Preview" />
    </div>
  </div>
    
 	



<div class="modal fade" id="modal-yes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-success">
success
            </div>
            <div class="modal-body">
            <div id="preview-pane">
    <div class="preview-container">
      <img src="<?= $ruta1; ?>" class="jcrop-preview" alt="Preview" />
    </div>
  </div>
<button><?= $this->Html->link(__('Go Back'), ['action' => 'add']) ?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-no" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-danger">
Error
            </div>
            <div class="modal-body">
Seleccione un area!!
            </div>
        </div>
    </div>
</div>





    <script type="text/javascript">
        var x='';
        var y='';
        var w='';
        var h='';
        var imgurl='<?= $ruta; ?>';
        var imgurl1='<?= $ruta1; ?>';
        var jcrop_api;
        var boundx;
        var boundy;

        // Grab some information about the preview pane
        $preview = $('#preview-pane'),
        $pcnt = $('#preview-pane .preview-container'),
        $pimg = $('#preview-pane .preview-container img'),

        xsize = $pcnt.width(),
        ysize = $pcnt.height();

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
                onChange: updatePreview,
      			onSelect: showCoords,
                bgColor:     'grey',
                bgOpacity:   .4,
                aspectRatio: xsize / ysize,
            },function(){
      // Use the API to get the real image size
      var bounds = this.getBounds();
      boundx = bounds[0];
      boundy = bounds[1];
      // Store the API in the jcrop_api variable
      jcrop_api = this;

      // Move the preview into the jcrop container for css positioning
      $preview.appendTo(jcrop_api.ui.holder);
    });
            function updatePreview(c)
    {
    		  c.x1=c.x;
              c.y1=c.y;
              c.w1=c.w;
              c.h1=c.h;
      if (parseInt(c.w) > 0)
      {
        var rx = xsize / c.w1;
        var ry = ysize / c.h1;

        $pimg.css({
          width: Math.round(rx * boundx) + 'px',
          height: Math.round(ry * boundy) + 'px',
          marginLeft: '-' + Math.round(rx * c.x1) + 'px',
          marginTop: '-' + Math.round(ry * c.y1) + 'px'
        });
      }
    };
        });
        function enviar()
        {
            if (parseInt(w)) {
                $.ajax({
                url:'cortar.php',
                type:'POST',
                data:'x='+x+'&y='+y+'&w='+w+'&h='+h+'&imgurl='+imgurl+'&imgurl1='+imgurl1,
                success: function(data) {
           			$('#modal-yes').modal('toggle');

                    
         	 		},
         	 	error : function(xhr, status) {
        				alert('Disculpe, existió un problema');
    					}       
                    

                    });
            }else{
                $('#modal-no').modal('toggle');
            }
            
        }
        function goBack() {
    window.history.back()
}
    </script>
