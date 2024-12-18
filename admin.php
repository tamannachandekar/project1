<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="./css/admin.css">
    </head>
    <body>
        <div class="navbar">
            <a href="./admin.php">Dashboard</a>
            <a href="./appointment.php">Appointment request</a>
            <a href="./patient.php">Patient</a>
            <a href="#">Profile</a>
        </div>
        <div class="header">
            <span class="notifications">6 Patients Approval Pending</span>
            <span class="bell-icon">🔔6</span>
        </div>
    
        <div class="dashboard">
            <h2>Dashboard</h2>
            <div class="date-selector">
                <button class="arrow">&lt;</button>
                <span class="date">Today<br>16 May 2017</span>
                <button class="arrow">&gt;</button>
            </div>
    
            <div class="time-selector">
                <button class="time-btn active">Morning</button>
                <button class="time-btn">Evening</button>
            </div>
    
            <div class="appointments">
                <div class="time-slot">
                    <span>10.00 AM - 11.00 AM</span>
                    <span class="patient-count">3</span>
                </div>
                <div class="time-slot">
                    <span>11.00 AM - 12.00 PM</span>
                    <span class="patient-count">2</span>
                </div>
                <div class="time-slot">
                    <span>12.00 PM - 01.00 PM</span>
                    <span class="patient-count">4</span>
                </div>
            </div>
    
            <div class="menu">
                <div class="menu-item">
                    <img src="./css/appointment.png" alt="Appointment icon"> Appointment
                </div>
                <div class="menu-item">
                    <img src="./css/paitent.png" alt="Patients icon"> Patients
                </div>
                <div class="menu-item">
                    <img src="./css/feedback.png" alt="Feedback icon"> Feedback
                </div>
                <div class="menu-item">
                    <img src="./css/lab.png" alt="Lab icon"> Lab Near By You
                </div>
                <div class="menu-item">
                    <img src="./css/blog.png" alt="Blog icon"> Read Blog
                </div>
            </div>
            <div class="meet">
                <a href="https://calendar.google.com/calendar/u/0/r">
                    <img src="./css/Googlemeet.png" alt="GoogleMeet" /> 
                </a>
            </div>
        </div>
    </body>      
</html>