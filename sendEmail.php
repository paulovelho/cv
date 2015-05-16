<?php

	require("Email.class.php");
	
	$destino = "paulohenrique@paulovelho.com";
	
	$from = $_POST["email"];
	$subject = "[curriculum contact] : ".$_POST["assunto"];
	$name = $_POST["nome"];
	$mensagem = "Message from: ".$name." [".$from."]<br/><br/> >> ".$_POST["mensagem"];
	
	$email = new Email();
	$email->setNewEmail($destino, $from, $subject);
	$email->setMessage($mensagem);
	if( $email->send() )
		echo "E-mail successfully sent!";
	else 
		echo $email->error;



?>