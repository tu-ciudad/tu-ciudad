<?php
/**
  * @var \App\View\AppView $this
  */
?>
 <?= $this->Html->css('tagify.css') ?>
        <?= $this->Html->script('tagify') ?>
 

        <style>
            p{ line-height:1.4; }
            code{ padding:2px 3px; background:lightyellow; }

            tags{
                /width: 400px;
                margin: 1.5em 0;
                border-radius: 5px;
                position: relative;
                z-index: 100;
            }

            /* for disabling the script */
            //label{ position:fixed; bottom:10px; right:10px; cursor:pointer; font:600 .8em Arial; }
            .disabled tags{
                max-width:none;
                min-width:0;
                border:0;
            }

            .disabled tags tag,
            .disabled tags div{ display:none }

            .disabled tags input,
            .disabled tags textarea{ display:initial; border:1px inset; }


            .blockDiv {
			  position: absolute;
			  top: 0px;
			  left: 0px;
			  background-color: #000;
			  width: 0px;
			  height: 0px;
			  z-index: 10;
			}
			.thVal {
				position: relative;
				z-index: 11;
				height: 100%;
				width: 100%;
			}
        </style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<style>
	.gradeU > td {
		padding: 2px !important;
	}
div.dataTables_wrapper {
        /width: 800px;
        margin: 0 auto;
    }
</style>
<div style="margin-top: 30px;"></div>
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['controller' => 'Negocios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Negocio'), ['controller' => 'Negocios', 'action' => 'add']) ?></li>
    </ul>
</nav>



<div id="page-inner col-md-8"> 

                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>id</th>
                                            <th>titulo</th>
                                            <th>precio</th>
                                            <th>cuerpo</th>
                                            <th>tags</th>
                                            <th>comercio</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                         $i = 0;
                                         foreach ($productos as $producto): ?>
                                             <tr class="gradeU">
                                             <td><?= $producto->id ?></td>
                                                <td><?= $producto->titulo ?></td>
                                                <td><span>$<?= $producto->precio ?></span><sup>00</sup></td>
                                                <td><?= $producto->cuerpo ?></td>
                                                <td class="center" style="margin: 0; padding: 2px;">
                                                	<?php foreach ($producto->tags as $tags ) :
                                                		echo($tags->nombre.',');
                                                	
												  endforeach ?>
                                                </td>
                                                <td><?= $producto->negocio->nombre ?></td>
                                                <td class="center">
                                                  <center>
                                                  <?= $this->Html->link(__('Editar'), ['controller'=>'productos','action' => 'edit', $producto->id]) ?> - 
                                                  <a data-toggle="modal" data-target="#modalProduct" pid="<?= $i?>" onclick="pmodal(this);">Ver</a> - 
                                                  <?= $this->Form->postLink(__('Eliminar'), ['controller'=>'productos','action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
                                                  </center>
                                                </td>
                                              </tr>

                                                        <?php
                                                        $i=$i+1;
                                         endforeach; ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                     
                    
                    <!--End Advanced Tables -->
    
                   </div>
<br>
<?= $this->Html->script('dataTables.bootstrap') ?>
<?= $this->Html->script('jquery.dataTables') ?>
<script>
    $(document).ready(function () {
                $('#dataTables-example').DataTable( {
        			"scrollX": true
    			} );
    			var table = $('#dataTables-example').DataTable();
    			var currentId = 0;
    			$('#dataTables-example tbody').on("dblclick", 'tr', function () {
			       currentId = table.row( this ).data();
			       //console.log(currentId[0]);
			    });
    			
    			$('#dataTables-example tbody').on("dblclick", 'td', function () {
			        
			       var currentEle = $(this);
			       var value = table.cell( this ).data();
			       var idx = table.cell( this ).index().column;
    			   var title = table.column( idx ).header();
    			   var currentTitle = $(title).html();
    			   if (currentTitle == 'tags' || currentTitle=='id' || currentTitle=='comercio') {
    			   		if (currentTitle=='tags') {
    			   			updateTags(currentEle, value, currentId, currentTitle);
    			   		}

			   } else {
			   	updateVal(currentEle, value, currentId, currentTitle);
			   }

			    });
			});

    		//tags
    		function updateTags(currentEle, value, id, title){
    			blockScreen();
    			$(currentEle).html('<form><textarea name="tags2" id="tag" placeholder="Tags">'+value+'</textarea></form>');
			  
    			  var data = <?=  $vectortags ?>;
             var diss = new Array();
             for(var i = 0; i < data.length; i++) {
                 diss.push(data[i].nombre);
                 }
                // console.log(diss);

            var input2 = document.querySelector('textarea[name=tags2]'),
                // init Tagify script on the above inputs
                tagify2 = new Tagify(input2, {
                    enforeWhitelist : true,
                    whitelist       : diss,
                    callbacks       : {
                        add    : onAddTag,
                        remove : onRemoveTag
                    }
                });
            function onAddTag(e){}
            function onRemoveTag(e){}
            function onDuplicateAdded(e){}
        /*******************fin call tags**********************/
    	$(".placeholder").focus();
		$("tags").keyup(function (event) {
			  	if (event.keyCode == 13) {
			  	/*comienzo funcion tags*/
         		var tags = new Array();
         		var nuevosTags= new Array();
                val = $('#tag').val();
                //console.log(val);
                //compara  por cada tag agregado que exista en el array original
                var data_array = val.split(", ");
                for (i = 0; i < data_array.length; i++){
                    for (x = 0; x < data.length; x++){
                        if(data_array[i] == data[x].nombre){
                            //console.log(data[x].id +': '+ data_array[i] )
                            nuevosTags.push(data_array[i]+',');
                            tags.push(data[x].id);
                        }
                    }
                  } 
                  $(currentEle).html(nuevosTags);
                 
			            var formData = new FormData();
			            formData.append("id", id[0]);
			            formData.append("cambio", title);
			            formData.append("valor", tags);
			          $.ajax({
			            url: '../../productos/modificar',
			            type: 'POST',
			            data: formData, //data que envia
			            async: true, //para la barra de progreso
			            xhr: function() { }, //barra de progreso fin
			            success: function (data) {
			            	$(currentEle).html(nuevosTags);
			            	unblockScreen();
			               console.log('success');
			                  // Get the snackbar DIV
			                     // var x = document.getElementById("snackbar")

			                      // Add the "show" class to DIV
			                     // x.className = "show";          
			         },   
			            cache: false,
			            contentType: false,
			            processData: false,

			        });
			        return false;
                }
                //console.log(tags); /*fin tags*/
			  });
			};

    		//funcion editar campos
			function updateVal(currentEle, value, id, title) {
				blockScreen();
			  $(currentEle).html('<input class="thVal" type="text" value="' + value + '" />');
			  $(".thVal").focus();
			  $(".thVal").keyup(function (event) {
			      if (event.keyCode == 13) {

			          //$(currentEle).html($(".thVal").val().trim());
			         	var cambio = $(".thVal").val();
			            var formData = new FormData();
			            formData.append("id", id[0]);
			            formData.append("cambio", title);
			            formData.append("valor", cambio);
			          $.ajax({
			            url: '../../productos/modificar',
			            type: 'POST',
			            data: formData, //data que envia
			            async: true, //para la barra de progreso
			            xhr: function() { }, //barra de progreso fin
			            success: function (data) {
			            	$(currentEle).html($(".thVal").val().trim());
			            	unblockScreen();
			               console.log('success');
			                  // Get the snackbar DIV
			                     // var x = document.getElementById("snackbar")

			                      // Add the "show" class to DIV
			                     // x.className = "show";          
			         },   
			            cache: false,
			            contentType: false,
			            processData: false,

			        });
			        return false;
				}
			  });

			  $(document).click(function () { // you can use $('html')
			        //$(currentEle).html($(".thVal").val().trim());
			  })
			            };
function blockScreen() {
  $('<div id="screenBlock"></div>').appendTo('body');
  $('#screenBlock').css( { opacity: 0, width: $(document).width(), height: $(document).height() } );
  $('#screenBlock').addClass('blockDiv');
  $('#screenBlock').animate({opacity: 0.7}, 200);
}

function unblockScreen() {
  $('#screenBlock').animate({opacity: 0}, 200, function() {
      $('#screenBlock').remove();
  });
}
</script>

