<?php
/**
  * @var \App\View\AppView $this
  */
?>
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


<!-- modal -->
<div class="modal ifrmodal" id="cambiarPortada">
    <div class="modal-dialog" style="margin-left: 50px;">
      <div class="modal-content" style="width: 1100px; ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Portada</h4>
        </div>
        
        <div class="modal-body">

         <!--  <iframe src="" frameborder="0" class="iframe-modal" scrolling="no" style="width: 1100px"></iframe> -->


         
         <img src="" id="resultfoto1" class="labelthumb" alt="" onload="agregar(1);" >

          <div class="row mleft" id="subimp" style="/border: 1px solid;">
          <div class="col-md-3 empty" id="div1">
            <label for="fotoPortada" class="label-input">
            <img src="" id="resultfotoPortada" class="labelthumb" alt="" onload="agregar(1);" >
            <input type="file" accept="image/*" id="fotoPortada" name="fotoPortada" style="" onchange="base64P(this);" >
            <button type="button" class="close hidden" data-dismiss="label" onclick="cerrar(1);">×</button>
            </label>
            
          </div>
          
    </div>


          <?= $this->Form->create($imagenesNegocio,['url' => ['controller' => 'imagenesNegocios' , 'action' =>'add']]) ?>
          <fieldset>
              <legend><?= __('Add Imagenes Negocio') ?></legend>
              <?php
                  echo $this->Form->control('ubicacion',['type' => 'hidden','default' => 'portada']);
                  echo $this->Form->control('negocios_id',['type' => 'hidden','default' => $negocio->id]);
                  echo $this->Form->control('fotop1',['type' => 'hidden']);
              ?>
          </fieldset>
          <?= $this->Form->button(__('Submit')) ?>
          <?= $this->Form->end() ?>


        </div>
        <div class="modal-footer">
          <a href="#" class="btn">Close</a>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dalog -->
  </div><!-- /.modal -->



  <script>
    //funcion de recorte
function base64P(input){
var img = input.files[0];
var id = input.id;
//console.log(id);
    if(!iEdit.open(img, 2.75/1, function(res){
      $("#resultfotoPortada").attr("src", res); 
      $('#fotop1').val(res);
      console.log($('#fotop1').val())
    
    })){
     
    }
}

  </script>