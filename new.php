<?php
 $db = mysqli_connect("localhost","root","","GPM");
 $sql = "SELECT COUNT(id) as ans FROM concession";
 
 $result= mysqli_query($db,$sql);
 while($row = mysqli_fetch_array($result))  
                          {  
                               echo $row["ans"];
                          }  
?>