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
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 3;  //Keep It commented this is used for debugging   
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true; 

        $mail->Username = "admin@Demo.in"; // SMTP username
        // $mail->Password = "vqblidpawrjavnqs"; // SMTP password
        // $mail->Password = "opsyphcynktdljuc"; // SMTP password
        $mail->Password = "lprm izwz jnwr jfja"; //"pfue besg mqlo effk";
        $mail->addAttachment($file_tmp,$file_name);
        $mail->From = $email;
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; //SMTP port
        $mail->addAddress("admin@Demo.in", "Career");
        $mail->Subject = "You have an email from a Career!";
        $mail->Body ="
        Name: $name<br>
        Email: $email<br>
        Phone: $phone<br>
        Job: $Job<br>
        Message: $message";
        $mail->AltBody = $message;
        
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