<?php 

session_start();

include("includes/connection.php");
include("includes/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
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
	<link rel="stylesheet" href="assets/css/fonts.css">

<style type="text/css">
	
	.login-container{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
	}



.box{
    border-radius: 15px ;
    width: 470px;
    height: 645px;
    border: solid 1px #3f3f3f;
    background-color: white;	
}

.box form{
	width: 100%;
	height: 100%;
	padding: 50px 80px 0 80px;
}

.box h1{
	font-family: inter;
	font-size: 28;
	font-weight:400;
	margin-bottom: 50px;
	margin-left: ;
}

.box form p{
	font-size:15 ;
	font-family:inter ;
	font-weight: 400;
	margin-bottom: 0;
}

.box form input{
	width: 315px;
	height: 85px;
	background-color: #f8f8f8; 
	border: none;
	border-bottom: #494949 1px solid;
	outline: none;
}

.button-holder{
	font-family: Inter;
	width: 185px;
	height: 60px;
	background-color: #016293;
	cursor: pointer;
	border-radius: 126px;
	margin-top: 20px;
	overflow: hidden;
	cursor: pointer;
}

#button{
	width: 100%;
	height: 100%;
	background: none;
	outline: none;
	color: white;
	font-size:21px;
	font-family:inter ;
	letter-spacing: 0.04em;
	font-weight: 400;
	cursor: pointer;
}




	</style>
</head>
<body>

	<div class="login-container">
	<div class="box" id="box">		
		<form method="post">
			<h1>LOGIN</h1>
				<p>Username</p>
				<input id="text" type="text" name="user_name" placeholder="Type your Username..">
				<p>Password</p>
				<input id="text" type="password" name="password" placeholder="Type your Password..">
			<div class="button-holder"><input id="button" type="submit" value="LOGIN"></div>
		</form>
	</div>
	</div>
</body>
</html>