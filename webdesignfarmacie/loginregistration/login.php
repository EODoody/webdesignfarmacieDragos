<?php
readfile('../headerfooter/header.php');
?>

<form action="../includes/login.inc.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="submit" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="inregistrare.php">Register Here</a></p></div>
</div>

<?php
  readfile('../headerfooter/footer.html');
?>