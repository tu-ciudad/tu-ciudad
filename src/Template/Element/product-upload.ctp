<style>
.heig {
  min-height: 513px;
}
</style>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Popup image</button>

<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog px">
    <div class="modal-content">
      <div class="modal-body grdient heig">
<span class="close" data-dismiss="modal" aria-label="Close">×</span>
  <div class="row" id="divUp"> <!-- comienza el "form" de cargar imagen con textos -->
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-4">   
        <label for="name">Nombre</label>
          <input name="name" type="text" id="name" placeholder="nombre" class="form-control" required>
        </div>
        <div class="col-md-4">
        <label for="fecha">Fecha de carga</label>
            <div class='input-group date'>
                    <input type='text' name="fecha" class="form-control" id="fecha" value="<?php echo date('Y-m-d H:i:s');?>" disabled />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div> 
            <label for="precio">Precio</label>
            <div class=" col-md-4 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="precio" id="precio" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>
       
               
      </div>
          
        
      <hr>
      <textarea name="comentarios" rows="8" cols="80" placeholder="Descripcion" id="vDesc" class="form-control"></textarea>
      <hr>
      <div class="progress" style="display: block;"> <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; ">0%</div> </div>
      <div class="">


        <div id="views" align="center"> 
         <form enctype="multipart/form-data" action="/productos/add" method="post">
    <div class="col-md-3 mleft">
            <label for="foto1" class="btn btn-default"><i class="fa fa-upload" aria-hidden="true"></i> Foto 1</label><br>
            <input type="file" accept="image/*" id="foto1" name="file[]" onchange="previewFile(this)" style="display: none;" >
            <img  class="thumbimg" src="../../img/placeholder.png" />
          </div>
               <button id="remover" class="btn btn-danger btnminus" data-toggle="tooltip" data-placement="right" title="Eliminar ultima foto">
               <span class="glyphicon glyphicon-minus"></span></button> 
               <button id="exe" class="btn btn-success btnmore" data-toggle="tooltip" title="Agregar foto">
               <span class="glyphicon glyphicon-plus"></span></button>&nbsp;
                 
        <button type="submit" style="right: -260px; position:absolute; bottom: 10px; " id="send" class="btn btn-primary">
            <span class="glyphicon glyphicon-ok"></span>&nbsp; Guardar producto</button>
</form>
        </div>




        
       
      </div>
  </div>  <!-- /termina form -->

       <!-- comienza vista previa -->
          <div class="col-md-4">
          <center>
          <h3 align="center">Vista Previa</h3>
            <div class="producto">
              <div class="card thumbnail" style="margin: 5px;">
                <div class="grid-top">
                  <a href="#!" class="b-link-stripe b-animate-go">
                    <img class=" card img-fluid img-responsive" src="../../img/productos/pi4.jpg" alt="" id="preview1">
                    <div class="b-wrapper">
                      <h3 class="b-animate b-from-left b-delay03 ">
                        <span id="Text1">Nombre</span> 
                        <br>
                        <br>
                        <br>
                        <span id="Text3" style="font-size: 16px;">Descripcion</span>                 
                      </h3>
                    </div>
                  </a>
                  <p><a id="Text2">nombre</a></p>
                </div>
              </div>
            </div>
            </center>
            </div> <!-- termina vista Previa -->
            <br>
             <h3 id="resultado"></h3>
            

          


      </div>
<div id="cropPro"></div>



<button class="btn btn-primary btnNext hidden" id="bnext">Next</button>




        <div id="result"></div>
    </div>
   </div>
  </div>

  </div>
</div>

<script>
var i = 1;
$(document).ready(function(){
    $('#exe').click(function(e){

  var inpUp = '<input type="file" accept="image/*" id="foto'+(i += 1)+'" name="file[]" onchange="previewFile(this)" style="display: none;">';
  var labUp = '<label for="foto'+ i +'" class="btn btn-default"><i class="fa fa-upload" aria-hidden="true"></i> Foto '+ i +'</label>';
  var agregar = '<div class="col-md-3 mleft">'+ labUp +'<br>'+ inpUp +'<img  class="thumbimg" src="../../img/placeholder.png" />'+ '</div>';
      //$('#views').append(agregar); //agrega el input con el preview adentro de views
    
        e.preventDefault();
        $(this).before(agregar);
    });
});
$('#remover').click(function(e){ //funcion del boton - para borrar input
  e.preventDefault();
    if (i > 1){
       i -=1 ; //resta 1 a i, para continuar con el orden los ID de los input
      $('form .col-md-3:last').remove(); //remueve el ultimo input
   }
    });

$('body').on('click', '#send', function(e){
        e.preventDefault();
        var formData = new FormData($(this).parents('form')[0]);
        //console.log(formData);
        var name = $('input:text[name=name]').val(); //valor del input text name
        var desc = $('#vDesc').val(); //valor del input text id="vDesc"
        var fdate = $('#fecha').val(); //valor de fecha en el input type="date" id="fecha"
        var precio = $('#precio').val(); //valor del campo de text id="precio"
        var nid = "1"; //id de negocio 
         formData.append("titulo", name); //agrega campo de texto dentro del formData
         formData.append("cuerpo", desc); //""
         formData.append("precio", precio);
         formData.append("negociosid", nid);
         formData.append("fecha", fdate); //""


        $.ajax({
            url: 'productos/add',
            type: 'POST',
            data: formData, //data que envia
            async: true, //para la barra de progreso
            xhr: function() { //no tocas de aca a la linea 220, es la barra de progreso
                var xhr = $.ajaxSettings.xhr();
                  //Upload Progress
                  xhr.upload.addEventListener("progress", function (evt) {
                     if (evt.lengthComputable) {
                    var percentComplete = (evt.loaded / evt.total) * 100; 
                    $('div.progress').css({ "visibility": "visible" });
                    $('div.progress > div.progress-bar').css({ "width": percentComplete + "%" });
                    $("div.progress > div.progress-bar").text( percentComplete + "%" ); } }, false);
 
                  //Download progress
                   xhr.addEventListener("progress", function (evt)
                   {
                   if (evt.lengthComputable)
                    { var percentComplete = (evt.loaded / evt.total) *100;
                   $("div.progress > div.progress-bar").css({ "width": percentComplete + "%" });
                   $("div.progress > div.progress-bar").text( percentComplete + "%" ); } },
                  false);
                return xhr;
            }, //barra de progreso fin
            success: function (data) {
                
                $('.heig').removeClass('grdient');
                $('#divUp').addClass('hidden');
                
                $('#cropPro').append(
                  '<ul class="nav nav-tabs hidden" id="appe">'+
                  '<li class="active hidden"><a data-toggle="tab"  href="#cont0">Cortar</a>'+
                  '</li></ul>');
                $('#cropPro').append('<div class="tab-content" id="content">'+
                  '<div id="cont0" class="tab-pane fade in "></div></div>');
                var v = 0;
                var tmp = data.split(",");
                for (var i = 1; i < tmp.length; i++) {
                  
                  var dim = tmp[i].split("&");
                  if (dim[1] === dim[2]){
                    //console.log(dim[0]+'correcto');
                  } else {
                    v = v + 1;
                    console.log(v);
                    //console.log(dim[0]+'falso');
                    console.log('agrega crop de '+[v]);
                    $('#appe').append('<li><a data-toggle="tab" class="hidden" id="id'+ [v] +'" href="#cont'+ [v] +'">'+ [v] +'</a></li>');
                $('#content').append('<div id="cont'+ [v] +'" class="tab-pane fade in">'+'</div>');
                $('#cont'+[v]).append('<div id="yourId'+ [v] +'" class="cropp"></div>'+'<br>'+'<a class="btn btn-primary btnNext" >Next</a>');
              
                 var croppicOpt = {
                      cropUrl:'imagenes-negocios/img_crop_producto.php',  //realiza el proceso de corte
                      outputUrlId:'output'+[v], //link de donde se guardó
                      loadPicture: dim[0],
                  } 
                  var  yourId = 'yourId'+[v];
                  var croppic = new Croppic( 'yourId'+[v] , croppicOpt);
                  k = k + 1;
                  }

                  //console.log(dim);
                 
                  console.log(i+":"+tmp[i]);
                

                

                          
        }
        if (k !== 0){
        $('#cropPro').append('<h1 class="success">Debe recortar '+ [k] +' imagenes</h1>');
        $('#bnext').removeClass('hidden');
        window.parent.k=k; 
      } else {
         $('#cropPro').append('<h1 class="success">neinnnn</h1>');
      }
         },   
            cache: false,
            contentType: false,
            processData: false,

        });
        return false;
});




//funcion para leer los input y mostrar imagen
function previewFile(input) { 
  var preview = input.nextElementSibling;
  var file = input.files[0];
  var reader = new FileReader();
  reader.onloadend = function() {
    preview.src = reader.result; //agrega la imagen al preview del input
    $('#preview1').attr('src', preview.src);  //cambia la imagen de vista previa
  }
  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}


//agrega los cambios a la vista previa cuanod detecta cambios en modal:
$('#divUp').change(function(){ 
var name = $('input:text[name=name]').val(); //toma el valor del input name
var desc = $('#vDesc').val(); //toma el valor del textarea de descripcion
var fdate = $('#fecha').val();
$('#Text2').text(name); //nombre vPrevia abajo
$('#Text1').text(name); //nombre vPrevia hover
$('#Text3').text(desc); //descripcion vPrevia hover
});

</script>
<script>//pophover tooltip de botones
$(document).on("load", function(){ 
    $('[data-toggle="tooltip"]').tooltip(); 
});


  $('.close').modal('hide');

</script>


