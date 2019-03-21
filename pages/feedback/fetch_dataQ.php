<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=gpm", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':id'   => "%" . $_GET['id'] . "%",
  ':question'   => "%" . $_GET['question'] . "%",
  

 );
 $query = "SELECT * FROM question WHERE id LIKE :id AND question LIKE :question   ";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'question'  => $row['question'],
   

   
   
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':id'  => $_POST["id"],
  ':question'  => $_POST["question"],
  

 );

 $query = "INSERT INTO question (id, question) VALUES (:id, :question)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':question' => $_PUT['question'],
  

 );
 $query = "
 UPDATE question 
 SET id = :id, 
 question = :question, 
 
  WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM question WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
