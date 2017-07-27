
<?php
/**
  * @var \App\View\AppView $this
  */
?>

<style>

.btn-ver {
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #3498db;
  padding: 3px 15px 3px 10px;
  border-top: solid rgb(217, 217, 217) 1px;
  border-right: solid rgb(217, 217, 217) 1px;
  border-bottom: solid rgb(217, 217, 217) 1px;
  text-decoration: none;
  width: 30%;
  margin-top: -1em;
  position: absolute;
}

.btn-ver:hover {
  background: #3cb0fd;
  text-decoration: none;
}
</style>

<div class="container" style="margin-top: 30px;">
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-min"> <!-- producto -->
               <div class="producto1" >
                  <div class="item" data-toggle="modal" data-target="#modalProduct" >
                   

                    <img class=""  src="../../files/imagenesproductos/7315acfe5f85612ac3b95c54deee11a8.jpg" alt="">
                    
                    <div class="content">
                        <h3>
                            <span>Nombre prod</span> <!-- $producto->titulo -->
                        </h3>
                        
                        <h5>
                        <a href="#" >
                            <span>negocio name</span>
                        </a>
                        </h5>
                    </div>

                    <div class="content-bot"> 
                       <a href="#" class="visible-xs visible-sm"><div class="btn-ver">Ver</div></a>
                       <h3>  
                            <span>$230</span><sup>00</sup>
                       </h3>
                       <h4 class="hidden-md hidden-lg"><span>Nombre producto</span></h4>
                    </div>

            
        </div></div>
    </div> <!-- /producto -->


</div>

<div style="height: 800px"></div>

<?= $this->element('footer') ?>



