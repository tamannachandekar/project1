<?php

include("connection.php");



if(isset($_POST["logibbtn"])){

$email = $_POST["email"];
$pass = $_POST["password"];

$qry = "SELECT INTO user (`email`,`pass`) VALUES ('$email','$pass')";

$result = mysqli_query($conn, $qry);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "  " . $row["pass"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
}
  ?>

// if () {
//     echo "\n New record created successfully";
//     header("Location:./home.html");
//   }
//   else{
//     echo"not inserted ";
//   }
// }