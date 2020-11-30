<?php
// Including config.php above DOCTYPE
include('includes/config.php');

// Using $_GET id
$id = $_GET['id'];

// Using SQL to get customer based on id #
$sql = "SELECT * FROM customer WHERE id='$id'";

// Using mysqli_query 
$result = mysqli_query($conn, $sql);

// Using mysqli_fetch_all for result array
$customer = mysqli_fetch_all($result, MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Customer Personal Info</title>
</head>
<body>
	<div id="wrapper-1">
    <h1>
      <?php echo $customer[0]['first_name']; ?>
      <?php echo $customer[0]['last_name']; ?>
    </h1>
    <div class="customer-info">
      <ul class="info2">
        <li><strong>Date of birth:</strong> <?php echo $customer[0]['dob']; ?></li>
        <li><strong>Driver license number:</strong> <?php echo $customer[0]['driver_license_number']; ?></li>
        <li><strong>Email address:</strong> <?php echo $customer[0]['email']; ?></li>
        <li><strong>Phone number:</strong> <?php echo $customer[0]['phone']; ?></li>
      </ul>  
    </div>
    <!-- Link back to index.php -->
    <a href="index.php"><p>Back To Customers Page<p></a>  
  </div>
</body>
</html>