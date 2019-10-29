<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IFotografias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

		<div id="colorlib-page">
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
			<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
				<h1 id="colorlib-logo"><a href="index.html"><span class="flaticon-camera"></span>IFotografias</a></h1>
				<nav id="colorlib-main-menu" role="navigation">
					<ul>
						<li class="colorlib-active"><a href="index.html">Home</a></li>
						<li><a href="gallery.html">Galeria</a></li>
						<li><a href="about.html">Sobre</a></li>
						<li><a href="blog.php">Página do participante</a></li>
					</ul>
				</nav>

				<section>
				<?php
				include("classe/conexao.php");
				$msg = false;
				if(isset($_FILES['arquivo'])){

					$extensao = strtolower(substr($($_FILES['arquivo']['name'], -4));
					$novo_nome = md5(time()) . $extensao;
					$diretorio = "upload/";

					move_uploaded_file(($($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

					$sql_code = "INSERT INTO (idcodigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
					if ($mysqli ->  query ($sql_code))
					  $msg = "Imagem enviada com sucesso!"
					else
					$msg = "Falha ao enviar a imagem." 
				}

				    
				?>
				<h1>Upload de imagens</h1>
				<?php if($msg != false) echo "<p> $msg</p>"; ?>
				<form action="upload.php" method="POST" enctype="multipart/form-data">
				 arquivo: <input type="image" required name="arquivo">
				 <input type="submit" value="Enviar">
				</form>
			</section>

			<div class="colorlib-footer">
				<h3>Follow Us Here!</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section bg-light ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
	            <h1 class="mb-3 bread">Bem Vindo</h1>
							<p>Aqui você pode postar suas fotos autorais do seu campus</p>

							<form method="post" action="tratarimagem.php" enctype="multipart/form-data">

							<div class="form-group">  <!-- adicionando imagem -->
            <label for="imagens">Imagem</label>
            <input type="file" class="form-control" id="imagens" name="imagens">
				</div>
				
				<button type="submit" class="btn btn-primary">Enviar</button>
</form>

	          </div>
	        </div>
				</div>
			</section>
			
	            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	 &copy;<script>document.write(new Date().getFullYear());</script> IFotografias - Todos os direitos reservados <i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank"> Mayke & Yasmin Inc.</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
	      </div>
	    </footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>