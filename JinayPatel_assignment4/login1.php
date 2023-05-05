<?php
   
    ob_start();

    
    session_start();
    require_once 'connection.php';
    
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    
    $query = "Select * from `users` where `username` = '$username'";
    

   
    $result = mysqli_query($conn,$query);

    
    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];    

        if (password_verify($password, $hashed_password))
        {
            
            $_SESSION['username'] = $username;

            header('location:view-products.php');
            ob_end_flush();
            die();
        }
    }

 
    header('location:login.php?result=fail');
?>
