
<?php
/**
  * @var \App\View\AppView $this
  */
?>


<style>
.alert .close {
  position: relative;
  -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
}
  body {
    background-color: inherit;
    text-decoration: inherit;
  }


i {
  font-size:18px;
}
  


.nav>li .count {
  position: absolute;
  top: 10%;
  right: 25%;
  font-size: 10px;
  font-weight: normal;
  background: rgba(41,200,41,0.75);
  color: rgb(255,255,255);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

.conmain {
  margin-top: 50px;
  margin-left: 50px;
  margin-right: 50px;
}

.edit-page .panel {
  box-shadow: 1px 1px #ccc;
}

.paging_simple_numbers {
  
}
</style>

<?= $this->Html->css('dataTables.bootstrap.css') ?>
<!-- Main -->
<div class="edit-page">
  <div class="container-fluid conmain" >
  
  <!-- upper section -->
    <div class="row">
      <div class="col-sm-4">
      <!-- left -->
        <h3><i class="glyphicon glyphicon-briefcase"></i> Productos</h3>
        <hr>
        <?= $this->element('submit-producto') ?>   
       
        <?= $this->element('modal-product') ?>   
      
    </div><!-- /span-3 -->
    <div class="col-sm-8">
        
      <!-- column 2 --> 
      <h3><i class="glyphicon glyphicon-dashboard"></i> Información</h3>  
            
      <hr>
      
      <div class="row">
            <!-- center left--> 
        <div class="col-md-6">
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Informacion de contacto
                  <button class="btn btn-primary pull" style="float: right;" data-toggle="modal" href="#addWidgetModal">
                    <i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Editar
                  </button>
                </h4>
              </div>
            </div>
            <div class="panel-body" style="padding: 0;">  
                  
              <table class="table table-striped table-hover" style="margin-bottom: 0;">
                <tbody>
                            <tr>
                                <th>Nombre:</th>
                                <th><?= $negocio->nombre ?></th>
                            </tr>
                            <tr>
                                <th>Direccion:</th>
                                <th><?= $negocio->direccion ?></th>
                            </tr>
                            <tr>
                                <th>Descripcion:</th>
                                <th><?= $negocio->descripcion ?></th>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <th><?= $negocio->email ?></th>
                            </tr>
                            <tr>
                                <th>Telefono:</th>
                                <th><?= $negocio->telefono ?></th>
                            </tr>
                            <tr>
                                <th>Tags:</th>
                                <th><?= $tagsnegocio ?></th>
                            </tr>
                </tbody>
              </table>
            </div>
          </div><!--/panel-->
                       
                 <hr>
      
        </div><!--/col-->
         
            <!--center-right-->
        <div class="col-md-6">

          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Foto de portada
                  <button class="btn btn-primary" id="edportada" style="float: right;" data-toggle="modal" href="#cambiarPortada"><i class="glyphicon glyphicon-wrench" aria-hidden="true"></i> Editar</button>
                </h4>
              </div>
            </div>
            <div class="panel-body" style="padding: 5px; padding-bottom: 0; margin-bottom: 0;">  
              <div class=""><img src="<?= $fportada ?>" class="thumbnail img-responsive"></div>
            </div>
          </div><!--/panel-->
        </div><!--/col-span-6-->
      </div><!--/row-->
    <!--/col-span-9-->

    <div class="row">
      

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">
            <h4>Horarios
              <button class="btn btn-primary pull" style="float: right;" data-toggle="modal" href="#cambiarhorario">
                <i class="glyphicon glyphicon-wrench" aria-hidden="true"></i>
                 Editar
              </button>
            </h4>
          </div>
        </div>
        <div class="panel-body" style="padding: 0;">  
          <table class="table table-striped table-hover table-bordered" style="margin-bottom: 0;">
            <thead>
              <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
                <th>Domingo</th>

              </tr>
            </thead>
            <tbody>
              <tr id="horarios-dia">
                <td><?= $negocio->lunes ?></td>
                <td><?= $negocio->martes ?></td>
                <td><?= $negocio->miercoles ?></td>
                <td><?= $negocio->jueves ?></td>
                <td><?= $negocio->viernes ?></td>
                <td><?= $negocio->sabado ?></td>
                <td><?= $negocio->domingo ?></td>

              </tr>
            </tbody>
          </table>
        </div>
      </div><!--/panel-->
      

    </div>
  </div><!--/row-->
  </div>
  <hr>
  <!-- /upper section -->
  <h3><i class="glyphicon glyphicon-dashboard"></i> Productos</h3>  
            
       <hr>
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
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->

<!-- *****************modals******************* -->


      <div class="modal" id="addWidgetModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Datos de contacto</h4>
            </div>
            <form enctype="multipart/form-data" action="/negocios/editardatos" method="post">
            <div class="modal-body" style="padding: 0;">
            <table class="table table-striped table-hover" style="margin: 0;">
                              <tbody>
                                  <input type="hidden" name="id" value="<?= $negocio->id ?>">
                                  <tr>
                                      <th>Nombre:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="nombre" value="<?= $negocio->nombre ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Direccion:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="direccion" value="<?= $negocio->direccion ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Descripcion:</th>
                                      <th><input type="text" class="form-control" style="height: 68px;" id="foto1" name="descripcion" value="<?= $negocio->descripcion ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Email:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="email" value="<?= $negocio->email ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Telefono:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="telefono" value="<?= $negocio->telefono ?>"></th>
                                  </tr>
                                  <tr>
                                      <th>Tags:</th>
                                      <th><input type="text" class="form-control" id="foto1" name="tags" value="<?= $tagsnegocio ?>"></th>
                                  </tr>
                              </tbody>
                          </table>
                     
            </div>
            <div class="modal-footer">
              <a href="#" class="btn">Close</a>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->




  <div class="modal ifrmodal" id="cambiarPortada">
    <div class="modal-dialog" style="margin-left: 50px;">
      <div class="modal-content" style="width: 1100px; ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Portada</h4>
        </div>
        
        <div class="modal-body">

          <iframe src="" frameborder="0" class="iframe-modal" scrolling="no" style="width: 1100px"></iframe>
          
        </div>
        <div class="modal-footer">
          <a href="#" class="btn">Close</a>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dalog -->
  </div><!-- /.modal -->

<div class="modal" id="cambiarhorario">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Cambiar Horarios</h4>

            </div>
            <form enctype="multipart/form-data" action="/negocios/cambiohorario" method="post">
            <input type="hidden" name="id" value="<?= $negocio->id ?>">
            <div class="modal-body" style="padding: 0;">
            <table class="table table-striped table-hover table-bordered" style="margin: 0;">
            <thead>
              <tr>
                <th></th>
                <th style="width: 50px;">
                Cortado</th>
                <th>Horarios</th>
              </tr>
            </thead>
                              <tbody id="horarios-edit">
                                  <tr>
                                      <th style="width: 50px;">Lunes:</th>
                                      <td style="width: 50px;" >
                                        <input type="checkbox" id="check-lunes" name="check-lunes">
                                      </td>
                                      <td id="td-lunes">de 
                                        <input name="lunes1" id="lunes1" type="time" step="60" value="">
                                         a 
                                        <input name="lunes2" id="lunes2" type="time" step="60">
                                        <div id="hidden_lunes" class="hidden">
                                        y de 
                                        <input name="lunes3" id="lunes3" type="time" step="60" value="">
                                        a
                                        <input name="lunes4" id="lunes4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                      
                                  </tr>
                                  <tr >
                                      <th style="width: 50px;">Martes:</th>
                                      <td style="width: 60px;">
                                        <input type="checkbox" id="check-martes" name="check-martes">
                                      </td>
                                     <td id="td-martes">de 
                                        <input name="martes1" id="martes1" type="time" step="60">
                                         a 
                                        <input name="martes2" id="martes2" type="time" step="60">
                                        <div id="hidden_martes" class="hidden">
                                        y de 
                                        <input name="martes3" id="martes3" type="time" step="60" value="">
                                        a
                                        <input name="martes4" id="martes4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr >
                                      <th style="width: 50px;">Miercoles:</th>
                                      <td style="width: 60px;">
                                        <input type="checkbox" id="check-miercoles" name="check-miercoles">
                                      </td>
                                      <td id="td-miercoles">de 
                                        <input name="miercoles1" id="miercoles1" type="time" step="60">
                                         a 
                                        <input name="miercoles2" id="miercoles2" type="time" step="60">
                                        <div id="hidden_miercoles" class="hidden">
                                        y de 
                                        <input name="miercoles3" id="miercoles3" type="time" step="60" value="">
                                        a
                                        <input name="miercoles4" id="miercoles4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr >
                                      <th style="width: 50px;">Jueves:</th>
                                      <td style="width: 60px;">
                                        <input type="checkbox" id="check-jueves" name="check-jueves">
                                      </td>
                                      <td id="td-jueves">de 
                                        <input name="jueves1" id="jueves1" type="time" step="60">
                                         a 
                                        <input name="jueves2" id="jueves2" type="time" step="60">
                                        <div id="hidden_jueves" class="hidden">
                                        y de 
                                        <input name="jueves3" id="jueves3" type="time" step="60" value="">
                                        a
                                        <input name="jueves4" id="jueves4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr >
                                      <th style="width: 50px;">Viernes:</th>
                                      <td style="width: 60px;">
                                        <input type="checkbox" id="check-viernes" name="check-viernes">
                                      </td>
                                      <td id="td-viernes">de 
                                        <input name="viernes1" id="viernes1" type="time" step="60">
                                         a 
                                        <input name="viernes2" id="viernes2" type="time" step="60">
                                        <div id="hidden_viernes" class="hidden">
                                        y de 
                                        <input name="viernes3" id="viernes3" type="time" step="60" value="">
                                        a
                                        <input name="viernes4" id="viernes4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr >
                                      <th style="width: 50px;">Sabado:</th>
                                      <td style="width: 60px;">
                                        <input type="checkbox" id="check-sabado" name="check-sabado">
                                      </td>
                                      <td id="td-sabado">de 
                                        <input name="sabado1" id="sabado1" type="time" step="60">
                                         a 
                                        <input name="sabado2" id="sabado2" type="time" step="60">
                                        <div id="hidden_sabado" class="hidden">
                                        y de 
                                        <input name="sabado3" id="sabado3" type="time" step="60" value="">
                                        a
                                        <input name="sabado4" id="sabado4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr >
                                      <th style="width: 50px;">Domingo:</th>
                                      <td style="width: 60px;">
                                        <input type="checkbox" id="check-domingo" name="check-domingo">
                                      </td>
                                      <td id="td-domingo">de 
                                        <input name="domingo1" id="domingo1" type="time" step="60">
                                         a 
                                        <input name="domingo2" id="domingo2" type="time" step="60">
                                        <div id="hidden_domingo" class="hidden">
                                        y de 
                                        <input name="domingo3" id="domingo3" type="time" step="60" value="">
                                        a
                                        <input name="domingo4" id="domingo4" type="time" step="60" value="">
                                        </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                     
            </div>
            <div class="modal-footer">
              <a href="#" class="btn">Close</a>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
<script>
for (var i = 1; i <= 7; i++) {
  var dia = $('#horarios-dia :nth-child('+ i +')');
  if (dia.text().indexOf('|') > -1) {
    var diaSplit = dia.text().split(' | ');
    var hdia1 = diaSplit[0].split(' - ');
    var hdia2 = diaSplit[1].split(' - ');
    $('#horarios-edit :nth-child('+ i +') :nth-child(2) :nth-child(1)').prop('checked', true);
    $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(3)').removeClass('hidden');
    $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(1)').val(hdia1[0]);
    $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(2)').val(hdia1[1]);
    $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(3) :nth-child(1)').val(hdia2[0]);
    $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(3) :nth-child(2)').val(hdia2[1]);
  } else {
    if(dia.text().indexOf('-') > -1){
      var hdia1 = dia.text().split(' - ');
      $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(1)').val(hdia1[0]);
      $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(2)').val(hdia1[1]);
      $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(3) :nth-child(1)').val('');
      $('#horarios-edit :nth-child('+ i +') :nth-child(3) :nth-child(3) :nth-child(2)').val('');
    } else {
      console.log('el dia '+i+' está cerrado');
    }
    
  }
  
}

  

  $('input#check-lunes').change(function(){
   var dia = '#hidden_lunes';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
  $('input#check-martes').change(function(){
   var dia = '#hidden_martes';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
    $('input#check-miercoles').change(function(){
   var dia = '#hidden_miercoles';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
      $('input#check-jueves').change(function(){
   var dia = '#hidden_jueves';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
        $('input#check-viernes').change(function(){
   var dia = '#hidden_viernes';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
          $('input#check-sabado').change(function(){
   var dia = '#hidden_sabado';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
            $('input#check-domingo').change(function(){
   var dia = '#hidden_domingo';
   if($(this).is(':checked')){
    // Code in the case checkbox is checked.
    $(dia).removeClass('hidden');
    } else {
    $(dia).addClass('hidden');
    $(dia).find(':nth-child(1)').val('');
    $(dia).find(':nth-child(2)').val('');
    }
  });
  

</script>






</div>


</div> <!-- fin edit-page -->


<?= $this->element('footer') ?>


<?= $this->Html->script('dataTables.bootstrap') ?>
<?= $this->Html->script('jquery.dataTables') ?>

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