<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=gpm", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':id'   => "%" . $_GET['id'] . "%",
  ':name'   => "%" . $_GET['name'] . "%",
  ':email'   => "%" . $_GET['email'] . "%",
  ':enroll'   => "%" . $_GET['enroll'] . "%",
  ':filename'   => "%" . $_GET['filename'] . "%",
  

 );
 $query = "SELECT * FROM verify_cons WHERE id LIKE :id AND name LIKE :name AND email LIKE :email AND enroll LIKE :enroll AND filename LIKE :filename  ";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'name'  => $row['name'],
   'email'  => $row['email'],
   'enroll'  => $row['enroll'],
   'filename'  => $row['filename'],

   
   
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}

if($method == "POST")
{
 $data = array(
  ':id'  => $_POST['id'],
  ':name'  => $_POST["name"],
  ':email'  => $_POST["email"],
  ':enroll'  => $_POST["enroll"],
  ':filename'  => $_POST["filename"],

 );

 $query = "INSERT INTO verify_cons (id, name,email,enroll,filename) VALUES (:id, :name,:email,:enroll,:filename)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':name' => $_PUT['name'],
  ':email' => $_PUT['email'],
  ':enroll' => $_PUT['enroll'],
  ':filename' => $_PUT['filename'],
  

 );
 $query = "
 UPDATE verify_cons 
 SET id = :id, 
 name = :name, 
 email = :email, 
 enroll = :enroll,
 filename = :filename,

  WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM verify_cons WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
