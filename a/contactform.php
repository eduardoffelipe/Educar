<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "atendimento@educar.com.vc";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e o email grava na variavel 
//$assunto $email
$assunto = 'Contato feito pelo site';
$email = $_POST['email'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<strong>Nome:  </strong>".$nome;
$mensagem .= "<br><strong>Email: </strong>".$email;
$mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['message'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  Educar - Centro Educacional<sistema@educar.com.vc>\n"; 
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
$headers .= "X-Sender:  <sistema@educar.com.vc>\n"; 
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <sistema@educar.com.vc>\n"; 
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";
 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>	
	<meta HTTP-EQUIV="REFRESH" content="0; url=../">
	<script>
	alert("Email enviado com sucesso!")
	</script> 
</head>
