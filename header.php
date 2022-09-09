<!DOCTYPE html>
<html>



<head>
	<title> online medicine shop</title>

	<!-- link boostrap-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<!--link css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all_medicine_displaystyle.css">
	<!-- javascript link-->

	<script type="text/javascript" src="js/main.js"> </script>


</head>



<body>

	<?php include("common/connection.php"); ?>


	<?php


?>

	<div id="hd">

		<h1> Online Medicine Shop</h1>

	</div>



	<div id="header">
		<ul class="header_list">
			<li> <a href="index.php">HOME</a></li>
			<li> <a href="about.php">ABOUT US</a></li>
			<li> <a href="product.php">Product</a></li>

			<li> <a href="faq.php">FAQ</a></li>

			<li> <a href="contact.php">CONTACT US</a></li>

			<li> <a href="wordpress">BLOG</a></li>
			<li> <a href="Order.php">ORDER</a></li>

			<?php if (login_check($conn) == true && $_SESSION['user_type'] == 'admin') { ?>
			<li> <a href="all_order.php">All Orders</a></li>
			<li> <a href="add_medicine.php"> ADD MEDICINE</a></li>
			<li><a href="all_medicine.php"> All medicine</a></li>
			<li style="float:right;"> <a href="all_user.php">All User</a></li>

			<?php
}?>




			<?php if (login_check($conn) == false) { ?>
			<li style="float: right;"><a href="registration.php">REGISTRATION</a></li>
			<li style="float: right;"><a href="login.php">LOGIN</a></li>
			<?php
}
else { ?>
			<li style="float: right;"><a href="logout.php">Logout</a></li>
			<?php
}?>
		</ul>


	</div>


	<?php
function login_check($conn)
{
	$username = "";
	$password = "";

	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
	}
	$sql = "select * from registration_form where user_name='$username' and password='$password' ";

	$result = $conn->query($sql);
	if ($result->num_rows > 0)
		return true;
	else
		return false;
}
?>