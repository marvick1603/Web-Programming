<?php
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

        
    </head>
    <body>
        <div id="wrapper">

            <h1>Assignment 4-Inventory Management System</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>

            <hr>
            <center>
            <h2>Add Product</h2>
            </center>
            <form action="add-product1.php" method="post">
                <center>
                <table>
                    <tr>
                        <td>Enter Book Id:</td>
                        <td>
                            <input type="text" name="Product_ID">
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Name:</td>
                        <td>
                            <input type="text" name="Product_Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Price:</td>
                        <td>
                            <input type="text" name="Product_Price">
                        </td>
                    </tr>
                    <tr>
                        <td>Enter ISBN:</td>
                        <td>
                            <input type="text" name="Product_ISBN">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
                <center>
            </form>

            <?php
                
                if(isset($_REQUEST['msg'])){
                    $result=$_REQUEST['msg'];
                    if($result=='ProductAddedsuccessfully'){
                        echo"Product added";
                        
                     }
                     else{
                       echo"Product not added";
                        
                     }
                }
            ?>
        </div>
    </body>
</html>
