<div class="container-fluid col-md-2">
<div class="sidebar-left visible-lg" id="sidetest">
                <div class="clearfix  cucu">
                    <ul class="nav nav-stacked"  id="sidebar">

                        <li class="header label headd">
                            <h4 text-align="left" style="z-index:1003; white-space: initial; color: black;"><?= $negocio->nombre ?></h4>
                            <hr>

                        </li>
                        <li class="active"><a href="#sec0"><span class="glyphicon glyphicon-shopping-cart"></span> Articulos</a></li>
                    
                        <li><a href="#sec2"><span class="glyphicon glyphicon-map-marker"></span> Ubicacion</a></li>
                        <li><a href="#horarios"><span class="glyphicon glyphicon-calendar"></span> Horarios</a></li>
                        <br>
                        <br>
                            <div class="nav sort">
                            <li class="label label-gray" >Ordenar <span class="glyphicon glyphicon-sort"></span></li>
                                <li id="sort">
                                    <li class="nasted-sort active orden3"><a href="/../negocios/perfil/<?= $negocio->id?>?orden=3">Más relevantes</a></li>
                                    <li class="nasted-sort orden2"><a href="/../negocios/perfil/<?= $negocio->id?>?orden=2">Menor precio</a></li>
                                    <li class="nasted-sort orden1"><a href="/../negocios/perfil/<?= $negocio->id?>?orden=1">Mayor precio</a></li>
                                </li>
                            </div>
                            
                            <br>
                            <br>
                            
                    </ul>

                </div>

</div>
</div>

<script>
    var URLactual = window.location+ '';
    var orden = URLactual.split("?orden=");
    if (orden[1] == '1') {
        $('.orden3').removeClass('active');
        $('.orden1').addClass('active');
    } else {
        if (orden[1] == '2') {
           $('.orden3').removeClass('active');
            $('.orden2').addClass('active');
    }
}
</script>