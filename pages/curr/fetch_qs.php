<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=gpm", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':id'   => "%" . $_GET['id'] . "%",
  ':name'   => "%" . $_GET['name'] . "%",
  ':dept'   => "%" . $_GET['dept'] . "%",
    ':sem'   => "%" . $_GET['sem'] . "%",

  ':filename'   => "%" . $_GET['filename'] . "%",

 );
 $query = "SELECT * FROM qs WHERE id LIKE :id AND name LIKE :name  AND dept LIKE :dept AND sem LIKE :sem AND filename LIKE :filename  ";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'name'  => $row['name'],
   'dept'  => $row['dept'],
   'sem'  => $row['sem'],
   'filename'  => $row['filename'],

   
   
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':id'  => $_POST["id"],
  ':name'  => $_POST["name"],
  ':dept'  => $_POST["dept"],
  ':sem'  => $_POST["sem"],
  ':filename'  => $_POST["filename"],

 );

 $query = "INSERT INTO qs (id, name,dept,sem,filename) VALUES (:id, :name,:dept,:sem,:filename)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':name' => $_PUT['name'],
  ':dept' => $_PUT['dept'],
  ':sem' => $_PUT['sem'],
  ':filename' => $_PUT['filename'],
  

 );
 $query = "
 UPDATE qs 
 SET id = :id, 
 name = :name, 
 dept = :dept, 
 sem = :sem,
 filename = :filename,

  WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM qs WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
