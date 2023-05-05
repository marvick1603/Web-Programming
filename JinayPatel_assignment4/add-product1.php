<?php
    // TO DO - write code to insert a record to database

    require_once 'connection.php';

    $pr_id = $_POST['Product_ID'];
    $pr_name= $_POST['Product_Name'];
    $pr_price= $_POST['Product_Price'];
    $pr_isbn=$_POST['Product_ISBN'];
    
    $query = "INSERT INTO `book`(`product_id`, `product_name`, `product_price`, `product_isbn`)VALUES ($pr_id,'$pr_name',$pr_price,'$pr_isbn')";
    $res = mysqli_query($conn,$query);

    if($res==1){
        
        header("Location:add-product.php?msg=ProductAddedsuccessfully");

    }
    else{
        
        header("Location:add-product.php?msg=Failedtoinsert");
    }
?>
