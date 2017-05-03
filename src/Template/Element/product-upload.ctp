<style>

  .thumbimg { 
    height: 75px;
    min-width: 80px;
    background-color: rgb(233, 235, 238);
    border: 3px solid rgb(233, 235, 238);
    border-radius: 3px;
    margin: 10px 5px 10px 0;
  }
  .input{ 
    display: none;
    
}
  .labUp { 
      
      -webkit-appearance: button;
      -moz-appearance: button;
      appearance: button;
      line-height: 16px;
      padding: .2em .4em;
      margin: .2em;
}
  .px{
  width: 950px;
}

</style>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Popup image</button>

<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog px">
    <div class="modal-content">
      <div class="modal-body">

  <div class="row" id="divUp"> <!-- comienza el "form" de cargar imagen con textos -->
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-4">   
        <label for="name">Nombre</label>
          <input name="name" type="text" id="name" placeholder="nombre" class="form-control">
        </div>
        <div class="col-md-4">
        <label for="fecha">Fecha de carga</label>
            <div class='input-group date'>
                    <input type='text' name="fecha" class="form-control" id="fecha" value="<?php echo date("d-m-Y");?>" disabled />
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
           <input type="text" value="1" id="negocios-id" class="hidden">
        
      <hr>
      <textarea name="comentarios" rows="8" cols="80" placeholder="Descripcion" id="vDesc" class="form-control"></textarea>
      <hr>
      <div class="">
        <div id="views" align="center"> 
          <div class="col-md-3">
            <label for="foto0" class="btn btn-default"><i class="fa fa-upload" aria-hidden="true"></i> Foto 0</label><br>
            <input type="file" accept="image/*" id="foto0" onchange="previewFile(this)" style="display: none;">
            <img  class="thumbimg" />
          </div>
        </div>
        <div class="col-md-3">
          <div align="center">
               <button id="exe" class="btn btn-success" data-toggle="tooltip" title="Agregar foto">
               <span class="glyphicon glyphicon-plus"></span></button>&nbsp;
               <button id="remover" class="btn btn-danger" data-toggle="tooltip" title="Eliminar ultima foto">
               <span class="glyphicon glyphicon-minus"></span></button>   
          </div>
        </div>
        <hr>
      </div>
  </div>  <!-- /termina form -->

       <!-- comienza vista previa -->
          <div class="col-md-4">
          <center>
          <h3 align="center">Vista Previa</h3>
            <div class="producto">
              <div class="card">
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
            <button type="submit" style="right: 70px; position:absolute; bottom: 10px; " id="send" class="btn btn-primary">
            <span class="glyphicon glyphicon-ok"></span>&nbsp; Guardar producto</button>

          


      </div>
    </div>
   </div>
  </div>

  </div>
</div>

<script>
 var i = 0; //define el valor inicial del ID del input file
 
$('#exe').click(function(){ //funcion del boton +

  var inpUp = '<input type="file" accept="image/*" id="foto'+(i += 1)+'" onchange="previewFile(this)" style="display: none;">';
  var labUp = '<label for="foto'+ i +'" class="btn btn-default"><i class="fa fa-upload" aria-hidden="true"></i> Foto '+ i +'</label>';
  var agregar = '<div class="col-md-3">'+ labUp +'<br>'+ inpUp +'<img  class="thumbimg" />'+ '</div>';
      $('#views').append(agregar); //agrega el input con el preview adentro de views
    
    });
$('#remover').click(function(){ //funcion del boton - para borrar input
    i -= 1; //resta 1 a i, para continuar con el orden los ID de los input
      $('#views .col-md-3:last').remove(); //remueve el ultimo input
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
console.log(fdate);
});

$('#send').click(function(){ //envio de datos por ajax
var name = $('input:text[name=name]').val();
var desc = $('#vDesc').val();
var fdate = $('#fecha').val();
var precio = $('#precio').val();

  var parametros = {
        "nombre": name,
        "fecha": fdate,
        "precio": precio,
        "descripcion": desc,
        "negocios-id": negocios-id,
        //"fotos":
      }

    $.ajax({
        data:   parametros,
        url:  "test.php",
        type:   "post",

        beforeSend:function(){
          console.log('se esta procesando tu peticion');
        }
      })
      .done(function(data){
      
          console.log(data);
       
      });

      // $.getJSON('test.php',{
      //   nombre: name,
      //   fecha: fdate,
      //   precio: precio,
      //   descripcion: desc,
      //   metodo: "Get"
      // },function(data){
      //   $.each(data,function(i,value){
      //     console.log(i+" "+value);
      //   });
      // });



});

$(document).ready(function(){ //pophover tooltip de botones
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>


