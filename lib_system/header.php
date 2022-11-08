<?php 
session_start();

	include("includes/connection.php");
	include("includes/functions.php");

	$user_data = check_login($con);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <img src="assets/img/usiu-logo.png" alt="logo">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="eresources.php">E-resoucres</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <div class="loginDetails">
            <div class="loggedIn"  onclick="logoutOptionToggler()">
                <img class="userImg" src="assets/img/user-icon.png" alt="" >
                <p id="userName"> <?php echo $user_data['user_name']; ?> </p>

                <div class="logoutOptions innactive">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="body-wrapper">
