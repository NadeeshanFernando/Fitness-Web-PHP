<?php
session_start();
error_reporting(0);
include '../Connection/connection.php';
$id = $_SESSION['id'];
$code = $_GET['code'];

// echo $code;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

  <title>PHPJabbers.com | Free Restaurant Website Template</title>

  <link rel="stylesheet" type="text/css" href="../Home/assets/css/bootstrap.min.css" />
  <!-- <link rel="stylesheet" type="text/css" href="./assets1/bootstrap.min.css"> -->

  <link rel="stylesheet" type="text/css" href="../Home/assets/css/font-awesome.css" />

  <link rel="stylesheet" href="../Home/assets/css/style.css" />
</head>

<body>


  <!-- * Header Area Start * -->
  <div>
    <?php include('../Customer/navigation.php'); ?>
  </div>
  <!-- * Header Area End * -->

  <!-- * Call to Action Start * -->
  <section class="section section-bg" id="call-to-action" style="background-image: url(../Home/assets/images/allShop.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br />
            <br />
            <h2><?php

                $sql1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM products WHERE code= '$code' "));
                echo $sql1['restuarantName'] ?> <em>Our Products</em></h2>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- * Call to Action End * -->
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">



    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../cart/checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart/cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
      $stmt = $con->prepare("SELECT * FROM products WHERE code='$code' ");
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) :
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
            <div class="card p-2 border-secondary mb-2">
              <img src="./assets1/productItem/<?= $row['image'] ?>" class="card-img-top" height="250">
              <div class="card-body p-1">
                <h4 class="card-title text-center text-info"><?= $row['name'] ?></h4>
                <h5 class="card-text text-center text-danger"><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;<?= number_format($row['price'], 2) ?>/-</h5>

              </div>
              <div class="card-footer p-1">
                <form action="" class="form-submit">
                  <div class="row p-2">
                    <div class="col-md-6 py-1 pl-4">
                      <b>Quantity : </b>
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control qty" value="1" min="1">
                    </div>
                  </div>
                  <input type="hidden" class="id" value="<?= $row['id'] ?>">
                  <input type="hidden" class="name" value="<?= $row['name'] ?>">
                  <input type="hidden" class="price" value="<?= $row['price'] ?>">
                  <input type="hidden" class="image" value="<?= $row['image'] ?>">
                  <input type="hidden" class="code" value="<?= $code ?>">
                  <button class="btn btn-success btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                    cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  
  <div>
    <?php include('../Home/footer.php'); ?>
  </div>

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>
  <script src="assets/js/mixitup.js"></script>
  <script src="assets/js/accordions.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>
</body>

</html>

<script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {

      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var id = $form.find(".id").val();
      var name = $form.find(".name").val();
      var price = $form.find(".price").val();
      var image = $form.find(".image").val();
      var code = $form.find(".code").val();
      // alert(code)

      var qty = $form.find(".qty").val();

      $.ajax({
        url: '../cart/action.php',
        method: 'post',
        data: {
          id: id,
          name: name,
          price: price,
          qty: qty,
          image: image,
          code: code
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: '../cart/action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
</script>