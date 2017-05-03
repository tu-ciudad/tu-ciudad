<div class="col-md-3 visible-lg " style="right:-15px; padding-left: 0;">

                <div class="nav nav-stacked  affix-top " id="sidebar-right">
                    <div class="thumb">
                        <div class="br">
                        <div class=" recomended ">
                            <img src="../../img/adidas.jpg" class="img-responsive " alt="...">
                            
                                <p class="col-md-6 textr">Comercio #1</p>
                                <button class="btn btn-primary sign "><i class="fa fa-sign-in fa-lg  " aria-hidden="true" ></i> Entrar</button>
                            </div>
                        </div>
                        </div>
                        <div id="sidebar-right1">
                        <div class="thumb"  >
                        <div class="br " >
                        <div class=" recomended ">
                            <img src="../../img/adidas.jpg" class="img-responsive " alt="...">
                            
                                <p class="col-md-6 textr">Comercio #2</p>
                                <button class="btn btn-primary sign "><i class="fa fa-sign-in fa-lg  " aria-hidden="true" ></i> Entrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="thumb">
                        <div class="br">
                        <div class=" recomended ">
                            <img src="../../img/adidas.jpg" class="img-responsive " alt="...">
                            
                                <p class="col-md-6 textr">Comercio #3</p>
                                <button class="btn btn-primary sign "><i class="fa fa-sign-in fa-lg  " aria-hidden="true" ></i> Entrar</button>
                            </div>
                        </div>
                        </div>
                        </div>
                    <!--/.well -->

                    <!--/sidebar-nav-fixed -->
                </div>
            </div>

<script>
var stickySidebar = $('#sidebar-right1').offset().top;

$(window).scroll(function() {  
    if ($(window).scrollTop() > stickySidebar - 50) {
        $('#sidebar-right1').addClass('affix');
    }
    else {
        $('#sidebar-right1').removeClass('affix');
    }  
});

</script>