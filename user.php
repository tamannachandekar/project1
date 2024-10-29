<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .navbar {
            background-color: #ffccff;
            padding: 10px;
            border: 5px solid #ffccff;
        }
        .navbar a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
        }
        .content {
            text-align: center;
            padding: 50px;
        }
        .icon {
            font-size: 100px;
            color: #ff00ff;
        }
        .icon-text {
            font-size: 20px;
            height: 100px;
            font-weight: bold;
            color: black;
        }
        .icon-container {
            width: 10px;
            height: 10px;
            align-items: left;
        }
        .icon-container1{
            width: 2000px;
            height: 40px;
            align-items: right; 
        }
        .meet a{
            position: relative;
            text-decoration: none;
            padding: 0 10px;
        }
        .meet a:after{
            content: "";
            position: absolute;
            background-color: black;
            height: 3px;
            width: 0;
            left: 0;
            bottom: -10px;
        }
        .meet a:hover:after{
            width: 100%;
        }
        .meet a img{
            max-width: 200px;
            max-height: 200px;
            display: block;
            margin: 300px auto;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="user.html">Dashboard</a>
        <a href="course.html">Course</a>
        <a href="#">Profile</a>
        <a href="#">Query</a>
    </div>
    <div class="content">
        <div class="icon-container">
            <a href="#">
                <img src="./css/user.jpg" />
            <div class="icon-text">Welcome-user</div>
        </div>
        <div class="icon-container1">
            <a href="./video.html">
                <img src="./css/video.jpg" />
            <div class="icon-text">Allocated Course</div>
        </div>
    </div>
    <div class="meet">
        <a href="https://meet.google.com/landing?hs=197&authuser=0">
            <img src="./css/Googlemeet.png" alt="GoogleMeet" /> 
        </a>
    </div>
</body>
</html>