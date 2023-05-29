<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name = $_POST['name'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$password = $_POST['password'];

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{

			
			$SSN = random_num(5);
			$query = "insert into users (SSN,name,address,age,password) values ('$SSN','$name','$address','$age','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>



<DOCTYPE! html>
    <html>
        <head>
            <title>Signup</title>
        </head>
        <body>

            <div>
                <form method="post">
				<h1>Signup</h1>
                <p>Name :</p><input id="text" type="text" name="name"><br><br>
                <p>Address :</p><input id="text" type="text" name="address"><br><br>
                <p>Age :</p><input id="text" type="text" name="age"><br><br>
                <p>Password :</p><input id="text" type="password" name="password"><br><br>

			    <input id="button" type="submit" value="Signup"><br><br>

			    <a href="login.php">Click to Login</a><br><br>

                </form>
            </div>
        </body>
    </html>