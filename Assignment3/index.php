<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:red">
  <center>  <img src="logo-en.jpg" alt="Tim Hortons" style="width:700px;height:300px"></center>
    <form action="order.php" method="post" style="border-style: solid;
    border-color: yellow; border-radius:10%;border-width:10px">
    <h3>Please place your order...</h3>
    No. of Coffees:<input type="number" id="quantity" name="quantity" min="0" max="5">
    <br>
    <br>
    Size of Coffee:<select name="size">
        <option value="-1">Select Size</option>
        <option value="1">Small</option>
        <option value="2">Medium </option>
        <option value="3">Large</option>
     </select>
     <br>
     <br>
     No. of Creams:<input type="number" id="creams" name="creams" min="0" max="3">
    <br>
    <br>
    No. of Sugar:<input type="number" id="sugar" name="sugar" min="0" max="3">
    <br>
    <br> <input type="submit" name="submit">



    </form>
</body>
</html>