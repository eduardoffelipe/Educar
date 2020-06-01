

<?php 

$keywords = file_get_contents("./utils/Keywords.csv");

$dir ="";
if($_SERVER['SERVER_NAME'] == "educar.com.vc"){
	$dir = "/";
}else if($_SERVER['SERVER_NAME'] == "localhost"){
	$dir = "/Educar";
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->
<head>
<title><?= $titulo ?></title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159338549-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159338549-1');
</script>



<!-- <base href="//<?=$_SERVER['SERVER_NAME'].$dir?> "> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="title" content="Educar Centro Educacional">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Portuguese">
<meta name="description" content="A Educar.com.vc, a melhor plataforma de aprendizado EAD! Cursos em todos os níveis de conhecimento, Graduação, Pós-Graduação, Cursos de Extensão, Cursos Profissionalizantes. Experiente a nossa metodologia!">
<meta name="keywords" content="<?= str_replace(array("\r\n", "\n")," ",$keywords); ?>" />

<!-- default css files -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="assets/css/cadastro.css" type="text/css" media="all"> -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<!-- default css files -->


	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->


<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
<link rel="manifest" href="asstes/images/site.webmanifest">
<link rel="mask-icon" href="asstes/images/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!-- //favicon -->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- Carousel cards -->

<!-- //Carousel Cards -->

<!-- JivoChat -->

<script src="//code.jivosite.com/widget/UOysU5b11y" async></script>

<!-- //JivoChat -->


</head>



<!-- Body -->

<body>

	<!-- banner -->
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
							<a><img src="./assets/images/logoEducar.png" class="logoNavbar" /></a>
						</div>

					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav link-effect-4">
							<li><a href="<?= base_url() ?>home" data-hover="Home">Início</a> </li>
							<!--<li><a href="<?= base_url() ?>sobre" data-hover="About">Sobre Nós </a> </li>-->
							<li><a href="<?= base_url() ?>como" data-hover="Como Estudar">Como Estudar?</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Valores<b class="caret"></b></a>
								<ul class="dropdown-menu">
								<li><a href="<?= base_url() ?>precosgraduacao" data-hover="Como Estudar">Graduação</a></li>
									<li><a href="<?= base_url() ?>precos">Pós-Graduação</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Cursos <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?= base_url() ?>cursopos">Pós-Graduação Lato Sensu/MBA</a></li>
									<li><a href="<?= base_url() ?>cursograduacao">Graduação</a></li>
									<li><a href="<?= base_url() ?>cursoextensao">Cursos de Extensão</a></li>
								</ul>
							</li>
							<!--<li><a href="<?= base_url() ?>cursopos">Cursos</a></li>-->
							<li><a href="<?= base_url() ?>contato" data-hover="Contact">Contato</a></li>
							<li><a href="https://wa.me/5533999031649?text=Olá,%20quer%20fazer%20minha%20matrícula%20em%20um%20curso" target="blank"><span class="buttonNav">Inscreva-se</span></a>
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
					<img src="assets/images/banner1.png" alt="banner1">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="./assets/images/banner2.png" alt="banner2">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="./assets/images/banner3.png" alt="banner3">
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
		<a href="https://wa.me/5533999031649?text=" target="_blank"><img src="./assets/images/whatsapp_logo.png" alt="WhatsappLogo"></a>
		<ul>
		</ul>
	</div>

	<!-- //WhatsappButton -->
<section class="pesquisa">
  <div class="row">
    <div class="container mgtop">
      <h2 class="titlepesq">Faça sua pesquisa</h2>
    </div>
    <div class="container conpesq">
      <form action="<?=base_url('resultado') ?>" method="post">
        <div class="col-md-8">
          <h5>Buscar por nome</h5>
          <input type="text" placeholder="Digite o curso" class="inputpesq" name="resultado" id="resultado"/>
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-pesquisar">Pesquisar</button>
        </div>
      </form>
    </div>
  </div>
  </div>
</section>
<section class="cursos">
  <div class="row">
    <div class="container mgtop">
      <h2 class="titlepesq">Cursos</h2>
    </div>
  </div>
  <div class="row">
    <div class="container mgtop">
      <?php foreach ($listagem as $curso) :   ?>
        <div class="col-xs-8 col-md-10 cursospesq">
          <h4><?= $curso['titulo'] ?></h4>
        </div>
        <div class="col-xs-4 col-md-2 cursospesqarea">
          <a href="<?= base_url() ?>cursoindividual?cursoid=<?= $curso['id'] ?>">
            <h4>Saiba Mais</h4>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="mgtop"></div>
</section>

<?php 
?>

<!-- contact -->
<div class="contact">
	<h3 class="heading">Contato</h3>
	<p></p>
	<div class="container">
		<div class="contact-grids">
		
			<div class="col-md-7 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<form action="<?=base_url()?>contactform.php" method="post">		
					<input type="text" placeholder="Nome" name="name" id="name" required="">
					<input type="email" placeholder="Email" name="email" id="email" required="">
					<div class="clearfix"> </div>
					<textarea placeholder="Mensagem..." name="message" id="message" required=""></textarea>
					<input type="submit" value="Enviar" >
				</form>
			</div>
			<div class="col-md-5 contact-grid wow fadeInUp animated" data-wow-delay=".5s">
				<div class="call ">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Telefone:</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li>(33)3321-7121</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Local:</h3>
					</div>
					<div class="col-xs-7 contact-grdr">
						<ul>
							<li>Rua Dona Julica,98 - Centro </li>
							<li>Caratinga, MG - Brasil</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="call">
					<div class="col-xs-1 contact-grdl">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-3 contact-grdr">
						<h3>Email:</h3>
					</div>
					<div class="col-xs-8 contact-grdr">
						<ul>
							<li><a href="mailto:contato@educar.com.vc">atendimento@educar.com.vc</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 socialTitle">
					<h3>Redes Sociais:</h3>
				</div>
				<div class="col-xs-12">
					<ul class="socialIcons"> 
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="https://www.instagram.com/educarcomvc/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //contact -->

<!-- copyright -->
<div class="copyright">
	<div class="container center">
		<div class="copyrighttop center">
		</div>
		<div class="copyrightbottom center">
			<p>© 2020 Educar. Todos os direitos reservados | Desenvolvido com <i class="fa fa-heart"></i> <a href="https://acodedreams.com.br" target="Blank" class="gcode center">CodeDreams</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //copyright -->
		
<!-- popup for sign in form -->
<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal1">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog1" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Sign In </h3>
					<form action="./application/controllers/contactform.php" method="post">
						<input type="text" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<ul>
						<li>
							<input type="checkbox" id="brand1" value="">
							<label for="brand1"><span></span>Remember me</label>
						</li>
						</ul>
						<a href="#">Forgot Password?</a><br>
						<div class="clearfix"></div>
							<input type="submit" value="Get Started">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign in form -->

<!-- popup for sign up form -->
<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal2">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div id="small-dialog2" class="mfp-hide book-form">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3>Sign Up</h3>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Your Name" required=""/>
						<input type="text" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<input type="password" name="Password" class="password" placeholder="Confirm Password" required=""/>
						<input type="submit" value="Register Now">
					</form>
			</div>
		</div>
	</div>
</div>
<!-- //popup for sign up form -->



<!-- Default-JavaScript-File -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<!-- carroussel -->
<script>
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>

<!-- //carroussel -->
	
<!-- clients js file-->
	<script src="assets/js/jquery.wmuSlider.js"></script> 
		<script>
			$('.example1').wmuSlider();         
		</script> 
<!-- //clients js file -->

<!-- Jarallax -->
<script src="assets/js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<!-- //Jarallax -->

<!-- smooth scrolling -->
	<script src="assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="jassets/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

</body>
<!-- //Body -->
</html>