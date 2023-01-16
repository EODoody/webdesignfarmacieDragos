<?php
  readfile('../headerfooter/header.php');

  session_start();
  if (!isset($_SESSION["IDUser"])) {
     header("Location: ../loginregistration/login.php");
  }
  ?>

<div class="container">
  <div class="slideshow">
    <div class="slide">
      <img src="../imagini/fervex.jpg" alt="Slideshow Image 1">
    </div>
    <div class="slide">
      <img src="../imagini/coldrex.jpg" alt="Slideshow Image 2">
    </div>
    <div class="slide">
      <img src="../imagini/fervex.jpg" alt="Slideshow Image 3">
    </div>
  </div>
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("slide");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 3000);
    }
  </script>

<h1>Bun venit la farmacia Dr. Agos</h1>
<h2>Farmacia cu cele mai mici preturi din Romania.</h2>
<h2>In aceasta farmacie vei gasi toate medicamentele de care vei avea nevoie pentru problemele tale</h2>
<table class="table">
  <tr>
    <th>Orase in care suntem prezenti : </th>
    <th>Adresa : </th>
  </tr>
  <tr>
    <td>Brasov</td>
    <td>Strada Nicolae Iorga 20</td>
  </tr>
  <tr>
    <td>Bucuresti</td>
    <td>Bulevarul Victoriei 5</td>
  </tr>
  <tr>
    <td>Timisoara</td>
    <td>Strada 1 Decembrie 1918 5</td>
  </tr>
</table>
</div>

<?php
  readfile('../headerfooter/footer.html');
?>
