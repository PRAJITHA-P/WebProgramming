<?php

/*Build a PHP code to store name of Indian Cricket players in an array and display
the same in HTML table*/
  
  $name=array("Kapil Dev","Rahul Dravid","Sachin Tendulkar","Sunil Gavaskar","MS Dhoni","Dilip Vengasarkar","Shikhar Dhawan"," BS Chandrashekhar");
  echo ("Array is:<br>");
  print_r($name);

  /*Print_r ,It is an inbuilt function that is used in PHP to print or display the information stored in a variable*/

  echo "<table border=1>";
       echo "<tr>";
          echo "<th> NAME OF PLAYERS</th>";
       echo "</tr>";
       for($i=0; $i<count($name);$i++){
           echo "<tr>";
            echo "<td>$name[$i] </td>";
           echo "</tr>";
       }
?>