<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=gpm", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':id'   => "%" . $_GET['id'] . "%",
  ':name'   => "%" . $_GET['name'] . "%",

  ':link'   => "%" . $_GET['link'] . "%",
  ':filename'   => "%" . $_GET['filename'] . "%",
  ':category'   => "%" . $_GET['category'] . "%",

 );
 $query = "SELECT * FROM ln WHERE id LIKE :id AND name LIKE :name AND link LIKE :link  AND filename LIKE :filename AND category LIKE :category  ";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'id'    => $row['id'],   
   'name'  => $row['name'],

   'link'  => $row['link'],
  
   'filename'  => $row['filename'],

   'category'  => $row['category'],

   
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

  ':link'  => $_POST["link"],

  ':filename'  => $_POST["filename"],
  ':category'  => $_POST["category"],

 );

 $query = "INSERT INTO ln (id,name, link,filename,category) VALUES (:id,:name, :link,:filename,:category)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':id'   => $_PUT['id'],
  ':name'   => $_PUT['name'],
  ':link' => $_PUT['link'],

  ':filename' => $_PUT['filename'],
  ':category' => $_PUT['category'],


 );
 $query = "
 UPDATE ln 
 SET id = :id, 
 name = :name, 

 link = :link, 

 filename = :filename,
 category = :category,

  WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM ln WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
