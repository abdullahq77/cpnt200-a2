<?php
// Including config.php above DOCTYPE
include('includes/config.php');

// Using SQL and mysqli_query() to retrieve customers array  
$sql = "SELECT * FROM customer";

$result = mysqli_query($conn, $sql);

// Using mysqli_fetch_all() 
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Customers Basic Info</title>
</head>
<body>
	<div id="wrapper">
    <h1>Customers</h1>
    <!-- Using foreach loop -->
    <?php foreach($customers as $customer) {?>
      <div class="customers">
        <!-- Link back to customer.php -->
        <a href="customer.php?id=<?php echo $customer['id']; ?>">
          <span><strong>Name:</strong> <?php echo $customer['last_name']; ?></span>
          <span><?php echo $customer['first_name']; ?></span> 
        </a>
        <p><strong>Phone Number:</strong> <?php echo $customer['phone']; ?> </p>
        <p><strong>Email:</strong> <?php echo $customer['email']; ?> </p>
      </div>        
  </div>
  <?php } ?>
</body>
</html>