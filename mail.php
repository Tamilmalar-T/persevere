<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['sendmail'])) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_msg = $_POST['message'];

    // SMTP Credentials provided by user
    $smtp_user = "tamilmalar520d@gmail.com";
    $smtp_pass = "agxe kowe vqvd iybl";

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer(true);

    try {
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_pass;
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";
        $mail->smtpConnect([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        // 1. Email to Site Owner (Enquiry Notification)
        $mail->setFrom($smtp_user, "Persevere Medica Website");
        $mail->addAddress("perseveremedica@gmail.com"); // Owner email from contact page info
        $mail->isHTML(true);
        $mail->Subject = "New Contact Request: $user_name";
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2>New Contact Enquiry</h2>
                <p><strong>Name:</strong> $user_name</p>
                <p><strong>Email:</strong> $user_email</p>
                <p><strong>Phone:</strong> $user_phone</p>
                <p><strong>Message:</strong></p>
                <p>$user_msg</p>
            </div>
        ";
        $mail->send();

        // 2. Email to Customer (Thank You Email)
        $mail->clearAddresses();
        $mail->addAddress($user_email);
        $mail->Subject = "Thank You for Contacting Persevere Medica";
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h3>Dear $user_name,</h3>
                <p>Thank you for reaching out to <strong>Persevere Medica</strong>. We have received your message and our team will get back to you shortly.</p>
                <p>Here is a summary of your enquiry:</p>
                <blockquote style='border-left: 5px solid #eee; padding-left: 15px; color: #555;'>
                    $user_msg
                </blockquote>
                <br>
                <p>Best Regards,</p>
                <p><strong>Persevere Medica Team</strong></p>
                <hr>
                <p style='font-size: 12px; color: #888;'>This is an automated response. Please do not reply directly to this email.</p>
            </div>
        ";
        $mail->send();

        // Redirect to thank you page
        echo "<script>window.location.href = 'thank-you.php';</script>";
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>