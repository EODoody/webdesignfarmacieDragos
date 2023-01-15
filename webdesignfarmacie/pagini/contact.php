<?php
  readfile('../headerfooter/header.php');
  session_start();
  if (!isset($_SESSION["IDUser"])) {
     header("Location: ../loginregistration/login.php");
  }
?>

  </div>
    <div class="container">
        <h2>Contacteaza-ne:</h2>
        <form action="../includes/contact.inc.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="test" class="form-control" name="message" placeholder="Message:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Submit Message" name="submit">
            </div>
        </form>
        <div class="contact-info">
            <h3>Informatii de contact</h3>
            <p>Address: Strada Universitatii Nr 1</p>
            <p>Phone: +40 747579981</p>
            <p>Email: dragospharmacy@gmail.com</p>
        </div>
    </div>

<?php
  readfile('../headerfooter/footer.html');
?>