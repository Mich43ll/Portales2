<!DOCTYPE html>
<html lang="es">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>SmartEDU - Education Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="./src/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./src/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="./src/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./src/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./src/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="./src/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>


    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<h2 style="color: white;">School Musical</h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
						<li class="nav-item"><a class="nav-link" href="SobreNosotros.php">SOBRE NOSOTROS</a></li>
						<li class="nav-item"><a class="nav-link" href="Clases.php">CLASES</a></li>
						<li class="nav-item active"><a class="nav-link" href="Empleados.php">MAESTROS</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>INICIA SESION</span></a></li>
                    </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div class="all-title-box">
		<div class="container text-center">
			<h1 style="color: black;">Maestros<span class="m_1">"La educación es lo que sobrevive cuando lo que se ha aprendido ya se ha olvidado."</span></h1>
		</div>
	</div>
	
	<div id="teachers" class="section wb">
        <div class="container">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/author.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Keyti Diaz</h3>
							<span class="post">Ciencias Sociales</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-01.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Ramon Ordoñez</h3>
							<span class="post">Matematicas</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-02.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Maria Castillo</h3>
							<span class="post">Ingles</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-03.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Johana Savillon</h3>
							<span class="post">Español</span>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-04.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">William mendez</h3>
							<span class="post">Educación fisica</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-05.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Marcos Valladares</h3>
							<span class="post">Musica</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-06.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Pedro Ramos</h3>
							<span class="post">Computación</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img src="./src/images/avatar-07.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Miranda Lopez</h3>
							<span class="post">Ciencias Naturales</span>
						</div>
					</div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->	




    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Sobre Nosotros</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Enlaces de Informacion</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="SobreNosotros.php">Sobre Nosotros</a></li>
                            <li><a href="Clases.php">Clases</a></li>
							<li><a href="Empleados.php">Maestros</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Detalles de Contacto</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2022 Design By : Grupo 4 Desarrollo de Portales Web 2</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="./src/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="./src/js/custom.js"></script>

</body>
</html>