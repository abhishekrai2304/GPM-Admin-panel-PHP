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
    ':year'   => "%" . $_GET['year'] . "%",
    ':shift'   => "%" . $_GET['shift'] . "%",

  ':filename'   => "%" . $_GET['filename'] . "%",

 );
 $query = "SELECT * FROM TT WHERE id LIKE :id AND name LIKE :name  AND dept LIKE :dept AND year LIKE :year AND shift LIKE :shift AND filename LIKE :filename  ";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'name'  => $row['name'],
   'dept'  => $row['dept'],
   'year'  => $row['year'],
   'shift'  => $row['shift'],
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
  ':year'  => $_POST["year"],
  ':filename'  => $_POST["filename"],

 );

 $query = "INSERT INTO TT (id, name,dept,year,filename) VALUES (:id, :name,:dept,:year,:filename)";
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
  ':year' => $_PUT['year'],
  ':filename' => $_PUT['filename'],
  

 );
 $query = "
 UPDATE TT 
 SET id = :id, 
 name = :name, 
 dept = :dept, 
 year = :year,
 filename = :filename,

  WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM TT WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
