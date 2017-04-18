<?php
/**
  * @var \App\View\AppView $this
  */
?>

<?= $this->Html->css('croppic.css') ?>
<?= $this->Html->script('croppic') ?>
<style>
    
		#yourId{ 
				width: 500px;  /* MANDATORY */  /*ancho del div y del recorte de la imagen*/
				height: 500px; /* MANDATORY */  /*alto del div y del recorte de la imagen*/
				position: relative;  /* MANDATORY */
				
				/margin: 50px 70px 20px;
				border: 3px  solid #FFF;
				box-sizing: content-box;
				-moz-box-sizing: content-box;
				border-radius: 2px;
				background-image: url(../img/placeholder.png);
				background-repeat: no-repeat;
				background-position: center;
				box-shadow: 8px 8px 0px rgba(0,0,0,0.1);
			}	
			
			
    </style>
<br>	
<br>	
<br>	
<br>	
<br>	
<br>	
<br>	
<br>	
<br>	
<br>	
<div id="yourId"></div>
<br>
<input type="text" id="cropOutput"> <!-- link donde se guardó -->


<script>

		
		var croppicOpt = {
				//uploadUrl:'img_save_to_file.php',
				cropUrl:'img_crop_to_file.php',  //realiza el proceso de corte
				outputUrlId:'cropOutput', //link de donde se guardó
				processInline:true,
		}	
		var croppic = new Croppic('yourId', croppicOpt);
        
        
    </script>