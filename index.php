<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
    <html>
    <head>
    <title>Patient Login</title>
    </head>
    <body>
        <h1>Patient Page</h1>

        <br>
	Hello <?php echo $user_data['name']; ?>  <br> <br>
    Age : <?php echo $user_data['age']; ?>   <br> <br>
    SSN : <?php echo $user_data['SSN']; ?>   <br> <br>
    Address : <?php echo $user_data['address'];?>   <br> <br>
    <a href="logout.php">Logout</a>

    <br> <br> <br>

    

    </body>
    </html>
