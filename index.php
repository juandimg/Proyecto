<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8"><meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>COSERTEP</title>
	<meta content="" name="descriptison"><meta content="" name="keywords">
	<link href="assets/img/Logo.jpg" rel="icon" />
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
	<link href="assets/css/estilos.css" rel="stylesheet" />
</head>
<body>
<header class="fixed-top " id="header">
<div class="container d-flex align-items-center">
<h1 class="logo mr-auto"><a href="index.html">COSERTEP</a></h1>

<nav class="nav-menu d-none d-lg-block">
<ul>
	<li><a href="index.html">Inicio</a></li>
	<li class="drop-down"><a href="">Qui&eacute;nes Somos</a>
	<ul>
		<li><a href="historia.html">Historia</a></li>
		<li class="drop-down"><a href="#">Institucional</a>
		<ul>
			<li><a href="vision.html">Misi&oacute;n</a></li>
			<li><a href="vision.html">Visi&oacute;n</a></li>
			<li><a href="vision.html">Valores Corporativos</a></li>
		</ul>
		</li>
		<li><a href="galeria.html">Galer&iacute;a</a></li>
	</ul>
	</li>
	<li class="active"><a href="portafolio.html">Portafolio</a></li>
	<li><a href="contacto.html">Contacto</a></li>
	<li><a href="proyectos.html">Proyectos</a></li>
</ul>
</nav>
</div>
</header>

<section class="pagos">
<div class="hero-container"></div>
</section>

<main>
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topmargin-sm"><img alt="..." class="card-img-top" src="assets/img/Imagen6.png" />
			<h3>Todos podemos ser h&eacute;roes, s&uacute;mate a nuestro proyecto y haz tu aporte aqu&iacute;</h3>
			<p class="text-muted">Agradecemos mucho tu aporte</p>
			</div>

			<div class="col-md-6 topmargin-sm">
				<form action="agregarDatos.php" method="POST">
						<div class="row">
						<div class="col-md-6">
						<div class="form-group"><input class="form-control is-valid" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre" required="" type="text" value="" />
						<div></div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group"><input class="form-control is-valid" id="ApellidosUsuario" name="ApellidosUsuario" placeholder="Apellidos" type="text" />
						<div></div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group"><input class="form-control is-valid" id="NumeroDeIdentificacion" name="NumeroDeIdentificacion" placeholder="IdentificacionUsuario" type="number" />
						<div></div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group"><input class="form-control is-valid" id="telefonodeUsuario" name="telefonodeUsuario" placeholder="Telefono" type="number" />
						<div></div>
						</div>
						</div>

						<div class="col-md-12">
						<div class="form-group"><input class="form-control is-valid" id="EmailUsuario" name="EmailUsuario" placeholder="Email" type="Email" />
						<div></div>
						</div>
						</div>

						<div class="col-md-12">
						<div class="form-group"><select class="form-control form-control is-valid"><option>Tipo de Moneda</option><option>PESO COL$</option><option>DOLAR USD$</option><option>EURO EU&euro;</option> </select></div>
						</div>

						<div class="col-md-6">
						<div class="form-group"><input class="form-control is-valid" id="ValorTotalDonacion" name="ValorTotalDonacion" placeholder="Valor Total" type="number" />
						<div></div>
						</div>
						</div>

						<div class="col-md-6">
						<div class="form-group"><input class="form-control is-valid" id="IvaDonacion" name="IvaDonacion" placeholder="Iva" type="number" />
						<div></div>
						</div>
						</div>

						<div class="col-md-12">
						<div class="form-group"><input class="form-control is-valid" id="ReferenciaPagoUsuario" name="ReferenciaPagoUsuario" placeholder="Referencia Pago" type="number" />
						<div></div>
						</div>
						</div>

						<button type="submit" class="btn btn-success btn-block" id="btnEnviar" name="btnEnviar">Enviar</button>
                </form>	

				<form action="consultarDatos.php" method="POST" class="mt-5 mb-5">
                    <div class="form-group">
                        <label for="nombreBuscar">Nombre a buscar:</label>
                        <input type="text" class="form-control" id="nombreBuscar" name="nombreBuscar">
                    </div>
					<button type="submit" class="btn btn-info btn-block" id="btnBuscar" name="btnBuscar">Buscar</button>
                </form>


                <form action="eliminarDatos.php" method="POST" class="mt-5 mb-6">
                    <div class="form-group">
                        <label for="nombreEliminar">Nombre a eliminar:</label>
                        <input type="text" class="form-control" id="nombreEliminar" name="nombreEliminar">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" id="btnEliminar" name="btnEliminar">Eliminar</button>
                </form>
                

								
			</div>
		</div>
	</div>
</section>
</main>

<footer id="footer">
<div class="footer-top ">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 footer-contact"><a class="logo-cosertep" href="#"><img alt="logo" class="logo-cosertep" src="assets/img/Logo.jpg" /></a><br />
&nbsp;
<p>Cr 42D # 46CSur -25<br />
Envigado - Antioquia<br />
Colombia<br />
<strong>Tel&eacute;fono</strong> +37 5636978<br />
<strong>Email:</strong> info@Cosertep.com</p>
</div>

<div class="col-lg-2 col-md-6 footer-links">
<h4>Enlaces &uacute;tiles</h4>

<ul>
	<li><a href="index.html">Inicio</a></li>
	<li><a href="portafolio.html">Portafolio</a></li>
	<li><a href="contacto.html">Contacto</a></li>
	<li><a href="vision.html">Qui&eacute;nes Somos</a></li>
	<li><a href="proyectos.html">Proyectos</a></li>
</ul>
</div>

<div class="col-lg-3 col-md-6 footer-links">
<h4>Nuestros Servicios</h4>

<ul>
	<li><a href="portafolio.html">Social</a></li>
	<li><a href="proyectos.html">Proyectos</a></li>
	<li><a href="portafolio.html">Comunitarios</a></li>
	<li><a href="portafolio.html">Convivencia</a></li>
</ul>
</div>

<div class="col-lg-4 col-md-6 footer-newsletter">
<h4>Suscr&iacute;base a nuestro bolet&iacute;n</h4>

<p>Suscribete y recibe todas nuestras actividades y noticias</p>

<form action="" method="post"><input name="email" type="email" /><input type="submit" value="Suscríbete" /></form>
</div>
</div>
</div>
</div>
</footer>
<script src="assets/vendor/jquery/jquery.min.js"></script><script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script><script src="assets/vendor/php-email-form/validate.js"></script><script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script><script src="assets/vendor/venobox/venobox.min.js"></script><script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script><!-- Template Main JS File --><script src="assets/js/main.js"></script></body>
</html>