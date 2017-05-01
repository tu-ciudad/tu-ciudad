<style>
  .thumbimg {
    height: 75px;
    min-width: 75px;
    background-color: rgb(233, 235, 238);
    border: 3px solid rgb(233, 235, 238);
    outline: 1px solid rgb(223, 224, 228);
    margin: 10px 5px 10px 0;
  }
  .input{
    display: none;
    
}
.labUp {
      color: #ffffff;
      background-color: #A5A5A5;
      opacity: .9;
      

      -webkit-appearance: button;
  -moz-appearance: button;
  appearance: button;
  line-height: 16px;
  padding: .2em .4em;
  margin: .2em;
}
.px{
  width: 990px;
}

</style>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Popup image</button>

<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog px">
    <div class="modal-content">
        <div class="modal-body">

<div class="row" id="divUp">
<div class="col-md-9">
			<div style="display: none;">
                 <input type="hidden" name="_method" value="POST">
             </div>



  <label for="name">Nombre</label>    
 	<input name="name" type="text" id="name" placeholder="nombre" >

 <label for="fecha">Fecha</label>
 <input name="fecha" type="text" placeholder="fecha">
 <hr>

 <textarea name="comentarios" rows="8" cols="70" placeholder="Descripcion" id="vDesc"></textarea>
 <hr>
 <div class="">
  <div id="views"> 
    <div class="col-md-3">
      <label for="foto0" class="labUp">Elejir foto 0</label><br>
      <input type="file" accept="image/*" id="foto0" onchange="previewFile(this)" style="display: none;">
      <img  class="thumbimg" />
    </div>
  </div>
  <button id="exe" class="">+</button><button id="remover" class="">-</button>   <hr>
  </div>

<button type="submit" style="float: right;">Enviar</button>
<br>
<br>

</div>
<h3 align="center">Vista Previa</h2>
    <div class="col-md-3">
               <div class="producto">
                     <div class="card">
                        <div class="grid-top">
                            <a href="#!" class="b-link-stripe b-animate-go">
                                <img class=" card img-fluid img-responsive" src="../../img/productos/pi4.jpg" alt="" id="preview1">
                                <div class="b-wrapper">
                                    <h3 class="b-animate b-from-left b-delay03 ">
                                        <span id="Text1">Nombre</span> 
                                        <br>
                                        <br><br>
                                        <span id="Text3" style="font-size: 16px;">Descripcion</span>                 
                                    </h3>
                                </div>
                            </a>
                            <p><a href="single.html" id="Text2">nombre</a></p>
                        </div>

                    </div>
                </div>

    </div>
</div>
        </div>

    </div>
  </div>
</div>

<script>
 var i = 0;
 
$('#exe').click(function(){

  var inpUp = '<input type="file" accept="image/*" id="foto'+(i += 1)+'" onchange="previewFile(this)" style="display: none;">';
  var labUp = '<label for="foto'+ i +'" class="labUp">Elejir foto '+ i +'</label>';
  var agregar = '<div class="col-md-3">'+ labUp +'<br>'+ inpUp +'<img  class="thumbimg" />'+ '</div>';
      $('#views').append(agregar);
    
    });
$('#remover').click(function(){
    i -= 1;
      $('#views .col-md-3:last').remove();
    });

  var asd = $('.thumbimg').attr('src');
  console.log(asd);

function previewFile(input) {
  var preview = input.nextElementSibling;
  var file = input.files[0];
  var reader = new FileReader();
  reader.onloadend = function() {
    preview.src = reader.result; 
    $('#preview1').attr('src', preview.src); 
  }
  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}

$('#divUp').change(function(){
var name = $('input:text[name=name]').val();
var desc = $('#vDesc').val();
$('#Text2').text(name);
$('#Text1').text(name);
$('#Text3').text(desc);
});
</script>


