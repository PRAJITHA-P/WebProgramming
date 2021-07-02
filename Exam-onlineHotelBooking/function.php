<?php
  include("connection.php");

    $name='';
    $loc='';
    $hname='';
    $ac='';
    $non_ac='';
    $rac='';
    $rnac='';


    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $loc=$_POST['location'];
        $hname=$_POST['hname'];
        $ac=$_POST['ac'];
        $nac=$_POST['nac'];
        $rac=$_POST['rac'];
        $rnac=$_POST['rnac'];
     }

$insert=mysqli_query($conn,"INSERT INTO hoteldata(name,location,hotelName,ac,non_ac,rate_ac,rate_nonAc) VALUES('$name','$loc','$hname','$ac','$nac','$rac','$rnac')");


?>
   