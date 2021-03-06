<style>
  /* ==========================================================================
    /****************************jumbo nuevo only css*********************
   ========================================================================== */
.profile {
  margin-top: 20px;

}
.profile img.image-lg{ /*portada*/
    /z-index: 0;
    /width: 100%;  
    /margin-bottom: 10px;
    /height: 400px;
    
    /overflow: hidden;
    
}

.image-profile
{   /*imagen perfil original*/
    margin: -125px 10px 0px 50px;
    z-index: 9;
    width: 100%; 
    opacity: 1;
}
.profile-text {
    float: left;
    margin-top: -25px;
    margin-left: 5%;
}

.profile .user {
  position: absolute;
  padding: 15px 5px 5px;
  width: calc(100% - 30px);
  bottom: 10px;

/*******************gradient***********************/
background: -moz-linear-gradient(top, rgba(250,250,250,0) 0%, rgba(250,250,250,0.5) 10%, rgba(250,250,250,1) 80%, rgba(250,250,250,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(250,250,250,0) 0%,rgba(250,250,250,0.5) 10%,rgba(250,250,250,1) 80%,rgba(250,250,250,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(250,250,250,0) 0%,rgba(250,250,250,0.5) 20%,rgba(250,250,250,.8) 80%,rgba(250,250,250,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00fafafa', endColorstr='#fafafa',GradientType=0 ); /* IE6-9 */
}
@media (max-width: 500px) {
  
    #sidefix {
      padding-left: 0;
      padding-right: 0;
    }
    .profile .user {
        width: 100%;
      }
  }
.profile .actions {
  float: right;
}

.profile .actions .btn {
  margin-bottom: 0px;
}
/*------------boton "combiar" imagen--------*/
div.show-image {
    position: relative;
    float:left;
    width: 20%;

}

div.show-image button.btn-default {
    position:absolute;
    display:none;
   -webkit-transition: all 0.25s ease-in;
   -moz-transition: all 0.25s ease-in;
   -ms-transition: all 0.25s ease-in;
   -o-transition: all 0.25s ease-in;
   transition: all 0.25s ease-in;
}
div.show-image:hover button.btn-default {
    position:absolute;
    display: block;
    opacity: 1;
    border-radius: 0px;    
}

div.show-image button.update {
    width: 100%;
    margin: -125px 10px 0px 50px; /*el mismo margin que la imagen*/
    /top: calc(0% + 6px);
    /left: calc(100% - 67px);
}
/********************************
************@media querys********/
@media (max-width:1200px)
{

.image-profile
{
    margin: -110px 10px 0px 25px;
    z-index: 9;
    /width: 20%; 
}
div.show-image button.update {
     width: 100%;
     margin: -110px 10px 0px 25px; /*el mismo margin que la imagen*/
    /top: calc(0% + 6px);
    /left: calc(100% - 67px);
}
}

@media (max-width:992px)
{

.image-profile
{
    margin: -80px 10px 0px 25px;
    z-index: 9;
    /width: 20%; 
}
div.show-image button.update {
     width: 100%;
     margin: -80px 10px 0px 25px; /*el mismo margin que la imagen*/
    /top: calc(0% + 6px);
    /left: calc(100% - 67px);
}
}

@media (max-width:768px)
{


.image-profile
{
    margin: -8px 10px 0px 10px;
    z-index: 9;
    width: 150%; 
}
div.show-image button.update {
     width: 150%;
     margin: -8px 10px 0px 10px; /*el mismo margin que la imagen*/
    /top: calc(0% + 6px);
    /left: calc(100% - 67px);
}
}

@media (max-width: 768px) {
  .btn-responsive {
    /padding:2px 4px;
    /font-size:80%;
    /line-height: 1;
    /border-radius:3px;
  }
}

@media  (max-width: 992px) {
  .btn-responsive {
    padding:4px 9px;
    font-size:90%;
    line-height: 1.2;
  }
}

/************************************
*************fin media querys********/
/**************alert success animation (de recargar pagina)*************/

/* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #dff0d8; /* Black background color */
    color: rgb(60, 118, 75); /* White text color */
    border-color: rgba(60, 118, 61, .5);
    border: 1px solid ;
    text-align: center; /* Centered text */
    border-radius: 4px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 83%; /* Center the snackbar */
    top: 100px; /* 30px from the bottom */

}
#snackbar a {
    color: inherit;
}
/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 1s, fadeout 1s 7s;
    animation: fadein 1s, fadeout 1s 7s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 100px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 100px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 100px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 100px; opacity: 1;}
    to {top: 0; opacity: 0;}
}

.fa-green {
  color: rgb(95, 184, 138);
  font-weight: bold;
}
.m-orange {
  color: rgb(211, 85, 21);
}
.m-blue {
  color: rgb(0, 148, 255);
}
/*************************fin jumbo nuevo*******************/
.jumb02 {
  position: relative;  
  padding-left: 15px; 
  padding-right: 15px;  
  margin-bottom: 0; 
  padding-bottom: 0;
}
</style>
 <!-- jumbotron nuevo fb style -->

<div class="container-fluid jumb02" id="sidefix" style="">
    <div class="profile clearfix  " style="padding-left: 0; padding-right: 0;"> <!-- imagenes -->
        <img align="left" class="image-lg" src=<?= $fportada ?> alt="Profile image example"/>
       
        <div class="user"> 
        <div class="profile-text clearfix" >
            <h1><?= $negocio->nombre ?></h1> <!-- texto local + info -->
            
             
            <p><span class="glyphicon glyphicon-globe"></span> <?= $negocio->direccion ?> , <?= $ubicacion[0]->nombre ?></p>                                    
            <p><span class="glyphicon glyphicon-gift"></span> <?= $tagsnegocio ?></p>                                
         
        </div> <!-- /texto-local+info -->
        
        <div class="profile-text " style="float: center; margin: 0 auto; margin-left: 5%; max-width: 420px; text-align: center; ">
          <h4>
             <?= $negocio->descripcion ?>
          </h4>
           
        
        </div>
       
        <div class="actions clearfix" style="margin-right: 5%;">
             <div class="btn-group"><!-- botones derecha -->
                <div class="btn-group" role="group">
                  <button class="btn btn-default btn-md dropdown-toggle tip btn-responsive" title="" id="dropcell" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class=" glyphicon glyphicon-earphone glyphicon glyphicon-white"></span> llamar <span class="caret"></span></button>
                  <ul class="dropdown-menu" aria-labelledby="dropcell">
                        <li><a href="#"><i class="fa fa-whatsapp fa-green" aria-hidden="true"></i> +54 2923 485002</a></li>
                        
                        
                  </ul>
                </div>
                  <div class="btn-group" role="group">
                      <button type="button" class="btn btn-default btn-md dropdown-toggle tip btn-responsive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-envelope"></span> Mensaje
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-envelope m-orange"></span> Comercio@gmail.com</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope m-blue"></span> +54 2923 485002</a></li>
                      </ul>
                  </div>
                 <button class="btn btn-default btn-md tip btn-responsive" title="" data-original-title="Recommend" id="shareBtn"><span class="glyphicon glyphicon-share-alt glyphicon glyphicon-white"></span> Recomendar</button>
            </div> <!-- /botones derecha -->
        </div>



        </div>
     
    </div>
</div>
 <!-- /container -->  




<div id="snackbar"> <!-- cartel de success, recargar pagina -->
<button type="button" class="close" data-dismiss="#snackbar" aria-label="Close" onclick="window.closeSnackbar();" >
    <span aria-hidden="true"> &times;</span>
  </button> 
    <strong>
      <span class="glyphicon glyphicon-refresh glyphicon glyphicon-white"></span>
      <a href="#" class="alert-link" onClick="window.location.reload()">&nbsp;Recarga</a>
    </strong> la pagina para ver los cambios!&nbsp;&nbsp; </div> <!-- fin de cartel -->


<script>//abre cualquier modal de tipo: target=mymodalid con su respectivo id=mymodalid 
//   function centerModal() {
//     $(this).css('display', 'block');
//     var $dialog = $(this).find(".modal-dialog");
//     var offset = ($(window).height() - $dialog.height()) / 2;
//     // Center modal vertically in window
//     $dialog.css("margin-top", offset);
// }

// $('.modal').on('show.bs.modal', centerModal);
// $(window).on("resize", function () {
//     $('.modal:visible').each(centerModal);
// });
</script>
<script> //carga el iframe al abrir el modal, y lo recarga cada ves que se abre el modal
$('.btnmodal').click(function(){ //onclick en fpefil, abre modal con iframe dentro

    $('.ifrmodal').on('shown.bs.modal',function(){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
  $(this).find('iframe').attr('src','/imagenes-negocios/add1')
});
  });

</script>
<script>
var srcc = 0; 
function changeImg(){ //recibe la variable de la imagen recortada y le cambia el src al la imagen del perfil sin recargar
$('#imgf').attr('src', srcc);
} 
</script>
<script>
window.closeModal = function(){ //onsubmit cerrar modal y mostar snackbar
    $('.modal').modal('hide');
// Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 8000);

   
};
window.closeSnackbar = function(){ //boton X de snackbar
    var y = document.getElementById("snackbar")
    y.className = "hidden";
    }


</script>