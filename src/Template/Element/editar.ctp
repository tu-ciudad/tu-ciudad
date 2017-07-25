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
          <!-- panel info de contacto -->
          <?= $this->element('editarElements/panel-infoContacto') ?>          
          <hr>
      
        </div><!--/col-->
         
            <!--center-right-->
        <div class="col-md-6">

          <?= $this->element('editarElements/panel-portada') ?>

        </div><!--/col-span-6-->

      </div><!--/row-->
    <!--/col-span-9-->

    <div class="row">
      

      <?= $this->element('editarElements/panel-horarios') ?>
      

    </div>


  </div><!--/row-->
  </div>

      <hr>
      <h3><i class="glyphicon glyphicon-dashboard"></i> Productos</h3>       
      <hr>

      <?= $this->element('editarElements/panel-tablaProductos') ?>           
    


    </div><!--/col-->
  </div><!--/row-->
  
<!--/container-->
<!-- /Main -->

    


<?= $this->element('footer') ?>


<?= $this->Html->script('dataTables.bootstrap') ?>
<?= $this->Html->script('jquery.dataTables') ?>


