<?php 
require_once 'check_session.php';
              ?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration and Login using PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>
            #wrapper
            {
                width:70%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <?php
                // so that each page has a same header
                require_once 'header.php';
                
            ?>

            <h2>Welcome <?php echo $_SESSION['username'];?>
    </h2></h2>

            </div>
    </body>
</html>
