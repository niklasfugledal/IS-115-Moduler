<?php

if(isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "niklasfugledal@live.no";
    $headers = "From: ".$mailFrom;
    $txt = "Du har motatt en mail fra ".$name. " . \n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: Oppgave1.php?mailsend");

}






?>