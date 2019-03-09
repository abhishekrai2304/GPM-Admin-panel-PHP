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
    ':year'   => "%" . $_GET['year'] . "%",
    ':dept'   => "%" . $_GET['dept'] . "%",
    ':shift'   => "%" . $_GET['shift'] . "%",
    ':mobile'   => "%" . $_GET['mobile'] . "%",
    ':address'   => "%" . $_GET['address'] . "%",
    ':gender'   => "%" . $_GET['gender'] . "%",
    ':dob'   => "%" . $_GET['dob'] . "%",
    ':fromC'   => "%" . $_GET['fromC'] . "%",
    ':topC'   => "%" . $_GET['topC'] . "%",
    ':clas'   => "%" . $_GET['clas'] . "%",
    ':period'   => "%" . $_GET['period'] . "%",
    ':age'   => "%" . $_GET['age'] . "%",
    ':date'   => "%" . $_GET['date'] . "%",
 );
 $query = "SELECT * FROM concession WHERE id LIKE :id AND name LIKE :name AND email LIKE :email AND enroll LIKE :enroll AND filename LIKE :filename  AND year LIKE :year   AND dept LIKE :dept   AND shift LIKE :shift   AND mobile LIKE :mobile   AND address LIKE :address   AND gender LIKE :gender   AND dob LIKE :dob   AND fromC LIKE :fromC   AND topC LIKE :topc   AND clas LIKE :clas   AND period LIKE :period   AND age LIKE :age   AND date LIKE :date ";

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
