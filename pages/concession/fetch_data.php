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
    ':toC'   => "%" . $_GET['toC'] . "%",
    ':clas'   => "%" . $_GET['clas'] . "%",
    ':period'   => "%" . $_GET['period'] . "%",
    ':age'   => "%" . $_GET['age'] . "%",
    ':date'   => "%" . $_GET['date'] . "%",
 );
 $query = "SELECT * FROM concession WHERE id LIKE :id 
 AND name LIKE :name
  AND email LIKE :email
   AND enroll LIKE :enroll 
   AND filename LIKE :filename
   AND year LIKE :year   
   AND dept LIKE :dept
   AND shift LIKE :shift
      AND mobile LIKE :mobile
         AND address LIKE :address
            AND gender LIKE :gender
               AND dob LIKE :dob
                  AND fromC LIKE :fromC
                     AND toC LIKE :toC
                        AND clas LIKE :clas
                           AND period LIKE :period
                              AND age LIKE :age
                                 AND date LIKE :date
                                  ";

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
   'year'  => $row['year'],

   'dept'  => $row['dept'],

   'shift'  => $row['shift'],
   'mobile'  => $row['mobile'],
   'address'  => $row['address'],
   'gender'  => $row['gender'],
   'dob'  => $row['dob'],
   'fromC'  => $row['fromC'],
   'toC'  => $row['toC'],
   'clas'  => $row['clas'],
   'period'  => $row['period'],
   'age'  => $row['age'],
   'date'  => $row['date'],
   

   
   
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
  ':year'  => $_POST["year"],
  ':dept'  => $_POST["dept"],
  ':shift'  => $_POST["shift"],
  ':mobile'  => $_POST["mobile"],
  ':address'  => $_POST["address"],
  ':gender'  => $_POST["gender"],
  ':dob'  => $_POST["dob"],
  ':fromC'  => $_POST["fromC"],
  ':toC'  => $_POST["toC"],
  ':clas'  => $_POST["clas"],
  ':period'  => $_POST["period"],
  ':age'  => $_POST["age"],
  ':date'  => $_POST["date"],



 );

 $query = "INSERT INTO concession (id, name,email,enroll,filename,year,dept,shift,mobile,address,gender,dob,fromC,toC,clas,period,age,date) VALUES (:id, :name,:email,:enroll,:filename,:year,:dept,:shift,:mobile,:address,:gender,:dob,:fromC,:toC,:clas,:period,:age,:date)";
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
  ':year'  => $_PUT["year"],
  ':dept'  => $_PUT["dept"],
  ':shift'  => $_PUT["shift"],
  ':mobile'  => $_PUT["mobile"],
  ':address'  => $_PUT["address"],
  ':gender'  => $_PUT["gender"],
  ':dob'  => $_PUT["dob"],
  ':fromC'  => $_PUT["fromC"],
  ':toC'  => $_PUT["toC"],
  ':clas'  => $_PUT["clas"],
  ':period'  => $_PUT["period"],
  ':age'  => $_PUT["age"],
  ':date'  => $_PUT["date"],

 );
 $query = "
 UPDATE concession 
 SET id = :id, 
 name = :name, 
 email = :email, 
 enroll = :enroll,
 filename = :filename,
 year = :year,
 dept = :dept,
 shift = :shift,
 mobile = :mobile,
 address = :address,
 gender = :gender,
 dob = :dob,
 fromC = :fromC,
 toC = :toC,
 clas = :clas,
 period = :period,
 age = :age,
 date = :date,

  WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM concession WHERE id = '".$_DELETE["id"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
// echo "aaa";

}


?>
