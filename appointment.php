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
            <a href="./patient.php">Patient</a>
            <a href="#">Profile</a>
        </div>
    <div class="container">
        <h1> Appointment Request</h1> 
        <?php
        $query='SELECT name 
                FROM user
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
                    
                </div>                
                    <div> <span class="tag patient"><a href="/project1/patient.php?name=<?php echo $record['name'] ?>">Patient</a></span></div>
                    <?php echo'<br>'; ?>
                    <button onclick="location.href='./viewdetails.php'" class="btn btn-success">View Details</button>
                    <?php   
            }
        }
        ?>  
</body>    
</html>