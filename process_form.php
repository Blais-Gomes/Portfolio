<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['emailaddress']);
    $subject = htmlspecialchars($_POST['subject']);

    
    $to = "blaisgomesjob@gmail.com";

    // LE SUJET
    $email_subject = "Nouveau message de $name";

    // LE CORPS BASE DU MAIL
    $email_body = "Vous avez reçu un nouveau message.\n\n".
                  "Nom: $name\n".
                  "Email: $email\n".
                  "Sujet: $subject";

    // TITRE???
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

   // MESSAGE DE CONFIRMATION si ENVOYé ou PAS
    if(mail($to, $email_subject, $email_body, $headers)) {
        echo "Le message a été envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
