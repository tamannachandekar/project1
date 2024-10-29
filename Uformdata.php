<?php

include("connection.php");

if(isset($_POST["nextbtn"])){

$p_dob = $_POST["dob"];
$p_phone = $_POST["number"];
$p_gender = $_POST["level"];
$p_occupation = $_POST["occupation"];
$conditions = $_POST["condition"];
$body_part = $_POST["bpart"];
$severity = $_POST["severity"];

$result = mysqli_query($conn, "SELECT patient_id FROM patient ORDER BY patient_id DESC LIMIT 1");
    if ($row = mysqli_fetch_assoc($result)) {
        $patient_id = $row['patient_id'];
    
$qry = "UPDATE patient
        SET p_dob = '$p_dob',
            p_phone = '$p_phone',
            p_gender = '$p_gender',
            p_occupation = '$p_occupation'
        WHERE patient_id = '$patient_id'";
        
if (mysqli_query($conn, $qry)) {
    echo "\n New record created successfully";
}
else{
    echo"not inserted ";
}
$cqry = "UPDATE conditions
         SET conditions = '$conditions',
             body_part = '$body_part',
             severity = '$severity'
         WHERE patient_id = '$patient_id'";

if (mysqli_query($conn, $cqry)) {
    echo "\n New record created successfully";
    header("location:./user.html");
}
else{
    echo"not inserted ";
}
}

}
