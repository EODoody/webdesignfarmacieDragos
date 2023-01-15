<?php

if(isset($_POST["submit"]))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat_password"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";

    $signup = new SignupController($firstname, $lastname, $email, $password, $repeat_password);

    $signup->signupUser();

    header("Location: ../pagini/paginaprincipala.php?error=none");
}