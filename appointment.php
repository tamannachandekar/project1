<?php

include("connection.php");

?>

<!DOCTYPE html
<html lang="en">
<head>
    <title>appointment</title>
    <link rel="stylesheet" href="./css/appointment.css" class="css">
</head>
<body>
<div>
    <div class="navbar">
            <a href="./admin.php">Dashboard</a>
            <a href="./appointment.php">Appointment request</a>
            <a href="./patient.html">Patient</a>
            <a href="#">Profile</a>
        </div>
    <div class="container">
        <h1> Appointment Request</h1> 
        <?php
        $query='SELECT name,email FROM user
                WHERE role=2
                ORDER BY name';
        $result=mysqli_query($conn,$query);
        $check_user=mysqli_num_rows($result)>0;

        if($check_user)
        {
            while($record=mysqli_fetch_assoc($result))
            {
                ?>
                <?php echo'<hr>'; ?> 
                <div class="title">
                    <div class="line1"></div><img src="https://via.placeholder.com/50" class="avatar"><?php echo'<h2>'.$record['name']; '</h2>' ?></h2></div>     
                    <div class="line2"></div><h2><?php echo '<h2>'.$record['email'];'</h2>' ?></h2></div>
                </div>                
                    <div> <span class="tag patient">Patient</span></div>
                    <?php echo'<br>'; ?>
                    <button class="btn btn-success">view details</button>
                    <?php   
            }
        }
        ?>   
</body>    
</html>