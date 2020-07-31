<?php
//1 – Definimos Para quem vai ser enviado o email
$para = "eduardoftoledo70@gmail.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
$nome = $_POST['name'];
// 3 - resgatar o assunto digitado no formulário e o email grava na variavel 
//$assunto $email
$assunto = 'Confirmação de contrato de'.$nome;
$email = $_POST['email'];
 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagem = "<h2><strong>Dados do Aluno</strong></h2>";
$mensagem .= "<strong>Nome Completo:  </strong>".$nome;
$mensagem .= "<br><strong>Email: </strong>".$email;
$mensagem .= "<br>  <strong>CPF: </strong>".$_POST['cpf'];
$mensagem .= "<br>  <strong>Telefone: </strong>".$_POST['phone'];
$mensagem .= "<br>  <strong>Nacionalidade: </strong>".$_POST['nacionalidade'];
$mensagem .= "<br>  <strong>Cidade de Nascimento: </strong>".$_POST['cidadenasc'];
$mensagem .= "<br>  <strong>RG: </strong>".$_POST['rg'];
$mensagem .= "<br>  <strong>Órgão Emissor: </strong>".$_POST['orgemissor'];
$mensagem .= "<br>  <strong>Sexo: </strong>".$_POST['sexo'];
$mensagem .= "<br>  <strong>Estado Civil: </strong>".$_POST['estadocivil'];

$mensagem .= "<h2><strong>Dados de Endereço</strong></h2>";
$mensagem .= "<br>  <strong>CEP: </strong>".$_POST['cep'];
$mensagem .= "<br>  <strong>Logradouro: </strong>".$_POST['rua'];
$mensagem .= "<br>  <strong>Número: </strong>".$_POST['numero'];
$mensagem .= "<br>  <strong>Complemento: </strong>".$_POST['complemento'];
$mensagem .= "<br>  <strong>Bairro: </strong>".$_POST['bairro'];
$mensagem .= "<br>  <strong>Cidade: </strong>".$_POST['cidade'];
$mensagem .= "<br>  <strong>Estado: </strong>".$_POST['estado'];
$mensagem .= "<br>  <strong>País: </strong>".$_POST['pais'];

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
