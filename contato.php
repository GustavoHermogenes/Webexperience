<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$ok = 0;


if (isset($_POST['email'])) {

    //Load Composer's autoloader
    require 'mailer/Exception.php';
    require 'mailer/PHPMailer.php';
    require 'mailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'webexperience@smpsistema.com.br';                     //SMTP username
        $mail->Password   = 'Senac@agencia06';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('webexperience@smpsistema.com.br', 'Site Web Experience');
        $mail->addAddress('Webexperience.inc@gmail.com');     //Add a recipient

        //Content

        //dados do email

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $mens = $_POST['mens'];

        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Site Web Experience';
        $mail->Body    = "
    
    Nome: $nome <br>
    Email: $email <br>
    telefone: $tel <br>
    Mensagem: $mens 

    ";
        $mail->AltBody = " 

    Nome: $nome <br>
    Email: $email <br>
    telefone: $tel <br>
    Mensagem: $mens

";

        $mail->send();
        $ok = 1;
        // echo 'Mensagem enviada com sucesso';
    } catch (Exception $e) {
        $ok = 2;
        echo "Erro ao processar os dados, tente mais tarde!!! {$mail->ErrorInfo}";
    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Experience</title>

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css" />

    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="img/favicon.png" type="image/png">

    <link rel="stylesheet" href="css/contato.css ">

    <link rel="stylesheet" href="css/modal.css" />

    <link rel="stylesheet" href="css/estilo.css ">


</head>

<body>

    <?php require_once('conteudo/topo.php'); ?>

    <main>

        <section id="criarconosco" class="site">

            <div>

                <h2>Porque criar conosco?</h2>

                <p>Você já pensou em um site? Criar um site é uma nova forma de apresentar sua vitrine física ao virtual aumentando a percepção de valor para os seus produtos e serviços.</p>

            </div>

            <img src="img/img.jfif" alt="">


        </section>

        <section class="form">

            <div class="site">

                <h2>formulário de contato</h2>

                <div>

                    <form action="#" method="POST" id="formContato">

                        <div>

                            <input type="text" name="nome" placeholder="informe seu nome" id="nome">

                            <input type="email" name="email" id="email" required placeholder="informe seu email">

                            <input type="tel" name="tel" id="tel" placeholder="informe seu telefone">
                            aos
                        </div>


                        <div>

                            <textarea style="resize:none" name="mens" id="mens" cols="30" rows="10" placeholder="informe sua mensagem"></textarea>

                            <h3>
                                <?php

                                if ($ok == 1) {
                                    echo $nome . ", sua mensagem foi enviada com sucesso!!!";
                                } elseif ($ok == 2) {
                                    echo $nome . ", erro ao enviar sua mensagem. Tente mais tarde!!!";
                                }

                                ?>
                            </h3>

                            <div>
                                <input type="submit" value="enviar via e-mail">
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </section>



    </main>

    <footer>

        <?php require_once('conteudo/rodape.php') ?>
        <?php require_once('conteudo/direitosReservados.php') ?>


    </footer>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="js/slick.js"></script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://kit.fontawesome.com/f0e19193d6.js" crossorigin="anonymous"></script>

    <script src="js/animacoes.js"></script>

</body>

</html>