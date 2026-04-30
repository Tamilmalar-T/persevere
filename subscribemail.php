<?php
error_reporting(0);

		use PHPMailer\PHPMailer\PHPMailer;
		
  		if (isset($_POST['sendmail'])) {
			$user_email = $_POST['email'];			

			$subject_msg = "Subscribe Mail from Demo";
				$my_body_data = "
					<h1>Customer Email Details</h1>
					
					<p>Email : <b>$user_email</b></p>
				";
			$name = "New Subscribe Mail Demo";  // Name of your website or yours
			$to = "Demo@Demo.in";  // mail of reciever
			$subject = $subject_msg;
			$body = $my_body_data;
			$from = "Demo@Demo.in";  // your mail
			$password = "mgok buje bzms uvkx";  // your mail password
            //$password = "lqng zvhl rtkg kjhw"; // your mail password running marketing passkey
			// Ignore from here

			require_once "PHPMailer/PHPMailer.php";
			require_once "PHPMailer/SMTP.php";
			require_once "PHPMailer/Exception.php";
			$mail = new PHPMailer();

			// To Here

			//SMTP Settings
			$mail->isSMTP();
			// $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
			$mail->Host = "smtp.gmail.com"; // smtp address of your email
			$mail->SMTPAuth = true;
			$mail->Username = $from;
			$mail->Password = $password;
			$mail->Port = 587;  // port
			$mail->SMTPSecure = "tls";  // tls or ssl
			$mail->smtpConnect([
			'ssl' => [
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				]
			]);

			//Email Settings
			$mail->isHTML(true);
			$mail->setFrom($from, $name);
			$mail->addAddress($to); // enter email address whom you want to send
			$mail->Subject = ("$subject");
			$mail->Body = $body;
			
			if ($mail->send()) {
                ?>
				<script>
					alert('Thank you for Subscribe!!');
                    window.location.href="index.php";
                </script>
			    <?php
            } else {
				echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
			}
		}
	?>