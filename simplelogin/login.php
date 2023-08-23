<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong email or password!";
		}else
		{
			echo "User not found";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
    body{
        background-image: url("bg-01.jpg");
    }
    .container {
        width: 300px;
        height: 300px;
        margin: 0 auto;
        padding: 35px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #f2f2f2;

}

h1 {
        text-align: center;
}



label {
        display: block;
        margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;

        
}

button[type="submit"] {
        width: 100%;
        padding: 8px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

button[type="submit"]:hover {
        background-color: #45a049;
}

p {
        text-align: center;
        margin-top: 10px;
}
.hello{
    background-size: cover;
}
</style>

</head>
<body class="hello">
    <h1>Login Form</h1>
    <div class="container">
    <form  method="post">

			<label for="username">Email</label>
    		<input type="text" name="email" placeholder="Roy@gmail.com" required ><br><br>

			<label for="Password">Password</label>
    		<input type="password" name="password" placeholder="Enter your password" required ><br><br>
			<button type="submit" name="signup">Login</button>
			<p>You Don't Have An Accont?<br></b><a href="signup.php">Click to Signup</a></p>
			
    </form>
    </div>

</body>
</html>
</body>
</html>