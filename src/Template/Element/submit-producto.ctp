<link rel="stylesheet" type="text/css" href="css/iEdit.css">
<script type="text/javascript" src="js/iEdit.js"></script>


<div class="panel panel-success">
        <div class="panel-heading">
          <div class="panel-title">
            <i class="glyphicon glyphicon-plus pull-right"></i>
            <h4>Agregar producto</h4>
          </div>
        </div>
        <div class="panel-body">
          
          
          
        <div class="col-md-6">   
        
          <input name="name" type="text" id="name" placeholder="nombre" class="form-control" required>
        </div>
        <div class="col-md-4 hidden">
        <label for="fecha">Fecha de carga</label>
            <div class='input-group date'>
                    <input type='text' name="fecha" class="form-control" id="fecha" value="<?php echo date('Y-m-d H:i:s');?>" disabled />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div> 
            
            <div class=" col-md-4 input-group">
              <span class="input-group-addon">$</span>
              <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio" aria-label="Amount (to the nearest dollar)">
            </div>
       
              <hr>
      <textarea name="comentarios" rows="4" cols="20" placeholder="Descripcion" id="vDesc" class="form-control"></textarea>
      <?= $this->element('tags') ?>
      <hr>
      <div class="progress" style="display: block;"> <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; ">0%</div> </div>
      <div class="">


        <div id="views" align="center"> 
         <form enctype="multipart/form-data" action="/productos/add" method="post">
   
    <style>

      .mleft .col-md-3{
          padding-left: 0; 
          padding-right: 0;
          max-height: 90px;
      }
      .label-input  {
        width: 80px;
        height: 80px;
        background-color: #eee;
        border-radius: 5px;
        margin: 5px;
        border: 1px solid;
      }
      .label-input img {
        width: 80px;
        height: 80px;
        background-color: transparent;
        border-radius: 5px;
      } 
      

      .label-input:hover {
        box-shadow: 1px 1px #ccc;
      }
      .label-input:hover:after {
          content: "\f093"; 
          position: absolute;
          font-family: FontAwesome;
          font-size: 24px;
          top: 30px;
          left: 37px;
          color: white;
          text-shadow: 0px 0px 6px black;
      }
     /* .labelthumb:after {
          content: "\f093"; 
          font-family: FontAwesome;
          font-size: 24px;
          left:60px;
          position:absolute;
          /top: 25px;
         
       }
      .labelthumb {
        border-radius: 5px;
        /position: absolute;
        width: 80px;
        height: 80px;
        top: 0;
        left: 15px;

      }
      .labelthumb-plus {
        width: 80px;
        height: 80px;
        background-color: #fafafa;
      }
      .labelthumb-plus:after {
          position:absolute;
          content: "\f067"; 
          font-family: FontAwesome;
          font-size: 24px;
          left:0;
          top: 0;
      }
      .fleft {
        float: left;
      }*/

    </style>
     <div class="row mleft" id="subimp" style="border: 1px solid;">
          <div class="col-md-3 " >
            <label for="foto1" class="label-input">
            <img src="" id="resultfoto1" class="labelthumb" alt="" onchange="agregar();"></label>
            <input type="file" accept="image/*" id="foto1" name="file[]" style="display: none;" onchange="base64(this);" >
          </div>
          
    </div>
            <!--    <button id="remover" class="btn btn-danger btnminus" data-toggle="tooltip" data-placement="right" title="Eliminar ultima foto">
               <span class="glyphicon glyphicon-minus"></span></button> 
               <button id="exe" class="btn btn-success btnmore" data-toggle="tooltip" title="Agregar foto">
               <span class="glyphicon glyphicon-plus"></span></button>&nbsp;
                 
        <div class="control-group">
              <label></label>
              <div class="controls">
                <button type="submit" id="send" class="btn btn-primary">
                  Post
                </button>
              </div>
            </div> -->   
</form>
        </div>




        
       
      </div> 
      
           
            
         
          
          
        </div><!--/panel content-->
      </div><!--/panel-->

<li id="cant" class="hidden">1</li>


      <script>

var i = 1;
$(document).ready(function(){
    $('.labelthumb').change(function(){

  var inpUp = '<input type="file" accept="image/*" id="foto'+(i += 1)+'" name="file[]" onchange="base64(this);" style="display: none;">';
  var labUp = '<label for="foto'+ i +'" class="label-input"><img  class="labelthumb" id="resultfoto'+ i +'" src="" /></label>';
  var agregar = '<div class="col-md-3">'+ labUp + inpUp + '</div>';
      //$('#views').append(agregar); //agrega el input con el preview adentro de views
  
        e.preventDefault();
        $('#subimp').append(agregar);
        $('#cant').text(i); //cantidad de imagenes
        console.log($('#cant').text());
    });
});
$('#remover').click(function(e){ //funcion del boton - para borrar input
  e.preventDefault();
    if (i > 1){
       i -=1 ; //resta 1 a i, para continuar con el orden los ID de los input
      $('form .col-md-3:last').remove(); //remueve el ultimo input
      $('#cant').text(i);
   }
    });
//funcion de recorte
function base64(input){
var img = input.files[0];
var id = input.id;
console.log(id);
    if(!iEdit.open(img, true, function(res){
      $("#result"+id).attr("src", res);      
    })){
      alert("Whoops! That is not an image!");
    }
}

  
    




$('body').on('click', '#send', function(e){
        e.preventDefault();
        /*comienzo funcion tags*/
         var tags = new Array();
      
       
                 val = $('#tag').val();
                //console.log(val);
                //compara  por cada tag agregado que exista en el array original
                var data_array = val.split(", ");
                for (i = 0; i < data_array.length; i++){
                    for (x = 0; x < data.length; x++){
                        if(data_array[i] == data[x].nombre){
                            //console.log(data[x].id +': '+ data_array[i] )
                            tags.push(data[x].id);
                        }
                    }
                    
                }
                console.log(tags); /*fin tags*/
         



        var formData = new FormData();
        
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
         formData.append("tags", tags);
         formData.append("fecha", fdate); //""
         var cant = $('#cant').text();
         console.log(cant);
         var z = 0;
        for (var x = 0; x < cant; x++){
          z = z + 1;
          var srci = $('#resultfoto'+z).attr('src');
          formData.append('foto'+z, srci);
          console.log('foto'+z);
        }
        formData.append("cantidad", cant);
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
              console.log(data);
              
       
         },   
            cache: false,
            contentType: false,
            processData: false,

        });
        return false;
});


</script>
<script>//pophover tooltip de botones
$(document).on("load", function(){ 
    $('[data-toggle="tooltip"]').tooltip(); 
});


  $('.close').modal('hide');

</script>


