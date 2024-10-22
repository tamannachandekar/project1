<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup_form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                    <h2 class="logo">REHAB</h2>
            </div>
                <div class="menu">
                    <ul>
                        <li><a href="./home.php">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="./index.php">SIGN.IN</a></li>
                    </ul>
                </div>
        </div>
        <div class="content">
            <div class="form">
                <h2>Sign Up</h2>
                <form action="indexdata.php" method="post">
                    <div class="inputBox">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="email" name="email" placeholder="Enter your email">
                    <input type="password" name="password" placeholder="Enter your password">
                    </div>
                    <div class="inputBox2">
                    <select name="level" id="" name="usertype">
                    <option value="1">Consultant</option>
                    <option value="2">Patient</option>
                    </select>
                    </div>

                    <div class="login">
                        <a href="./home.html"> Already have account? login</a>
                    </div>
                <div class="submitbutton">
                <input type="Submit" value="Submit" name="signButton">
                </div>  
                </form>
            </div>
        </div>
    </div>
</body>
</html>