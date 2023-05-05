<?php
    
    $host = 'localhost';                    
    $user = 'root';                  
    $pswd = '';                  
    $dbName = 'jinay_assi4';                   

    $conn = mysqli_connect($host, $user, $pswd, $dbName);

    if (empty($conn))
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    