
<?php
/**
  * @var \App\View\AppView $this
  */
$contacto = null;
?>


 <div class="contact-page">
 	<div class="contact-us__img">
 	<div class="contact-us__header">
 		<div class="container">
 			<div class="row">
		        <div class="col-md-12 one-column-text">
		            <h2>¡Contáctenos! Queremos Saber de Ud.</h2>
		            <h3>Estamos del otro lado del teléfono y de la pantalla para resolver sus dudas y consultas o simplemente para recibir sus sugerencias y comentarios</h3>
		        </div>
    		</div>
 		</div>
 	</div>
 	</div>
 	
	<div class="contact-us__form" >
		<div class="formtitle">
			<h3>Escríbenos</h3>
			<h4>Nos comunicaremos a la brevedad</h4>
		</div>
		<div id="form-main">
		  <div id="form-div">
		  <?= $this->Form->create($contacto) ?>
		    <form class="form" id="form1">
		      <div class="nombre col-md-4"><?php echo $this->Form->control('nombre', ['class' => 'feedback-input', 'placeholder' => 'Nombre', 'label' =>false])?></div>      
		      <div class="email col-md-4"><?php echo $this->Form->control('telefono', ['class' => 'feedback-input', 'placeholder' => 'Telefono', 'label' =>false])?></div>
		      <div class="email col-md-4">
		      	<?php echo $this->Form->control('email', ['class' => 'feedback-input', 'placeholder' => 'Email', 'label' =>false])?>
		      </div>
		      <div class="mensaje col-md-12"><?php echo $this->Form->textarea('mensaje', ['class' => 'feedback-input', 'id' => 'mensaje', 'placeholder' => 'Mensaje', 'label' =>false])?></div>
		      
		      
		      <div class="submit col-md-2">
		      <?= $this->Form->button(__('Submit')) ?>
		    
		        
		      </div>
		      <?= $this->Form->end() ?>
		    </form>
		  </div>
		</div>
 	</div>
 	
	
	 <div class=" contact-info">
		 <div class="">
	        <div class="col-md-8" style="float: right;">
	            <h3>Pongámonos en Contacto</h3>
	            <p>Estaremos respondiendo sus preguntas todos los días hábiles hasta las 19:00 horas.</p>
	            <div class="row">
	                <div class="col-md-4">
	                    <span>Teléfono</span>
	                    <p>+54 291-15-4221334</p>
	                    <p>+54 9 231 454-8310</p>
	      
	                </div>
	                <div class="col-md-4">
	                    <span>Email</span>
	                    <p>contacto@paseociudad.com</p>
	                </div>
	                <div class="col-md-4">
	                    <span>Redes Sociales</span>
	                    <p>Facebook: <a href="https://www.facebook.com/paseociudad">/PaseoCiudad</a></p>
	                   <!--  <p>Twitter: <a href="https://twitter.com/LegalProm">@LegalProm</a></p> -->
	                </div>
	            </div>
	            <hr>
	            
	            
	        </div>
	        <div class="col-md-4" style="float: right;">
	            <h3 style="margin-bottom: 15px;">Sígenos en Facebook</h3>
	            <div class="fb-page" data-href="https://www.facebook.com/paseociudad" data-tabs="messages" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/paseociudad" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/paseociudad">Paseo Ciudad Guaminí</a></blockquote></div>
	            
	        </div>
        </div>
    </div>


<style>
	.form-div .col-md-4 {
		margin-bottom: 10px;
	}
	.contact-page {
		position: relative;
	}
	.contact-page .contact-us__form {
		height: 80vh;
		background: #FAFAFA;
		margin-bottom: 3px;
		box-shadow: 0 1px 2px #6d6d6d;
	}
	.contact-us__img {
		max-height: 500px;
		overflow: hidden;
		
	}
	.contact-us__img {
		background-image: url(../../../img/contact-us.jpg);
		width: 100%;
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		height: 28.125em;


	}
	.contact-us__header {
		/position: absolute;
		/top: 100px;
	}
	.contact-us__header .container {
		padding: 0 100px;
	}

	.one-column-text{
    padding:80px 130px;}

	.one-column-text h2{
	    font-size:42px;
	    font-weight:300;
	    color: #FAFAFA;
	    line-height:48px;
	    text-align: center;}

	.one-column-text h3{
	    font-size:24px;
	    font-weight:300;
	    color: #FAFAFA;
	    text-align: center;
	    line-height:40px;}

	  .formtitle h3{
		text-align: center;
		padding-top: 25px;
		margin-top: 0;
		font-size: 41px;
		line-height: 62px;
		font-weight: 300;
		color: #3C3C3C;
	  }
	  .formtitle h4 {
		text-align: center;
		color: #6F7A7B;
	  }

/*-------------------------------------*/

.contact-info{
    /margin-top:100px;
    padding-left: 35px;
    padding-right: 35px;
    width: 100%;
    height: 100vh;
    background: #E9EBEE;
}
    
.contact-info h3{
    font-weight:300;
    margin:30px 0;}
    
.contact-info p{
    font-weight:300;}
    
.contact-info span{
    font-size:18px;
    margin:20px 0 20px 0;
    font-weight:300;}

.contact-info hr{
    border:solid 1px #eee;
    margin:50px 0;}
/*-----------------------------*/

	#feedback-page{
	text-align:center;
}

#form-main{
	width:100%;
	float:left;
	padding-top:0px;
}
.contact-us__form input{
	width: 100%;
	border: 3px solid #ccc;
}
#form-div {
	/background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	/padding-top:35px;
	padding-bottom:50px;
	/width: 450px;
	/float: left;
	/left: 50%;
	/position: absolute;
 	margin-top:30px;
	/margin-left: -260px;
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
}

.feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	/width:50%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #5383D3;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#nombre{
	background-image: url(../../img/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#nombre:focus{
	background-image: url(../../img/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(../../img/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}
#telefono{
	background-image: url(../../img/phone-receiver.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}
#email:focus{
	background-image: url(../../img/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#mensaje{
	background-image: url(../../img/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
	border: 3px solid #ccc;
}
#mensaje:focus {
	border: 3px solid #5383D3;
}

textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
    
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

.submit button{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:right !important;
	width: 100%;
	border: #fbfbfb solid 3px;
	cursor:pointer;
	background-color: #5383D3;
	color:white;
	font-size:24px;
	padding-top:10px;
	padding-bottom:10px;
	/-webkit-transition: all 0.3s;
	/-moz-transition: all 0.3s;
	/transition: all 0.3s;
  /margin-top:-4px;
  font-weight:700;
}

.submit button:hover{
	background-color: rgba(0,0,0,0);
	color: #5383D3;
	border: 3px solid #5383D3;
}
	

@media (max-width: 995px) {

	.contact-us__header .container {
		padding: 0 25px;
	}

	.one-column-text{
    padding:60px 40px;}

	.one-column-text h2{
	    font-size:35px;
	    }

	.one-column-text h3{
	    font-size:20px;
	    }
	    .contact-page .contact-us__form {
		height: 50em;
		
	}
}
@media only screen and (max-width: 580px) {
	#form-div{
		padding-left: 3%;
		padding-right: 3%;
	}
	.contact-us__header .container {
		padding: 0 0px;
	}

	.one-column-text{
    padding:40px 30px;}

	.one-column-text h2{
	    font-size:35px;
	    }

	.one-column-text h3{
	    font-size:20px;
	    }
}


</style>


<?= $this->element('footer') ?>



