<?php
error_reporting(0);

		use PHPMailer\PHPMailer\PHPMailer;
		
		if (isset($_POST['sendmail'])) {
			$user_email = $_POST['email'];			
			$site_name = "Persevere Medica";
			$from_email = "perseveremedica@gmail.com"; 
			$password = "kzuw ubhd ynww ykuy";

			require_once "PHPMailer/PHPMailer.php";
			require_once "PHPMailer/SMTP.php";
			require_once "PHPMailer/Exception.php";
			
			$mail = new PHPMailer();

			//SMTP Settings
			$mail->isSMTP();
			$mail->Host = "smtp.gmail.com"; 
			$mail->SMTPAuth = true;
			$mail->Username = $from_email;
			$mail->Password = $password;
			$mail->Port = 587; 
			$mail->SMTPSecure = "tls";
			$mail->smtpConnect([
				'ssl' => [
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				]
			]);

			// 1. Send Notification Email to Admin (Self)
			$mail->isHTML(true);
			$mail->setFrom($from_email, $site_name);
			$mail->addAddress($from_email); 
			$mail->Subject = "New Newsletter Subscription: $user_email";
			$mail->Body = "
				<h1>New Subscription Request</h1>
				<p>A new user has subscribed to the newsletter.</p>
				<p><b>Subscriber Email:</b> $user_email</p>
			";
			$mail->send();

			// 2. Send Confirmation Email to User
			$mail->clearAddresses();
			$mail->addAddress($user_email);
			$mail->Subject = "Welcome to Persevere Medica Newsletter!";
			$mail->Body = "
				<h1>Thank you for subscribing!</h1>
				<p>Dear Subscriber,</p>
				<p>Thank you for signing up for the Persevere Medica newsletter. You will now receive our latest updates and sessions directly in your inbox.</p>
				<br>
				<p>Best Regards,<br>Persevere Medica Team</p>
			";

			if ($mail->send()) {
				?>
				<script>
					alert('Thank you for subscribing!!');
					window.location.href="index.php";
				</script>
				<?php
			} else {
				echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
			}
		}
	?>