<?php

  include("connection.php");

    $name='';
    $cdetail='';
    $hname='';
    $date='';
    $ac='';
    $nac='';
    
    


    if(isset($_POST['submit'])){
       
        $name=$_POST['name'];
        $cdetail=$_POST['cd'];
        $hname=$_POST['hname'];
        $date=$_POST['date'];
        $ac=$_POST['ac'];
        $nac=$_POST['nac'];
      
    }

            $insert=mysqli_query($conn,"INSERT INTO user(name,cdetail,hname,date,ac,nac) VALUES('$name','$cdetail','$hname','$date','$ac','$nac')");
          
  
    
 
?>