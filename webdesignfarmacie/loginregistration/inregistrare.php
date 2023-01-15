<?php
readfile('../headerfooter/header.php');
?>

<form action="../includes/signup.inc.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="firstname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lastname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>

<?php
  readfile('../headerfooter/footer.html');
?>