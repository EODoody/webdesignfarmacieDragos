<?php
  readfile('../headerfooter/header.php');
  session_start();
  if (!isset($_SESSION["IDUser"])) {
     header("Location: ../loginregistration/login.php");
  }
?>

        <div class="container">
            <h1>Medicamentele noastre:</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product1.jpg" alt="Product 1" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 1</h4>
                            <p class="card-text">Description of product 1</p>
                            <p class="card-text">Price:$10</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product2.jpg" alt="Product 2" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 2</h4>
                            <p class="card-text">Description of product 2</p>
                            <p class="card-text">Price: $15</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product4.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product5.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product6.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product7.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product8.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product9.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img src="product3.jpg" alt="Product 3" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Description of product 3</p>
                            <p class="card-text">Price: $20</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
  readfile('../headerfooter/footer.html');
?>