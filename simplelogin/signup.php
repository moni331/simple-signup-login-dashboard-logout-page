<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
                $last_name= $_POST['last_name'];
                $email= $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,first_name,last_name,email,password) values ('$user_id','$first_name','$last_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
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
        height: 400px;
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
    <h1>Signup Form</h1>
    <div class="container">
    <form  method="post">
    <label for="username">Firstname</label>
    <input type="text" name="first_name" placeholder="John" required ><br><br>

    <label for="username">Lastname</label>
    <input type="text" name="last_name" placeholder="Roy" required ><br><br>

    <label for="username">Email</label>
    <input type="text" name="email" placeholder="Roy@gmail.com" required ><br><br>

    <label for="Password">Password</label>
    <input type="password" name="password" placeholder="Enter your password" required ><br><br>
    <button type="submit" name="signup">Signup</button>
    <p>Already Have An Accont?<br></b><a href="login.php">Click to Login</a></p>
    </form>
    </div>

</body>
</html>
</body>
</html>