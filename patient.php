<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <link rel="stylesheet" href="./css/paitent.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="./admin.php">Dashboard</a>
            <a href="./appointment.php">Appointment request</a>
            <a href="./patient.php">Patient</a>
            <a href="#">Profile</a>
        </div>
    </header>
    <main>
        <section class="patient-profile">
            <h1>Patient Profile</h1>
            <div class="patient-info">
                <img src="./css/paitent.png" alt="Patient Image">
                <h2 id="name"></h2>
            </div>
            <div class="prescription">
                <h3>Prescription</h3>
                <img src="prescription-image.jpg" alt="Prescription Image">
            </div>
            <div class="add-test">
                <button>+ Add Test</button>
            </div>
            <div class="add-prescription">
                <button>+ Add Prescription</button>
            </div>
        </section>
    </main>

    <script>
        let name =  window.location.search.split("=")[1].split("%20").join(" ")
        document.getElementById('name').innerText = name
    </script>
</body>
</html>