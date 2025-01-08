<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comment'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$comment=$_POST['comment'];
	
	
	
	$html="<table><tr><td>Name:</td><td>$name</td></tr><tr><td>Email:</td><td>$email</td></tr><tr><td>Subject:</td><td>$subject</td></tr><tr><td>Comment:</td><td>$comment</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);

	// Configurações do SMTP
	$mail->isSMTP(); // Define o envio de e-mails usando SMTP
	$mail->Host = "smtp.gmail.com"; // Servidores SMTP
	$mail->Port = 587; // Especifica a porta SMTP
	$mail->SMTPSecure = "tls"; // Ativa a criptografia TLS, `ssl` também é aceito
	$mail->SMTPAuth = true; // Ativa a autenticação SMTP
	$mail->Username = "m.eduardadasilvadias4@gmail.com";  
	$mail->Password = "@Parys100"; 

	$mail->setFrom($email, $name);  // Define o remetente do e-mail (o e-mail do formulário e o nome)
	$mail->addAddress("m.eduardadasilvadias4@gmail.com", "Eduarda Dias"); // Define o endereço de e-mail que receberá o e-mail (destinatário)

	$mail->IsHTML(true); // Define o formato do e-mail como HTML

	$msg="";
	
	if($mail->send()){
		//echo "Mail send";
		$msg="Message Sent";
	}else{
		//echo "Error occur";
		$msg="Error Occur";
	}
	echo $msg;
}
?>