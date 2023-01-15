<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../pagini/paginaprincipala.php">Farmacia Dr. Agos</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="../pagini/paginaprincipala">Acasa</a></li>
                <li><a href="../pagini/medicamente">Medicamente</a></li>
                <li><a href="../pagini/desprenoi">Despre noi</a></li>
                <li><a href="../pagini/contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION["IDUser"])){
                ?>
                    <li><a href="#"><?php echo $_SESSION["IDUser"]; ?></a></li>
                    <li><a href="../includes/logout.inc.php">Log out</a></li>
                <?php
                }
                else
                {
                ?>
                    <li><a href="../loginregistration/inregistrare.php">Register</a></li>
                    <li><a href="../loginregistration/login.php">LOGIN</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

<div class="banner">
     <img src="../imagini/bannerFarmacie.png" alt="Banner Image">
    <div class="banner-text">
    </div>
</div>