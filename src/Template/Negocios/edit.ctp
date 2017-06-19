
<?php
/**
  * @var \App\View\AppView $this
  */
?>


<style>
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
</style>

<?= $this->Html->css('dataTables.bootstrap.css') ?>
<!-- Main -->
<div class="container-fluid conmain" >
  
  <!-- upper section -->
  <div class="row">
  <div class="col-sm-4">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
      <hr>
      
      <!-- <ul class="nav nav-stacked">
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-link"></i> Links</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-book"></i> Books</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
      </ul> -->
       <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title"><h4>Informacion de contacto<button class="btn btn-primary" style="float: right;" data-toggle="modal" href="#addWidgetModal"><i class="fa fa-cog" aria-hidden="true"></i></span> Cambiar</button></h4>
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
      
    </div><!-- /span-3 -->
    <div class="col-sm-8">
        
      <!-- column 2 --> 
       <h3><i class="glyphicon glyphicon-dashboard"></i> Bootply Dashboard</h3>  
            
       <hr>
      
     <div class="row">
            <!-- center left--> 
          <div class="col-md-7">
       
                        <?= $this->element('submit-producto') ?>   
              
            </div><!--/col-->
         
            <!--center-right-->
          <div class="col-md-5">

            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title"><h4>Foto de portada<button class="btn btn-primary" style="float: right;" data-toggle="modal" href="#cambiarPortada"><i class="fa fa-cog" aria-hidden="true"></i></span> Cambiar</button></h4>
                    </div>
                </div>
                <div class="panel-body" style="padding: 5px; padding-bottom: 0; margin-bottom: 0;">  
                    <div class=""><img src="<?= $fportada ?>" class="thumbnail img-responsive"></div>
                </div>
            </div><!--/panel-->

             

              
       
              
      </div><!--/col-span-6-->
     
       </div><!--/row-->
    </div><!--/col-span-9-->
    
  </div><!--/row-->
  <hr>
  <!-- /upper section -->
  <h3><i class="glyphicon glyphicon-dashboard"></i> Productos</h3>  
            
       <hr>
   <div id="page-inner"> 
               
        
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Advanced Tables
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
                                                <td class="center"><img class="" src=<?= $imagenesproductos[$i][0]->foto ?> alt="" style="width: 50px;"></td>
                                                <td class="center">
                                                <center>
                                                <a href="#">Editar</a> - 
                                                <a href="#">Ver</a> - 
                                                <a href="#">Eliminar</a></td>
                                                </center>
                                              </tr>
                                                           <!--  <img class="" src=<?= $imagenesproductos[$i][0]->foto ?> alt="">
                                                            
                                                            <div class="content">
                                                                <h3>
                                                                    <span><?= $producto->titulo ?></span>
                                                                </h3>
                                                                
                                                                <h5>
                                                                <a href="#" >
                                                                    <span><?= $negocio->nombre ?></span>
                                                                </a>
                                                                </h5>
                                                            </div>

                                                            <div class="content-bot"> 
                                                                
                                                               <h3>  
                                                                    <span>$<?= $producto->precio ?></span><sup>00</sup>
                                                               </h3>
                                                            </div>

                                                    
                                                </div>
                                            </div>  -->
                                                         
                                                        

                                                        <?php
                                                        $i=$i+1;
                                         endforeach; ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
         
  
      
      <hr>
      
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please remember to <a href="#">Logout</a> for classified security.
      </div>

    
    </div>
    
      <hr>
              
      <!--  <div class="panel panel-default">
                  <div class="panel-heading"><h4>Processing Status</h4></div>
                  <div class="panel-body">
                    
                    <small>Complete</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                      </div>
                    </div>
                    <small>In Progress</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <small>At Risk</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                  </div>
              </div>       
       -->
      
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->




<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Datos de contacto</h4>
      </div>
      <form enctype="multipart/form-data" action="/productos/add" method="post">
      <div class="modal-body" style="padding: 0;">
      <table class="table table-striped table-hover" style="margin: 0;">
                        <tbody>
                            <tr>
                                <th>Nombre:</th>
                                <th><input type="text" id="foto1" name="nombre" value="<?= $negocio->nombre ?>"></th>
                            </tr>
                            <tr>
                                <th>Direccion:</th>
                                <th><input type="text" id="foto1" name="direccion" value="<?= $negocio->direccion ?>"></th>
                            </tr>
                            <tr>
                                <th>Descripcion:</th>
                                <th><input type="text" id="foto1" name="descripcion" value="<?= $negocio->descripcion ?>"></th>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <th><input type="text" id="foto1" name="email" value="<?= $negocio->email ?>"></th>
                            </tr>
                            <tr>
                                <th>Telefono:</th>
                                <th><input type="text" id="foto1" name="telefono" value="<?= $negocio->telefono ?>"></th>
                            </tr>
                            <tr>
                                <th>Tags:</th>
                                <th><input type="text" id="foto1" name="tags" value="<?= $tagsnegocio ?>"></th>
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


<div class="modal" id="cambiarPortada">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Portada</h4>
      </div>
      <form enctype="multipart/form-data" action="/productos/add" method="post">
      <div class="modal-body">
        <p>Cambiar foto de portada</p>
        <br>
          <input type="file" accept="image/*" id="foto1" name="portada">
        
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->


</div>




<?= $this->element('footer') ?>


<?= $this->Html->script('dataTables.bootstrap') ?>
<?= $this->Html->script('jquery.dataTables') ?>

<script>
    $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

</script>
<!-- <style>
    
 .cropp{ 
        width: 250px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 250px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
        position: relative;  /* MANDATORY */
        /margin: 90px auto;
        /margin: 50px 70px 20px;
        border: 3px  solid #FFF;
        box-sizing: content-box;
        -moz-box-sizing: content-box;
        border-radius: 2px;
        /background-image: url(../img/placeholder.png);
        background-repeat: no-repeat;
        background-position: center;
        /box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
      } 

      .cropp1{ 
        width: 200px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
        height: 200px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
        position: relative;  /* MANDATORY */
        /margin: 90px auto;
        /margin: 50px 70px 20px;
        border: 3px  solid #FFF;
        box-sizing: content-box;
        -moz-box-sizing: content-box;
        border-radius: 2px;
        /background-image: url(../img/placeholder.png);
        background-repeat: no-repeat;
        background-position: center;
        /box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
      } 
      
  .thumbRes {
    width: 100px;
     background-color: rgb(233, 235, 238);
    border: 3px solid rgb(233, 235, 238);
    border-radius: 3px;
    margin-right: 10px;
  }          

<br>
<br>
<br>
   <h3 id="data"></h3>
    
    <div id="yourIdasd" class="cropp1"></div> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
   <!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
   
    
    <script>
                var k = 0;
                var h = 0;
                var j = 0;
                //---al apretar el cortar, el coppic-product.js llama a esta funcion, que esconde el content actual y muestra el siguiente
                function cropped(){
                h = h + 1;
                j = h + 1;
                k = k - 1;
                console.log(h);
                if (h > 0){
                    $('#cont'+[h]).addClass('hidden');
                    $('#cont'+[j]).addClass('active');
                    var srch = $('#cont'+[h]+' .croppedImg').attr('src');
                    $('#result').append('<img class="thumbRes" src="'+ srch +'">')
                    $('#restantes').text(k);
                }
             };
             //---el btnNext llama al content del primer croppic
        $('.btnNext').click(function(){
        $('#cropPro').prepend('<h2 style="margin: 0;">Imagenes restantes: <div id="restantes">'+[k]+'</div></h2>');
        $('#cont1').removeClass('hidden');
        $('#id0').addClass('hidden');
        $('#cont1').addClass('active');
        $('.btnNext').addClass('hidden');
        $('.success').addClass('hidden');
        

      });
        
    </script>



