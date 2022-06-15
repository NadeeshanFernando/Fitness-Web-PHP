<?php
error_reporting(0);
session_start();
require '../Connection/connection.php';

// Add products into the cart table
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$code = $_POST['code'];
	$qty = $_POST['qty'];
	$total_price = $price * $qty;

	$stmt = $con->prepare('SELECT name FROM cart WHERE name=?');
	$stmt->bind_param('s', $name);
	$stmt->execute();
	$res = $stmt->get_result();
	$r = $res->fetch_assoc();
	$newname = $r['name'] ?? '';

	// echo '*name: ' . $name . ' ';
	// echo '*new name: ' . $newname;

	// // // echo $code;
	if (!$newname) {

		$query = $con->prepare('INSERT INTO cart (name,price,image,qty,total_price,code) VALUES (?,?,?,?,?,?)');
		$query->bind_param('sssiss', $name, $price, $image, $qty, $total_price, $code);
		$query->execute();

		// echo $code;
		echo '<div class="alert alert-success alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item added to your cart!</strong>
						</div>';
	} else {
		// echo $code;
		echo '<div class="alert alert-danger alert-dismissible mt-2">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <strong>Item already added to your cart! </strong>
						</div>';
	}
}

// Get no.of items available in the cart table
if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
	$stmt = $con->prepare('SELECT * FROM cart');
	$stmt->execute();
	$stmt->store_result();
	$rows = $stmt->num_rows;

	echo $rows;
}

// Remove single items from cart
if (isset($_GET['remove'])) {
	$id = $_GET['remove'];

	$stmt = $con->prepare('DELETE FROM cart WHERE id=?');
	$stmt->bind_param('i', $id);
	$stmt->execute();

	$_SESSION['showAlert'] = 'block';
	$_SESSION['message'] = 'Item removed from the cart!';
	header('location:cart.php');
}

// Remove all items at once from cart
if (isset($_GET['clear'])) {
	$stmt = $con->prepare('DELETE FROM cart');
	$stmt->execute();
	$_SESSION['showAlert'] = 'block';
	$_SESSION['message'] = 'All Item removed from the cart!';
	header('location:cart.php');
}

// Set total price of the product in the cart table
if (isset($_POST['qty'])) {
	$qty = $_POST['qty'];
	$id = $_POST['id'];
	$price = $_POST['price'];

	$tprice = $qty * $price;

	$stmt = $con->prepare('UPDATE cart SET qty=?, total_price=? WHERE id=?');
	$stmt->bind_param('isi', $qty, $tprice, $id);
	$stmt->execute();
}

// Checkout and save customer info in the orders table
if (isset($_POST['action']) && isset($_POST['action']) == 'order') {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$products = $_POST['products'];
	$grand_total  = $_POST['grand_total'];
	$address = $_POST['address'];
	$pmode = $_POST['pmode'];
	// $code = $_POST['code'];

	$data = '';
	$sql1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT DISTINCT code FROM cart"));
	$code = $sql1['code'];
	// echo $code;

	$stmt = $con->prepare('INSERT INTO orders (name,email,phone,address,pmode,code,products,amount_paid)VALUES(?,?,?,?,?,?,?,?)');
	$stmt->bind_param('ssssssss', $name, $email, $phone, $address, $pmode, $code, $products, $grand_total);
	$stmt->execute();

	$data .= '<div class="text-center">

								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								<h4>Your Phone : ' . $phone . '</h4>
								<h4>Total Amount Paid : ' . number_format($grand_total, 2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	echo $data;
	$stmt2 = $con->prepare('DELETE FROM cart');
	$stmt2->execute();
}
