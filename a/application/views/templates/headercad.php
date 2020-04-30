<?php 

$dir ="";
if($_SERVER['SERVER_NAME'] == "educar.ee2x.com.br"){
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
<!-- <base href="//<?=$_SERVER['SERVER_NAME'].$dir?> "> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />

<!-- default css files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/cadastro.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    
<!-- default css files -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
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
	

<!-- JivoChat -->

<!-- JivoChat -->

<script src="//code.jivosite.com/widget/UOysU5b11y" async></script>

<!-- //JivoChat -->

<!-- //JivoChat -->
</head>

