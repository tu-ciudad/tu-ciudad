<style>
	
	.breadcrumb .active a:link {text-decoration:none; } /* Link no visitado*/
	.breadcrumb .active a:visited {text-decoration:none; } /*Link visitado*/
	.breadcrumb .active a:active {text-decoration:none;  } /*Link activo*/
	.breadcrumb .active a:hover {text-decoration:nounderline; } /*Mause sobre el link*/  
	.breadcrumb .active a {
		color: #555;
	}
	.breadcrumb .active a:hover {
		color: #555;
		cursor: default;
		
	}
	.breadcrumb {
		box-shadow: 1px 1px #ccc;
	}
</style>
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  
 
</ol>


<script>
	/*script que separe el link en / y la ultima opcion sea el tag o busqueda*/
	var pathname = window.location.pathname; // Returns path only
	var url      = window.location.href;     // Returns full URL
	console.log(url);

	var vtmp = pathname.split("/"); //----separa la data a partir de , yguarda en tmp
                //----asigna a tmp[i] la data separada
                for (var i = 1; i < vtmp.length; i++) {
                	console.log(vtmp.length);
                	

                	$('.breadcrumb').append('<li><a href="#">'+vtmp[i]+'</a></li>');
                	
                	
                }
   
    	$('.breadcrumb li:last').addClass('active');

</script>