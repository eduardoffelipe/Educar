<?php 
?>

<!-- Body -->
<body>

<!-- banner -->
<h1 class="dn">Educar Centro Educacional </h1>
<div class="banner">
	<div class="header-top">
		<div class="container">
			<div class="header-top-right">
				<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:atendimento@educar.com.vc">atendimento@educar.com.vc</a></p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> (33)3321-7121</p>
			</div>
		</div>
	</div>
		<div class="head">
			<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<a><img src="./assets/images/logoEducar.png" class="logoNavbar" alt="Logo Educar"/></a>
								</div>

							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li><a href="<?= base_url() ?>home" data-hover="Home">Início</a> </li>
								<!-- <li><a href="<?= base_url() ?>sobre" data-hover="About">Sobre Nós </a> </li> -->
								<li><a href="<?= base_url() ?>como"  data-hover="Como Estudar">Como Estudar?</a></li>
								 <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Cursos <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="<?= base_url() ?>cursopos">Pós-Graduação Lato Sensu/MBA</a></li>
										<li><a href="<?= base_url() ?>cursograduacao">Graduação</a></li>
										<li><a href="<?= base_url() ?>cursoextensao">Cursos de Extensão</a></li>
									</ul>
                              </li>
								<li><a href="<?= base_url() ?>contato" data-hover="Contact">Contato</a></li>
								<li><a href="<?= base_url() ?>cadastro" target="blank"><span class="buttonNav">Inscreva-se</span></a>
							  </ul>
							</div><!-- /.navbar-collapse -->
						</div>
					  <div class="clearfix"></div>	
			</div>
		</div>
		<!--  Carousel -->

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
		
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="assets/images/banner1.jpg" alt="Banner 1 Educar">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="./assets/images/banner2.jpg" alt="Banner 2 Educar">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="./assets/images/banner3.jpg" alt="Banner 3 Educar">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
		
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- //carousel -->
</div>
<!-- //banner -->

<!-- WhatsappButton -->
<div class="fab">
	<a href="https://wa.me/553333217121?text=" target="_blank"><img src="./assets/images/whatsapp_logo.png" alt="WhatsappLogo"></a>
	<ul>
	</ul>
	</div>

<!-- //WhatsappButton -->
