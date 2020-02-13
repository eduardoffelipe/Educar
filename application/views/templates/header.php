<?php 

$dir ="";
if($_SERVER['SERVER_NAME'] == "educar.ee2x.com.br"){
	$dir = "/";
}else if($_SERVER['SERVER_NAME'] == "localhost"){
	$dir = "local/web";
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<!-- Head -->
<head>
<title><?= $titulo ?></title>
<base href="//<?=$_SERVER['SERVER_NAME'].$dir?> ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />

<!-- default css files -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->
	
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

<script src="//code.jivosite.com/widget/eJiH2mDsDf" async></script>

<!-- //JivoChat -->
</head>

