<?php

 
 $nombre = $_POST['nombre'];
 $fecha = $_POST['fecha'];
 $precio = $_POST['precio'];
 $descripcion = $_POST['descripcion'];
       $sourcePath = $_FILES['file']['tmp_name'];       // Storing source path of the file in a variable
            $targetPath = "files/".$_FILES['file']['name']; // Target path where file is to be stored
            move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file



 	echo ($nombre);
 	// echo $nombre;
 	echo $fecha;
 	echo $precio;
 	echo $descripcion;


?>