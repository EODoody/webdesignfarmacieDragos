<?php
readfile('../headerfooter/header.php');
session_start();
if (!isset($_SESSION["IDUser"])) {
    header("Location: ../loginregistration/login.php");
}
?>
<div class="container">
    <h1>Medicamentele noastre:</h1>
            <?php
        require_once '../classes/medicamente-controller.classes.php';

        foreach ($medicamente as $row) {
            ob_start();

            echo '<div class="col-sm-4">';
            echo '<br style= "margin-bottom: 1%">';
            echo '<div class="card">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['Imagine']) . '" class="img-thumbnail" alt="image">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["Medicament"] . '</h5>';
            echo '<p class="card-text">' . $row["pret"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            ob_end_flush();
        }
    ?>

<?php
readfile('../headerfooter/footer.html');
?>