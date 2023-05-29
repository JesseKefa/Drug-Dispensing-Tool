<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	
		$name = $_POST['name'];
		$password = $_POST['password'];

		if(!empty($name) && !empty($password) && !is_numeric($name))
		{

		
			$query = "select * from users where name = '$name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['SSN'] = $user_data['SSN'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	


	<div id="box">
		
		<form method="post">
			<h1>Login</h1>

			<p>Name :</p><input id="text" type="text" name="name"><br><br>
			<p>Password :</p><input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>