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

          <iframe src="" frameborder="0" class="iframe-modal" scrolling="no" style="width: 1100px"></iframe>
          
        </div>
        <div class="modal-footer">
          <a href="#" class="btn">Close</a>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dalog -->
  </div><!-- /.modal -->