<?php

	class GenericosHelper {
	
		public static function getTopo($titulo){
		
			return '  <!DOCTYPE html>
                      <html lang="pt-br">
					    <head>
					        <title>'.$titulo.'</title>
					    </head>
					    <body>  

                      <!-- Top menu -->
						<nav class="navbar" role="navigation">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="inicio">Miranda - Sua agência de fotográfia</a>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="top-navbar-1">
									<ul class="nav navbar-nav navbar-right">
										<li>
											<a href="inicio"><i class="fa fa-camera"></i><br>Home</a>
										</li>
										<li>
											<a href="portfolio?pag=1"><i class="fa fa-camera"></i><br>Portfólio</a>
										</li>
										<li>
											<a href="contato"><i class="fa fa-envelope"></i><br>Contato</a>
										</li>
										<li>
											<a href='.usuarioHelper::getVerificaSessao() .'><i class="fa fa-lock"></i><br>Admin</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
			       ';					
		}
		
		public static function getRodape(){
		
			return ' 
                     <!-- Footer -->
					<footer>
					    <div class="container">
					        <div class="row">
					            <div class="col-sm-4 footer-box wow fadeInUp">
					                <h4>Quem somos</h4>
					                <div class="footer-box-text">
					                    <p>
					                    	Fundada em 19 de fevereiro de 2010 com uma proposta invadora pensando nos diversos motivos para comemorar, a começar pelos registros de histórias, a fotografia e a filmagem têm sido essenciais para que os momentos não se percam no tempo.
					                    </p>
					                   <!-- <p><a href="about.html">Read more...</a></p>-->
					                </div>
					            </div>
					            <div class="col-sm-4 footer-box wow fadeInDown">
					                <h4>Atualizar Email</h4>
					                <div class="footer-box-text footer-box-text-subscribe">
					                	<p>Digite seu e-mail e você vai ser um dos primeiros a receber novas atualizações:</p>
					                	<form role="form" action="assets/subscribe.php" method="post">
					                    	<div class="form-group">
					                    		<label class="sr-only" for="subscribe-email">Email address</label>
					                        	<input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
					                        </div>
					                        <button type="submit" class="btn">Subscribe</button>
					                    </form>
					                    <p class="success-message"></p>
					                    <p class="error-message"></p>
					                </div>
					            </div>
					            <!--<div class="col-sm-3 footer-box wow fadeInUp">
					                <h4>Flickr Photos</h4>
					                <div class="footer-box-text flickr-feed"></div>
					            </div>-->
					            <div class=" col-sm-4 footer-box wow fadeInDown">
					                <h4>Entre em Contato</h4>
					                <div class="footer-box-text footer-box-text-contact">
					                    <p><i class="fa fa-map-marker"></i> Rua: Ernesta Gobbo, 515 - Bairro Rio Verde., 18480-000 Itaporanga-SP</p>
					                    <p><i class="fa fa-phone"></i>Fone: (15) 99815 5442</p>
					                    <!--<p><i class="fa fa-user"></i> Skype: Andia_Agency</p>-->
					                    <p><i class="fa fa-envelope"></i> Email: <a href="">Patrick-itapo@hotmail.com</a></p>
					                </div>
					            </div>
					        </div>
					        <div class="row">
					        	<div class="col-sm-12 wow fadeIn">
					        		<div class="footer-border"></div>
					        	</div>
					        </div>
					        <div class="row">
					            <div class="col-sm-7 footer-copyright wow fadeIn">
					                <p>Direitos reservados 2015 </p>
					            </div>
					            <div class="col-sm-5 footer-social wow fadeIn">
					                <a href="#"><i class="fa fa-facebook"></i></a>
					                <a href="#"><i class="fa fa-dribbble"></i></a>
					                <a href="#"><i class="fa fa-twitter"></i></a>
					                <a href="#"><i class="fa fa-pinterest"></i></a>
					            </div>
					        </div>
					    </div>
					</footer>

					        <script src="assets/js/jquery-1.11.1.min.js"></script>
					        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
					        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
					        <script src="assets/js/jquery.backstretch.min.js"></script>
					        <script src="assets/js/wow.min.js"></script>
					        <script src="assets/js/retina-1.1.0.min.js"></script>
					        <script src="assets/js/jquery.magnific-popup.min.js"></script>
					        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
					        <script src="assets/js/jflickrfeed.min.js"></script>
					        <script src="assets/js/masonry.pkgd.min.js"></script>
					        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
					        <script src="assets/js/jquery.ui.map.min.js"></script>
					        <script src="assets/js/scripts.js"></script>
								';
		
		}
		public static function getLogin(){
		
			return '<footer>
						<div align="center" style="border-top: 1px solid #333; position:fixed;bottom: 0;width: 100%;">
							' . date('Y') . '. Todos os direitos reservados.
						</div>
					</footer>
					</body>
					</html>';
		
		}

		public static function getStyle(){
			$link = "<meta charset=\"utf-8\">
	        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
	        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

	        <!-- CSS -->
	        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,400\">
	        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans\">
	        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Lobster\">
	        <link rel=\"stylesheet\" href=\"assets/bootstrap/css/bootstrap.min.css\">
	        <link rel=\"stylesheet\" href=\"assets/font-awesome/css/font-awesome.min.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/animate.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/magnific-popup.css\">
	        <link rel=\"stylesheet\" href=\"assets/flexslider/flexslider.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/form-elements.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/style.css\">
	        <link rel=\"stylesheet\" href=\"assets/css/media-queries.css\">

	        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	        <!--[if lt IE 9]>
	            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
	            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
	        <![endif]-->
	       ";
			return $link;
		}
	
	}