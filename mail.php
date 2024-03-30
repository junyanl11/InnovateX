<?php

$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

$recipient = "anlioubusiness@gmail.com";
$sujet = "Nouveau message de $nom";

$mailheader = "Reply-To: $nom <$email>\r\n";

$message_complet = "Nom: $nom\n";
$message_complet .= "Email: $email\n";
$message_complet .= "Message:\n$message";

// Envoi du mail
if (mail($recipient, $sujet, $message_complet, $mailheader)) {
    echo '
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
        <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
            <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        </div>
    </body>
    </html>';
} else {
    echo "Error!";
}
?>
