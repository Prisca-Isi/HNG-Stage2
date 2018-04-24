<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <div class="container">
        <p class="p p1">
            <?php
                date_default_timezone_set("Africa/Lagos");
                echo "The current time is";
            ?>
        </p>

        <p class="p p2">
            <?php
                echo date("G:i:s");
            ?>
        </p>

        <p class="p p3">
            <?php
                echo date("l \, jS F Y");
            ?>
        </p>
        <div class="rec">
            <p>Enter Site</p>
        </div>
    </div>
</body>
</body>
</html>