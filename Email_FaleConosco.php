<?php

	////////////////////////////////////////////////////////////////////////////////////////////////////

	require('model/PHPMailer/class.phpmailer.php');

	$tNome 	= $_POST['txtNomeC'];
	$tEmail	= $_POST['txtEmailC'];
	$tFone 	= $_POST['txtFoneC'];
	$tQtd 	= $_POST['txtQuantidadeC'];
	$tEvent = $_POST['txtEventoC'];
	$tDesc 	= $_POST['txtDescricaoC'];

	$mail = new PHPMailer(); //instancia a classe
		
	$mail->IsSMTP();
	$mail->SMTPAuth   	= true;
	$mail->SMTPSecure 	= "ssl";
	$mail->Host       	= "smtp.gmail.com";
	$mail->Port      	= 465;

	$mail->FromName 	= "Gigatec RS - Contato do Site";
	$mail->Username 	= 'gigatecrs.mailer@gmail.com';
	$mail->Password 	= 'Gigatec@2018';
	$mail->CharSet 		= 'UTF-8';

	$message   = "<p>Prezados,</p>
	<p>Segue os dados do contato realizado através de nosso site!</p>
	<br>
	<p><b>Nome: </b>".$tNome."</p>
	<p><b>E-Mail: </b>".$tEmail."</p>
	<p><b>Telefone: </b>".$tFone."</p>
	<p><b>Quantidade: </b>".$tQtd."</p>
	<p><b>Tipo de Evento: </b>".$tEvent."</p>
	<p><b>Descrição: </b>".$tDesc."</p>
	<br>
	<p>Um ótimo trabalho,</p>
	<p>Equipe Gigatec | 2019</p>
	<br>
	<p>Obs.: Não responda a este email. Gerado automáticamente pelo Site Gigatec-RS.</p>";
	
	$mail->IsHTML(true);
	$mail->Subject 		= 'Novo Contato de '.$tNome.'';//assunto do email
	$mail->AltBody 		= "Gigatec RS | 2019";
	$mail->CharSet 		= 'UTF-8';

	$mail->Body 		= stripslashes($message);
	#$mail->AddAddress('$tEmail');//email do destinatario	
	$mail->AddAddress('gigatecrs.mailer@gmail.com');//email do destinatario	
	$mail->Send();

	$mail->IsHTML(true); // send as HTML

	header('Location: Obrigado');
	exit();

?>