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

