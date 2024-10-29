<?php

include("connection.php");

?>

<!DOCTYPE html
<html lang="en">
<head>
    <title>Details</title>
</head>
<body>
    <div class="container">
        <h1>Details</h1> 
        <?php
        $query='SELECT * FROM patient_view
                ORDER BY name';
        $result=mysqli_query($conn,$query);
        $check_user=mysqli_num_rows($result)>0;

        if ($check_user) {
            while ($record = mysqli_fetch_assoc($result)) {
            ?>
            <hr>
            <div class="title">
                <h2>Name: <?php echo $record['name']; ?></h2>
            </div>
            <div class="title">
                <h2>Email: <?php echo $record['email']; ?></h2>
            </div>
            <div class="title">
                <h2>Date of Birth: <?php echo $record['p_dob']; ?></h2>
            </div>
            <div class="title">
                <h2>Phone: <?php echo $record['p_phone']; ?></h2>
            </div>
            <div class="title">
                <h2>Gender: <?php echo $record['p_gender']; ?></h2>
            </div>
            <div class="title">
                <h2>Occupation: <?php echo $record['p_occupation']; ?></h2>
            </div>
            <div class="title">
                <h2>Conditions: <?php echo $record['conditions']; ?></h2>
            </div>
            <div class="title">
                <h2>Affected Body Part: <?php echo $record['body_part']; ?></h2>
            </div>
            <div class="title">
                <h2>Severity: <?php echo $record['severity']; ?></h2>
            </div>
            <br>
            <button onclick="location.href='./home.php'" class="btn btn-success">Add Patient</button>
            <?php
            }
        }
        ?>        
    </div>
</body>    
</html>
   