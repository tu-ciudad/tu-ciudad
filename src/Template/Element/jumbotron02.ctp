 <!-- jumbotron nuevo fb style -->

<div class="container" id="sidefix">
    <div class="profile clearfix"> <!-- imagenes -->
        <img align="left" class="image-lg" src="../../img/portada_850x280.jpg" alt="Profile image example"/>
        <div class="show-image">
        <img align="left" class="image-profile thumbnail" src=<?= $fperfil ?> id="imgf">
          <button class="update btn btn-default btnmodal" data-toggle="modal" data-target="#myModal">
          <span class="glyphicon glyphicon-camera glyphicon glyphicon-white"></span> Cambiar</button>
            <div id="myModal" class="modal ifrmodal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-lg1">
                   <div class="modal-content">
                                         
                     <iframe src="" frameborder="0" class="iframe-modal" scrolling="no"></iframe>
                     </div>
                 </div>
               </div>
          </div>
        <div class="user"> 
        <div class="profile-text clearfix">
            <h1>Local Perfil</h1> <!-- texto local + info -->
            
             
            <p><span class="glyphicon glyphicon-globe"></span> St. Revutskogo, Kiev, Ukraine</p>                                    
            <p><span class="glyphicon glyphicon-gift"></span> Regaleria, bazar, escolar</p>                                
         
        </div> <!-- /texto-local+info -->
        <div class="actions clearfix">
             <div class="btn-group"><!-- botones derecha -->
                  <button class="btn btn-default btn-md tip btn-responsive" title="" data-original-title="Add to friends"><span class=" glyphicon glyphicon-earphone glyphicon glyphicon-white"></span> llamar</button>
                  <button class="btn btn-default btn-md tip btn-responsive" title="" data-original-title="Send message"><span class="glyphicon glyphicon-envelope glyphicon glyphicon-white"></span> Mensaje</button>
                 <button class="btn btn-default btn-md tip btn-responsive" title="" data-original-title="Recommend"><span class="glyphicon glyphicon-share-alt glyphicon glyphicon-white"></span> Recomendar</button>
            </div> <!-- /botones derecha -->
        </div>
        </div>
     
    </div>
</div>
 <!-- /container -->  

<br>


<div id="snackbar"> <!-- cartel de success, recargar pagina -->
<button type="button" class="close" data-dismiss="#snackbar" aria-label="Close" onclick="window.closeSnackbar();" >
    <span aria-hidden="true"> &times;</span>
  </button> 
    <strong>
      <span class="glyphicon glyphicon-refresh glyphicon glyphicon-white"></span>
      <a href="#" class="alert-link" onClick="window.location.reload()">&nbsp;Recarga</a>
    </strong> la pagina para ver los cambios!&nbsp;&nbsp; </div> <!-- fin de cartel -->


<script>//abre cualquier modal de tipo: target=mymodalid con su respectivo id=mymodalid 
  function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
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