<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //scripts
    // strpos();
    $email="arger@ger.er";
    $check=strpos($email,"@");//not avaible then false if there then position(start from 0)
    echo"Position of @ in $email is $check\n";

    //substr()
    $str1=substr("Web programming course",0,5);
    echo"sub string is $str1";

    //substr_replace()
    substr_replace("web design","prog",4,6);
    ?>
</body>
</html>