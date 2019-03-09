<?php
$conn = mysqli_connect('localhost', 'root', '','gpm');
$query = "SELECT question , avg( answer ) as avg_ans FROM answer  GROUP BY question";  
$result = mysqli_query($conn, $query);  
while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["question"]."', ".$row["avg_ans"]."],".'<br/>';

                          }  
?>