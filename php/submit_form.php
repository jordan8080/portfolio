<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $subscribe = isset($_POST['subscribe']) ? 'Oui' : 'Non';


    $to = 'moritzjordan6@gmail.com';

    $email_subject = "Nouveau message de contact - $subject";

    $email_body = "Vous avez reçu un nouveau message de contact :\n\n";
    $email_body .= "Nom complet : $name\n";
    $email_body .= "Adresse e-mail : $email\n";
    $email_body .= "Numéro de téléphone : $phone\n";
    $email_body .= "Sujet : $subject\n";
    $email_body .= "Message :\n$message\n";
    $email_body .= "Inscription à la newsletter : $subscribe";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Votre message a été envoyé avec succès.');</script>";
    } else {
        echo "<script>alert('Une erreur s'est produite lors de l'envoi du message.');</script>";
    }
    echo "<script>window.location.href = '../html/contact.html';</script>";
    exit;
} else {
    header("Location: ../html/contact.html");
    exit;
}
