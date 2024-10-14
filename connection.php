<?php
$c_name = $_POST['FullName'];
$c_specialization = $_POST['Specialization'];
$c_email = $_POST['Email'];
$c_phone = $_POST['MobileNumber'];
$c_gender = $_POST['level'];
$certification = $_POST['Certification'];
$experience = $_POST['Experience'];
$associated_facility = $_POST['AssociatedFacility'];

//database connection
$conn = new mysqli('localhost', 'root','', 'rehab.1');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);}
else{
    $stmt=$conn->prepare("insert into registration (FullName,Specialization,Email,MobileNumber,level,Certification,Experience,AssociatedFacility)
       values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissi",$FullName,$Specialization,$Email,$MobileNumber,$level,$Certification,$Experience,$AssociatedFacility);   
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $stmt->close();
}