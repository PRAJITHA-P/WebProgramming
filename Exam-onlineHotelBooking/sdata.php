<?php

include("connection.php");

$hname="";
if(isset($_POST['submit'])){

    $hname=$_POST['hname'];
    
}
$select=mysqli_query($conn,"SELECT *FROM user WHERE hname='$hname'");
if(mysqli_num_rows($select)>0){

    echo"<table>";
      echo "<tr>";
          echo "<th>id</th>";
          echo "<th>name</th>";
          echo "<th>AC rooms</th>";
          echo "<th>Non AC rooms</th>";


      echo "<tr>";

      while($row=mysqli_fetch_array($select)){
          echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['name']."</td>";
                echo"<td>".$row['ac']."</td>";
                echo"<td>".$row['nac']."</td>";

          echo"</tr>";
      }
      echo"</table>";
}


?>