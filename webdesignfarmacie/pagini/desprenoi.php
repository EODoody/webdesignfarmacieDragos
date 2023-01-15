<?php
  readfile('../headerfooter/header.php');
  session_start();
  if (!isset($_SESSION["IDUser"])) {
     header("Location: ../loginregistration/login.php");
  }
?>

    <div class="container">
        <h2>Despre farmacia Dr.Agos</h2>
        <p>Farmacia noastră este dedicată oferirii de produse și servicii de înaltă calitate clienților noștri. Am fost
            deservim comunitatea de peste 20 de ani, iar personalul nostru este foarte instruit și experimentat.</p>
        <p>Oferim o gama larga
            de produse, inclusiv medicamente eliberate pe bază de rețetă, medicamente fără prescripție medicală, vitamine, suplimente și sănătate
            și produse de înfrumusețare. Serviciile noastre includ completarea rețetelor, consiliere privind medicamentele și vaccinare. </p>
        <p>La farmacia noastră, satisfacția clienților este prioritatea noastră principală. Ne străduim să oferim servicii personalizate și
            sfaturi de specialitate pentru a vă ajuta să vă gestionați sănătatea și bunăstarea.</p>
        <p>Acceptăm majoritatea planurilor de asigurare și oferim prețuri competitive. Avem, de asemenea, un program de fidelitate și regulat
            promoții pentru a vă ajuta să economisiți la achizițiile dvs. </p>
        <p>Vizitați-ne astăzi și experimentați diferența dintre serviciile noastre prietenoase, profesionale și eficiente.</p>
    </div>
<?php
  readfile('../headerfooter/footer.html');
?>