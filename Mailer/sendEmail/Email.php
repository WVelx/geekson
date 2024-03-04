<?php 

include ("../Mailer/PHPMailer-master/src/PHPMailer.php");
include ("../Mailer/PHPMailer-master/src/Exception.php");
include ("../Mailer/PHPMailer-master/src/SMTP.php");


try {

    $emailTo = "fundacionfunamu@gmail.com";
    $name = $_POST["name"];
    $cel = $_POST["number"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $fromemail = "fundacionfunamu@gmail.com";
    $password = "hruz wtfi rani wghe";
    $fromname = "FUNAMU";
    $host ="smtp.gmail.com";
    $port = "465";
    $SMTPAuth = "login";
    $SMTPSecure = "ssl";
    

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();   
   
    $mail->SMTPDebug = 0;                      
    $mail->Host       = $host;  
    $mail->Port       = $port;                       
    $mail->SMTPAuth   = $SMTPAuth;                 
    $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;             
    $mail->Username   = $fromemail;                    
    $mail->Password   = $password;    
    
    $mail->setFrom($fromemail,$fromname);
    $mail->addAddress($emailTo);

    $mail->CharSet = 'UTF-8';
    $mail->WordWrap = 50; 
    $mail->isHTML(true);
    $mail->Subject = $subject;
   
    $mail->Body = 
    '<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>

        <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        .container {
            position: relative;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #000000; 
        }

        h1 {
            color: #000000;
            text-align:center;
        }

        p {
            color: #000000;
        }
        </style>

    </head>
    <body>
        <div class="container" >
        <h1>MENSAJE FUNDACIÓN FUNAMU</h1>
    
        <p>Se ha recibido un mensaje a traves del sitio web de la Fundación FUNAMU</p>
    
        <ul>
            <li><strong>Nombre:</strong> '. $name .'</li>
            <li><strong>Celular:</strong> '. $cel .'</li>
            <li><strong>Correo Electronico:</strong> '. $email .'</li>
            <li><strong>Asunto:</strong> '.$subject.'</li>
            <li><strong>Mensaje:</strong> '. $message.'</li>
        </ul>
        </div>
    </body>
    </html>';

   if($mail->send()){
    echo 'SE ENVIO CORREO :D';
   }else{
    echo 'ERROR:'. $mail->ErrorInfo;
   }

   
    ?>
    <script>
        window.location.replace("../contact.php");
    </script>
    <?php
    exit();

} catch (Exception $e) {

}

?>