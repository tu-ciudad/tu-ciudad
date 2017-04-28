<style>
  .thumb {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }
</style>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Popup image</button>

<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">



  <form action="" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="form-group" id="" > 
			<div style="display: none;">
                 <input type="hidden" name="_method" value="POST">
             </div>



  <label for="name">Nombre</label>    
 	<input name="name" type="text" placeholder="nombre">

 <label for="fecha">Fecha</label>
 <input name="fecha" type="text" placeholder="fecha">
 <hr>

 <label for="desc" >Descripcion</label>
 <br>
 <input name="desc" type="text" placeholder="descripcion">
 <hr>
<input type="file" id="files" name="files[]" multiple />
<output id="list"></output>
<br>
<button type="submit" style="float: right;">Enviar</button>


</form> 







        </div>
    </div>
  </div>
</div>



<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>