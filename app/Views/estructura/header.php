<head>
    <link href="../../public/css/fontawesome-all.css" rel="stylesheet"/>
    <link href="../../public/css/structure.css" rel="stylesheet" /> 
</head>

<section class="w3l-header-4 header-sticky">
		<!--header-->
		<header id="site-header" class="fixed-top">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark stroke">
					<a class="navbar-brand" href="#">
						<span class="fa fa-cutlery"></span> PetBook
					</a>
					<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
						
					</button>
		  
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo site_url('Home/inicioVista/'.$id);?>">Mis mascotas<span class="sr-only">(current)</span></a>
							</li>					
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('Home/nuevaMascota/'.$id);?>">Registrar Mascota</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url('Home');?>">Cerrar sesion</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		  </header>
		<!--/header-->
	</section>

	<section class="w3l-hero-headers-9" id="home">
	  <div class="slide text-center header11" data-selector="header11">
	      <div class="container">
	          <div class="banner-text ">
	              <h5 class=" ">Sus mascotas <br>en las mejores manos</h5>	     
	          </div>
	      </div>

	  </div>
	</section>