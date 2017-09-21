<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      	<title>Luis Cordero - Programador Web Freelance - luiscordero29</title>
        <meta name="description" content="Artesanos del código fuente y del diseño web. Desde Venezuela, ofrecemos nuestros servicios profesionales. Somos la mejor opción para su idea o proyecto.">
        <meta name="keywords" content="Programador Web Freelance, Programador Web Venezuela,Programador Web WordPress,Programador Codeigniter, Programador Android, Desarrollo Web Venezuela, Android, Freelance, WordPress, Drupal, Joomla, Codeigniter, Symfony, Laravel, Django, luiscordero29">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="<?php echo site_url(); ?>">	
        <!--Import Google Icon Font-->
      	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/materialize/css/materialize.min.css'); ?>"  media="screen,projection"/>
      	<!--Import font-awesome.css-->
      	<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
      	<!-- Custon Style -->
      	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />
      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body id="home">
    	<header>
    		<nav>
				<div class="nav-wrapper">
				   	<div class="container">
					    <a href="<?php echo site_url(); ?>" class="brand-logo">luiscordero29</a>					   
					      	<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					      	<ul id="dropdown-temas" class="dropdown-content">
							  <li><a href="<?php echo site_url('laravel'); ?>">Laravel</a></li>
							  <li class="divider"></li>
							  <li><a href="<?php echo site_url('codeigniter'); ?>">Codeigniter</a></li>
							  <li class="divider"></li>
							  <li><a href="<?php echo site_url('wordpress'); ?>">WordPress</a></li>
							</ul>
							<ul id="dropdown-temas-mobile" class="dropdown-content">
							  <li><a href="<?php echo site_url('laravel'); ?>">Laravel</a></li>
							  <li class="divider"></li>
							  <li><a href="<?php echo site_url('codeigniter'); ?>">Codeigniter</a></li>
							  <li class="divider"></li>
							  <li><a href="<?php echo site_url('wordpress'); ?>">WordPress</a></li>
							</ul>
					      	<ul id="nav-mobile" class="right hide-on-med-and-down">
						        <li><a href="<?php echo site_url(); ?>">Inicio</a></li>
						        <li><a href="<?php echo site_url('acerca-de'); ?>">Acerca de</a></li>
						        <li><a href="<?php echo site_url('servicios'); ?>">Servicios</a></li>
						        <li><a href="<?php echo site_url('servicios'); ?>">Equipo</a></li>
							    <li><a class="dropdown-button" href="#!" data-activates="dropdown-temas">Temas<i class="material-icons right">arrow_drop_down</i></a></li>
		      					<li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
						        <li><a href="<?php echo site_url('contacto'); ?>">Contacto</a></li>
					      	</ul>
					      	<ul class="side-nav" id="mobile">
						        <li><a href="<?php echo site_url(); ?>">Inicio</a></li>
						        <li><a href="<?php echo site_url('acerca-de'); ?>">Acerca de</a></li>
						        <li><a href="<?php echo site_url('servicios'); ?>">Servicios</a></li>
						        <li><a href="<?php echo site_url('servicios'); ?>">Equipo</a></li>
							    <li><a class="dropdown-button" href="#!" data-activates="dropdown-temas-mobile">Temas<i class="material-icons right">arrow_drop_down</i></a></li>
		      					<li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
						        <li><a href="<?php echo site_url('contacto'); ?>">Contacto</a></li>
					      	</ul>					      
				    </div>
				</div>
		  	</nav>
    	</header>   	

		<section>
		    <div id="map"></div>
		</section>

        <section class="contact">
        	<div class="row">
        		<div class="col l6 m6 s12">
	        		<div class="container">
	        			<div class="row">
	        				<div class="col s12 information">
	        					<h1>Contacto</h1>	
	        					<ul>
									<li>
										<a type="button" class="btn-floating btn-small btn-fb">
											<i class="material-icons">home</i>
										</a>
										Av. Chupa Chupa, Urb. Simón Bolivar, Manzana R Casa #8. Barinas-Venezuela
									</li>
									<li>
										<a type="button" class="btn-floating btn-small btn-fb">
											<i class="material-icons">email</i>
										</a>
										info@luiscordero29.com
									</li>
									<li>
										<a type="button" class="btn-floating btn-small btn-fb">
											<i class="material-icons">phone</i>
										</a>
										+58 412 525 39 51 / +58 414 373 54 83
									</li>
									<li>
										<a type="button" class="btn-floating btn-small btn-fb">
											<i class="material-icons">public</i>
										</a>
										<a href="http://luiscordero29.com">luiscordero29.com</a>
									</li>
								</ul>
	        				</div>
	        			</div>
	        		</div>
        		</div>
        		<div class="col l6 m6 s12 form-container">
        			<div class="container">
	        			<div class="row">
	        				<div class="col s12 information">
	        					
			        			<?php 
					              $at = array('class' => 'form', 'id' => 'home_form_contact');
					              echo form_open('contacto',$at); 
					            ?>
					            <?php 
	                            if (!empty($alert['success'])) {
	                            foreach ($alert['success'] as $key => $value) { 
	                            ?>                            
	                                <p class="alert green darken-4 white-text"><?php echo $value; ?></p>
	                            <?php 
	                                }} 
	                            ?>
	                            <?php 
	                            if (!empty($alert['danger'])) {
	                            foreach ($alert['danger'] as $key => $value) { 
	                            ?>                            
	                                <p class="alert red darken-4 white-text"><?php echo $value; ?></p>
	                            <?php 
	                                }} 
	                            ?>
	        					<?php echo validation_errors('<p class="red darken-4 white-text">','</p>'); ?>
									<div class="input-field">
										<input name="nombre" type="text" id="nombre" required class="validate">
										<label for="nombre">Nombre y Apellido <small>* (requerido)</small></label>
									</div>
									<div class="input-field" id="telefono" >
										<input name="telefono" type="text" id="telefono" required class="validate">
										<label for="telefono">Teléfono <small>* (requerido)</small></label>
									</div>
									<div class="input-field">
										<input name="email" type="email"  id="email" required class="validate">
										<label for="email">Email <small>* (requerido)</small></label>
									</div>				
									<div class="input-field">
										<textarea name="mensaje" class="materialize-textarea" required id="mensaje" cols="30" rows="10"></textarea>
										<label for="mensaje">Mensaje <small>* (requerido)</small></label>
									</div>
									<button type="submit" class="btn btn-primary waves-effect waves-light">Enviar</button>	
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
		
		<footer class="page-footer">
	        <div class="footer-copyright">
	            <div class="container">
	            	<div class="col s12">
						<a target="_blank" href="https://ve.linkedin.com/in/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-linkedin"></i></a>
						<a target="_blank" href="https://trello.com/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-trello"></i></a>
	            		<a target="_blank" href="https://github.com/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-github"></i>asd</a>
						<a target="_blank" href="https://twitter.com/luiscordero29" class="btn-floating btn-small btn-fb right follow-me"><i class="fa fa-twitter"></i></a>
	            		<div class="copy">
	            			© <?php echo date('Y'); ?> luiscordero29. Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional</a>.
	            		</div>
	            	</div>
	            	<div class="col s12">
	            		<div class="follow-me-mobile">	            			
		            		<a target="_blank" href="https://ve.linkedin.com/in/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-linkedin"></i></a>
							<a target="_blank" href="https://trello.com/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-trello"></i></a>
		            		<a target="_blank" href="https://github.com/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-github"></i>asd</a>
							<a target="_blank" href="https://twitter.com/luiscordero29" class="btn-floating btn-small left"><i class="fa fa-twitter"></i></a>
	            		</div>
	            	</div>
	            </div>
	        </div>
        </footer>

      	<!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery-2.1.1.min.js'); ?>"></script>
      	<script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
    	<script type="text/javascript">
    		$( document ).ready(function(){
				
    			$(".button-collapse").sideNav();
				$(".dropdown-button").dropdown();
    			
      			function initMap() {
        			var uluru = {lat: -25.363, lng: 131.044};
        			var map = new google.maps.Map(document.getElementById('map'), {
	          			zoom: 4,
	          			center: uluru
        			});
			        var marker = new google.maps.Marker({
			          	position: uluru,
			          	map: map
			        });
      			}

    			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		        ga('create', 'UA-78508852-1', 'auto');
		        ga('send', 'pageview');
		    });
    	</script>
    	<script async defer
	    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiT8bxy_fn5qr7m2rorAINji4unpA62Wc&callback=initMap">
	    </script>        
    </body>
 </html>