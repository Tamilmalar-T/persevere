<?php
error_reporting(0);

    use PHPMailer\PHPMailer\PHPMailer;   
    use PHPMailer\PHPMailer\Exception;

    
    if(!empty($_POST['name'])){
        
        $errors= array();
        $file_name = $_FILES['attachment']['name'];
        $file_size = $_FILES['attachment']['size'];
        $file_tmp = $_FILES['attachment']['tmp_name'];
        $file_type = $_FILES['attachment']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['attachment']['name'])));
       
        $allowed = array('pdf', 'doc');
        
        if (!in_array($file_ext, $allowed)) {
            echo '<script language="javascript">';
            echo 'alert("File Extension not allowed, please choose a DOC or PDF file.")';
            echo '</script>';
            echo '<script>';
            echo "window.location.href = 'careers.php'";
            echo '</script>';
           die();
        }
        // $expensions= array("doc","pdf");
        
        // if(in_array($file_ext,$expensions)=== false){
        //     $errors[]="Extension not allowed, please choose a DOC or PDF file.";
        // }
        
        // if(empty($errors)==true) {
        //     move_uploaded_file($file_tmp,"uploads/".$file_name); //The folder where you would like your file to be saved
        //     echo "Success";
        // }else{
        //     print_r($errors);
        // }
   

        // PHPMailer script below

        $email = $_POST['email'] ;
        $name = $_POST['name'] ;
        $phone = $_POST['phone'] ;
        $job = $_POST['job'] ;
        $message = $_POST['message'] ;
    
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        require_once "PHPMailer/PHPMailerAutoload.php";
// print_r($_POST);
//         die();
        $site_name = "Persevere Medica";
        $from_email = "perseveremedica@gmail.com"; 
        $password = "kzuw ubhd ynww ykuy"; 

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true; 

        $mail->Username = $from_email;
        $mail->Password = $password;
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 

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
        $mail->addAttachment($file_tmp, $file_name);
        $mail->Subject = "Job Application: $job from $name";
        $mail->Body ="
            <h1>Job Application Details</h1>
            <p><b>Name:</b> $name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Job Title:</b> $job</p>
            <p><b>Message:</b><br>$message</p>
        ";
        $mail->send();

        // 2. Send Confirmation Email to User
        $mail->clearAddresses();
        $mail->clearAttachments();
        $mail->addAddress($email);
        $mail->Subject = "Application Received: $site_name";
        $mail->Body = "
            <h1>Dear $name,</h1>
            <p>Thank you for applying for the <b>$job</b> position at Persevere Medica. We have received your application and resume.</p>
            <p>Our HR team will review your profile and get back to you if your qualifications match our requirements.</p>
            <br>
            <p>Best Regards,<br>HR Team, Persevere Medica</p>
        ";

        if(!$mail->Send())
        {
            echo "Message could not be sent. <p>";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }

        echo "<script>alert('Message has been sent')
                window.location.href = 'careers.php'
        </script>";

    }else{
        echo "<script>
            alert('Please enter all fields')
            window.location.href = 'careers.php'
            </script>";
    }   
?>