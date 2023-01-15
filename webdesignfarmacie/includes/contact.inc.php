<?php

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    include "../classes/dbh.classes.php";
    include "../classes/contact.classes.php";
    include "../classes/contact-controller.classes.php";

    $login = new ContactController($name, $email, $message);

    $login->postContact();

    header("Location: ../pagini/contact.php?error=none");
}