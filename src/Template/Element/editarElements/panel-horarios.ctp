<?php
/**
  * @var \App\View\AppView $this
  */
?>
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




<!-- modal -->
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



<!-- script -->
<script>
for (var h = 1; h <= 7; h++) {
  var dia = $('#horarios-dia :nth-child('+ h +')');
  if (dia.text().indexOf('|') > -1) {
    var diaSplit = dia.text().split(' | ');
    var hdia1 = diaSplit[0].split(' - ');
    var hdia2 = diaSplit[1].split(' - ');
    $('#horarios-edit :nth-child('+ h +') :nth-child(2) :nth-child(1)').prop('checked', true);
    $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(3)').removeClass('hidden');
    $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(1)').val(hdia1[0]);
    $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(2)').val(hdia1[1]);
    $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(3) :nth-child(1)').val(hdia2[0]);
    $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(3) :nth-child(2)').val(hdia2[1]);
  } else {
    if(dia.text().indexOf('-') > -1){
      var hdia1 = dia.text().split(' - ');
      $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(1)').val(hdia1[0]);
      $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(2)').val(hdia1[1]);
      $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(3) :nth-child(1)').val('');
      $('#horarios-edit :nth-child('+ h +') :nth-child(3) :nth-child(3) :nth-child(2)').val('');
    } else {
      console.log('el dia '+h+' está cerrado');
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