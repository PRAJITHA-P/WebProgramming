
 <html>
    <head>
        <title>User</title>
    </head>
    <body>
        <form name="form" action="function2.php" method="POST">
           <table style="align-items: center;">
               <tr>
                   <th>Name:</th>
                   <td><input type="text" name="name" id="name"></td>
               </tr>
               <tr>
                   <th>Contact Details:</th>
                   <td><input type="text" name="cd" id="cd"></td>
               </tr>
               
               <tr>
                <th>Name of the hotel:</th>
                <td><input type="text" name="hname" id="hname"></td>
              </tr>

              <tr>
                <th>Arrival Date:</th>
                <td><input type="text" name="date" id="date"></td>
              </tr>
            
              <tr>
                <th>No. of room needed(AC) :</th>
                <td><input type="text" name="ac" id="ac"></td>
              </tr>

              <tr>
                <th>No. of room needed(Non-AC) :</th>
                <td><input type="text" name="nac" id="nac"></td>
              </tr>

               <tr>
                   <td></td>
                   <td><input type="submit" name="submit" value="submit">
                        <input type="reset" value="clear"></td>
               </tr>
           </table>  

        </form>
    </body>
</html>