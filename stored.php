<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stored_style.css">
    <title>Survey Form</title>
</head>
<body>
    <?php 
        session_start();
        if (!isset($_SESSION['age'])){
            header("Location: index.php");
        }  
    ?>
    <br>

    <div class="grid-container full fluid">
        <div class="head">Verification Form</div>

        <div class="grid-x grid-padding-x">
            <div class="cell">
                <br>
                <h5>Your response has been recorded.</h5>

                <br><br>

                <a href="index.php"><h5><u>Submit another response.</u></h5></a>
                <br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js" crossorigin="anonymous"></script>

    <?php
        session_unset();
    ?>
    
</body>
</html>