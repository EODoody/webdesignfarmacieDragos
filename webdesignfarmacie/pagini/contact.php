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
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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