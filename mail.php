<?php

if (isset($_POST['submit'])) {


    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $via = $_POST['via'];
}

// definisco mittente e destinatario della mail
// Recupero dati da un possibile form contatti



$mail_headers = "From: " .  $nome .$cognome. " da " .$via ."<" .  $email . ">\r\n";
$mail_headers .= "Reply-To: " .  $email . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion();
$destinatario = "vinci.loca1@gmail.com"; 
$oggetto = "email"; 
$messaggio = "Ecco la mia prima email";  
if(mail($destinatario, $oggetto, $message, $mail_headers))
{
    echo "messaggio inviato corretamente";
        ?>
<script>alert("Messaggio inviato correttamente.Riceverà risposte al piu presto")</script><?php
}
else
    
    {?>

       <script>window.alert("Errore! Riprova")</script><?php
}
    
?>
 
