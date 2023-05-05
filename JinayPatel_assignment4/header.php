
<h1>Assignment 4-Inventory Management System</h1>

<a href="index.php">Home</a> |
<a href="register.php">Register</a> | 
<a href="add-product.php">Add Product</a> | 
<a href="view-products.php">View Products</a> | 

<?php
if  (isset($_SESSION['username'])) {
    echo '<a href="logout.php">Logout</a> '; 
}
else{
echo '<a href="login.php">Login</a>' ;

}
?>
<hr>
