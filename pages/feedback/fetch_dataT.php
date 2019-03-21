<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=gpm", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':id'   => "%" . $_GET['id'] . "%",
  ':teacher'   => "%" . $_GET['teacher'] . "%",
  

 );
 $query = "SELECT * FROM teacher WHERE id LIKE :id AND teacher LIKE :teacher   ";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'teacher'  => $row['teacher'],
   

   
   
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':id'  => $_POST["id"],
  ':teacher'  => $_POST["teacher"],
  

 );

 $query = "INSERT INTO teacher (id, teacher) VALUES (:id, :teacher)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':teacher' => $_PUT['teacher'],
  

 );
 $query = "UPDATE teacher SET id = :id, teacher = :teacher, WHERE id = :id ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM teacher WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
