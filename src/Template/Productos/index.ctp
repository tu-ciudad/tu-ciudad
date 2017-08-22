<?php
/**
  * @var \App\View\AppView $this
  */
?>
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
                                                		echo($tags->nombre.' - ');
                                                	
												  endforeach ?>
                                                </td>
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
    			   //console.log(currentTitle);
			       updateVal(currentEle, value, currentId, currentTitle);
			    });
			});

			function updateVal(currentEle, value, id, title) {
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
			            url: '../../productos',
			            type: 'POST',
			            data: formData, //data que envia
			            async: true, //para la barra de progreso
			            xhr: function() { }, //barra de progreso fin
			            success: function (data) {
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

</script>

