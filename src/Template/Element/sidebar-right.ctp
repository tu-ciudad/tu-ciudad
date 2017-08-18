<style>
    .recom-container {
       max-width: 100%;
     }
.recom-container .comercio-card {
        margin-bottom: 10px; 
        width: 100%; 

     }
    
    .recom-container .card {
         margin-right: 0;
        margin-left:0;       
    }
    .recom-container .card-img-top {
        height: 150px;
        opacity: 0.6;
        transition: all 0.1s ease-in;
    }
    .recom-container .card-block {
        padding-top: 0;
        max-height: 100px;
    }
    
    .recom-container  .mainpage .jumbotron {
    background-color: #F8F8F8;
    width: 100%;
    height: 50px;
    text-align: center;
    /padding: 1px;
    box-shadow:  1px 1px #ccc;
    margin-bottom: 10px;
}

   .recom-container .mainpage h2 {
    margin-top: 10px;
    font-family: 'Open Sans', sans-serif;
    font-size: 20px;
    /padding-bottom: 10px;
}
    .comercol .col-md-3 {
        /width: 23%;
    }

    #com1:hover .card-img-top {
        opacity: 1;
    }
    #com2:hover .card-img-top {
        opacity: 1;
    }
    #com3:hover .card-img-top {
        opacity: 1;
    }
</style>
<div class="comercol col-lg-3 visible-lg">
<div class="recom-container   img-responsive  ">

 <div class="mainpage">
    <div class="jumbotron" style="box-shadow: inherit;">
    <h2>
    <span class=""> Comercios recomendados &nbsp;&nbsp;</span><img src="../../img/store.png" width="32" alt=""></h2>
        
    </div>
</div>
    <?php
    foreach ($recomendados as $recomendado) {
    ?>
    <div class="comercio-card " id="com1">
            <a href="/negocios/perfil/<?= $recomendado->id ?>">
                <div class="card" style="">
                    <img class="card-img-top" src= <?=$recomendado->imagenes_negocios[0]->foto ?> alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title"><?= $recomendado->nombre ?></h4>
                        <p class="card-text"><?= $recomendado->descripcion ?></p>
                    </div>
                </div>
            </a>
    </div>
    <?php }
    ?>
             </div>
</div>




</div>
