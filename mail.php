<?php
error_reporting(0);

		use PHPMailer\PHPMailer\PHPMailer;
  		if (isset($_POST['sendmail'])) {
			$user_name = $_POST['name'];
			$user_email = $_POST['email'];
			$user_phone = $_POST['phone'];
			$user_msg = $_POST['message'];			

			// Admin Email Body
			$admin_subject = "Contact Request Mail from Persevere Medica";
			$admin_body = "
					<h1>Customer Details</h1>
					<span>Customer request for contact</span>
					
					<p>Name : <b>$user_name</b></p>
					<p>Phone No : <b>$user_phone</b></p>
					<p>Email : <b>$user_email</b></p>
					<p>Message : <b>$user_msg</b></p>
				";

			// User Confirmation Email Body
			$user_subject = "Thank you for contacting Persevere Medica";
			$user_body = "
					<h1>Dear $user_name,</h1>
					<p>Thank you for reaching out to Persevere Medica. We have received your enquiry and our team will get back to you shortly.</p>
					<p><b>Your Message Details:</b></p>
					<p>Message: $user_msg</p>
					<br>
					<p>Best Regards,<br>Persevere Medica Team</p>
				";

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

			// 1. Send Email to Admin (Self)
			$mail->isHTML(true);
			$mail->setFrom($from_email, $site_name);
			$mail->addAddress($from_email); 
			$mail->Subject = $admin_subject;
			$mail->Body = $admin_body;
			$mail->send();

			// 2. Send Confirmation Email to User
			$mail->clearAddresses();
			$mail->addAddress($user_email);
			$mail->Subject = $user_subject;
			$mail->Body = $user_body;

			if ($mail->send()) {
                ?>
				<script>
                    window.location.href="thank-you.php";
                </script>
			    <?php
            } else {
				echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
			}
		}
	?>