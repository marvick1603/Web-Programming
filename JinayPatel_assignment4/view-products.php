<?php

require_once 'connection.php';
                    
require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 4-Inventory Management System</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #wrapper
            {
                width:50%;
                margin:auto;
            }

            table
            {
             
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            

            th
            {
                background-color:red;
                color: white;
            }

            h2
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Assignment 4-Inventory Management System</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>

            <hr>

            <h2>View Products</h2>

                <?php

                    
                    $query="SELECT * FROM `book` ";
                    $res=mysqli_query($conn,$query);
                    if(mysqli_num_rows($res)>0)
                    {
                       
                    echo "<table id='products'>";
                    echo "<tr><th>ID</th>";
                    echo "<th>Name</th>";
                    echo "<th>Price</th>";
                    echo "<th>ISBN</th></tr>";
                    
                  
                    while ($row = mysqli_fetch_assoc($res))                       
                    {
                        echo "<tr><td>".$row['product_id']."</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['product_price'] . "</td>";
                        echo "<td>" . $row['product_isbn'] . "</td></tr>";

                        
                    }
                    
                    echo "</table>";
                    }
                    else{
                        echo"Table is Empty";
                    }
                ?>
        </div>
    </body>
</html>
