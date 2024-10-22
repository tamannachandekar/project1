<?php

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Pink Video Page</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        background-color: pink;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .grid {
        max-width: 1300px;
        height: 100%;
        margin: auto;
        padding: 10px 1em;
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: (1fr);
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .grid iframe {
        width: 100%;
        height: 300px;
    }

    .grid {
        max-width: 1300px;
        height: 100%;
        margin: auto;
        padding: 10px 1em;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        iframe {
            width: 100%;
            height: 300px;
        }
    }

        /* Heading style */
        h1 {
            color: #fff; /* Darker pink color */
            font-size: 36px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Therapy Session</h1>
        <?php
        $sql = "SELECT * from exercise";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            $data = $row['video_link'];
             
            echo "
            <iframe 
                src='$data'
                frameborder='0'
                allow='autoplay; encrypted-media'
                allowfullscreen>
            </iframe>";

        }    
        ?>
        
    </div>
</body>
</html>