<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div id="page-inner"> 

                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Todos los productos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Precio</th>
                                            <th>Descripción</th>
                                            <th>Imagenes</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                         $i = 0;
                                         foreach ($productos as $producto): ?>
                                             <tr class="gradeU">
                                                <td><?= $producto->titulo ?></td>
                                                <td><span>$<?= $producto->precio ?></span><sup>00</sup></td>
                                                <td><?= $producto->cuerpo ?></td>
                                                <td class="center" style="margin: 0; padding: 2px;"><img class="" src=<?= $imagenesproductos[$i][0]->foto ?> alt="" style="width: 40px; border: 1px solid #ccc; "></td>
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
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
    
                   </div>


<!-- scripts -->
<script>
    $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

</script>
<script>
  function pmodal(elem){
$('#caru  > .item').addClass('active');
    var id = $(elem).attr('pid');
        nNombre = $('#pid' + id + ' > li:nth-child(1)').text();
        pTitulo = $('#pid' + id + ' > li:nth-child(2)').text();
        pPrecio = $('#pid' + id + ' > li:nth-child(3)').text();
        pCuerpo = $('#pid' + id + ' > li:nth-child(4)').text();
        pImagen = $('#pid' + id + ' > li:nth-child(5)').text();
        numImagen = $('#pid' + id + ' > ul > li:first-child').text();
        //asigno los datos del producto al modal incluyendo la primer imagen
        $('#pTitulo').text(pTitulo);
        $('#pPrecio').text(pPrecio);
        $('#pCuerpo').text(pCuerpo);
        $('#caru > div > img').attr('src', pImagen);
        $('#carui > li > img').attr('src', pImagen);

          //j es la posicion de la imagen, arranca del 3 porque el 1 es la cantidad de imagenes y el 2 es la primer imagen
         var j = 3;
         for ( var i = 1; i < numImagen; i++ ) {
          //agrega las imagenes que falta (elementos virtuales)
          allImagenes = $('#pid' + id + ' > ul > li:nth-child('+ j +')').text();

          $('#caru').append('<div class="item thumbnail dom">'+'<img src='+ allImagenes +' /></div>');
         
         $('#carui').append('<li data-target='+'#carousel-custom'+' class="dom" data-slide-to='+ i +'><img src='+ allImagenes +' /></li>');
         j = j + 1;
         }
     console.log(numImagen )
    };

    $('#modalProduct').on('hidden.bs.modal', function (e) {
      //elimina la imagenes (elementos virtuales) que crea, y deja solo la primera
      $('.dom').remove();
      $('#caru  > .item').addClass('active');
      
    });
</script>
<script> //carga el iframe al abrir el modal, y lo recarga cada ves que se abre el modal
$('#edportada').click(function(){ //onclick en fpefil, abre modal con iframe dentro

    $('.ifrmodal').on('shown.bs.modal',function(){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
  $(this).find('iframe').attr('src','/imagenes-negocios/add1')
});
  });

</script>