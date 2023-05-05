<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:red">
    <?php
    $nc=$_POST['quantity'];
    $cs=$_POST['size'];
    $noc=$_POST['creams'];
    $ns=$_POST['sugar'];
    $price;
    $total;
    if(!empty($nc) && $cs!=-1 ){
      if($cs!=-1){
       
        for($i=0;$i<$nc;$i++){
        if($cs==1){
            $price=1.5;
            $total=$price*$nc;
            $total=$total+($total*0.13);
          echo"
          <div style='background-color:yellow'>
          <img src='cup.jpg' alt='coffe' style='width:150px; height:300px'>
       
           " ; 
           if($noc>0){
           echo" <img src='plus.jpg' alt='plus' style='width:100px; height:100px;'>";
           for($j=0;$j<$noc;$j++){
            echo"
           
            <img src='cream.jpg' alt='cream' style='width:100px;height:100px'>
            ";
            if($ns==0){
                echo"</div>";
            }
           }
        }
        
           
           if($ns>0){
            echo" <img src='plus.jpg' alt='plus' style='width:100px; height:100px;'>";
           for($k=0;$k<$ns;$k++){
            echo"
           
            <img src='sugar.jpg' alt='sugar' style='width:100px;height:100px'> ";
            if($noc==0){
                echo"</div>"; 
            }
           }}
        if($noc==0 && $ns==0){
           
           echo"</div>";
        }
      

        }
        elseif($cs==2){
            $price=2;
           
            $total=$price*$nc;
            $total=$total+($total*0.13);
            echo"
            <div style='background-color:yellow'>
            <img src='cup.jpg' alt='coffe' style='width:150px; height:350px'>
            
             " ; 
             if($noc>0){
                echo"<img src='plus.jpg' alt='plus' style='width:100px;height:100px'>";
             for($j=0;$j<$noc;$j++){
              echo"
              <img src='cream.jpg' alt='cream' style='width:100px;height:100px'>
              ";
              if($ns==0){
                echo"</div>";
            }
             }
            }
             
             if($ns>0){
                echo"<img src='plus.jpg' alt='plus' style='width:100px;height:100px'>";
             for($k=0;$k<$ns;$k++){
              echo"
              <img src='sugar.jpg' alt='sugar' style='width:100px;height:100px'>
              
              </div>
              ";
              if($noc==0){
                echo"</div>"; 
            }
              ;
             }}
             if($noc==0 && $ns==0){
           
                echo"</div>";
             }
     
            
          }

          elseif($cs==3){
            $price=3;
            $total=$price*$nc;
            $total=$total+($total*0.13);
            echo"
            <div style='background-color:yellow'>
            <img src='cup.jpg' alt='coffe' style='width:200px; height:400px'>
            
             " ; 
             if($noc>0){
                echo"<img src='plus.jpg' alt='plus' style='width:100px;height:100px'>";
             for($j=0;$j<$noc;$j++){
              echo"
              <img src='cream.jpg' alt='cream' style='width:100px;height:100px'>
              ";
              if($ns==0){
                echo"</div>"; 
            }
             }}
             
             if($ns>0){
                echo"<img src='plus.jpg' alt='plus' style='width:100px;height:100px'>";
             for($k=0;$k<$ns;$k++){
              echo"
              <img src='sugar.jpg' alt='sugar' style='width:100px;height:100px'>
              
              </div>
              ";
              if($noc==0){
                echo"</div>"; 
            }
             }}
             if($noc==0 && $ns==0){
           
                echo"</div>";
             }
             
          }

      }
      echo"<br>";
      echo"<h3></h3><center>Price of small coffee is $price so with taxes your bill is $total</center></h3>";
      echo"<center><h1>Thank You For Ordering :)</h1></center>";

    }
    
    }
    
    else{
        echo"<center><h1>Enter Proper Input :(</h1></center>";
    }

    
    ?>
</body>
</html>