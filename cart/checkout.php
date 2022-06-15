<?php
session_start();
// error_reporting(0);
require '../Connection/connection.php';

$id = $_SESSION['id'];

$cid = $_SESSION['id'];
if ($id == 0) {
  header('location: ../Home/');
} else {

$cudetails = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id='$cid'" )) ;
// $code = $_GET['code'];

$grand_total = 0;
$allItems = '';
$items = [];

$sql = "SELECT CONCAT(name, '(',qty,')') AS ItemQty, total_price FROM cart";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
  $grand_total += $row['total_price'];
  $items[] = $row['ItemQty'];
}
$allItems = implode(', ', $items);
}
?>


<!-- <?php

      // require '../Connection/connection.php';

      // $sql1 = "SELECT * FROM cart";
      // $RES1 = mysqli_query($con, $sql1);
      // $result1 = mysqli_fetch_assoc($RES1);
      // $cartname = $result1['name'];

      // $sql2 = "SELECT DISTINCT code FROM cart";
      // $RES2 = mysqli_query($con, $sql2);
      // $result2 = mysqli_fetch_assoc($RES2);
      // $cartcode = $result2['price'];

      ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->

    <!-- Toggler/collapsibe Button -->
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="./checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total, 2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" value="<?php echo $cudetails['fname'].' '.$cudetails['lname'] ?>" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" value="<?php echo $cudetails['email']?>" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" value="<?php echo $cudetails['telephone']?>" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Mode</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="CashOfDelivery">Cash On Delivery</option>
              <option value="OnlinePayment">Online Payment</option>
              <option value="CardOnDelivery">Debit/Credit Card on Delivery </option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-success btn-block">
          </div>

        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // alert($code);
      // Sending Form data to the server
      $("#placeOrder").submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: './action.php',
          method: 'post',
          data: $('form').serialize() + "&action=order",
          success: function(response) {
            $("#order").html(response);

          }

        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: './action.php',
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
</body>

</html>