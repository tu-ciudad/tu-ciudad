<?php
            $i = 0;
            foreach ($negocios as $negocio) {
            ?>
            <div class="comercio-card  " >
            <a href=<?= '/negocios/perfil/'.$negocio->id?>>
                <div class="card" style="">
                    <div class="preview" style="
                      background-image: url(../../img/comerimg.jpg);
                      background-size: cover;
                      background-repeat: no-repeat; 
                      height: 100%; width: 100% !important;" >
                    <img class="card-img-top" style="opacity: 0;" src=<?= $negocio->imagenes_negocios[0]->foto?> alt="Card image cap" onload="comready(this);">
                    </div>
                    <div class="card-block">
                        <h4 class="card-title"><?= $negocio->nombre?></h4>
                        <p class="card-text"><?= $negocio->descripcion?></p>
                    </div>
                </div>
            </a>
            </div>
            <?php
            $i = $i+1;
            }
            ?>