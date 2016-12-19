<?php
// controleren of het formulier überhaupt is ingevuld
if(!isset($_POST['submit']))
{
    echo "Error, u moet eerst het formulier invullen!";
}
$naam  = $_POST['naam'];
$email  = $_POST['email'];
$bericht  = $_POST['bericht'];

// valideren of er iets is ingevuld
if (empty($naam) || empty($email) || empty($bericht))
{
    echo "Vergeet niet uw naam, email of bericht in te vullen!";
    exit;
}

$email_from = "info@mambofotografie.nl";
$email_subject = "Nieuw bericht na invullen formulier";
$email_body = "U heeft een nieuw bericht van $naam.\n".
    "email adres: $email.\n".
    "Bericht: \n $bericht".

    $to ="info@mambofotografie.nl";
    $headers = "Van email: $email_from \r\n";

// verzend de email
mail($to,$email_subject,$email_body,$headers);
