<?php
if(isset($_POST['register'])){


    // $target = "./pdf/ansari".basename($_FILES['filename']['name']);

    $db = mysqli_connect("localhost","root","","GPM");
    // $filename = $_FILES['filename']['name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $category = $_POST['category'];
    $dept = $_POST['dept'];


    $sql = "INSERT INTO admin (name,email,password,category,dept) VALUES ('$name','$email','$pass','$category','$dept')";

    mysqli_query($db,$sql);


  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminGPM | Admin Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="  bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="  bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="  bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="  dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="  plugins/iCheck/square/blue.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="  index2.html"><b>Admin</b>GPM</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register as Administrator</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" id="name" placeholder="Teacher  name" >
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="UserEmail" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="repass" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <div class="form-control">
                  <select name="category">
<option   value="faculty">Faculty </option>
<option   value="hod">Head of Department </option>
<option   value="principal">Principal </option>


</select>               
 </div>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <div class="form-control">
      <select name="dept">
<option   value="ce">Civil Engineering </option>
                                    <option   value="co" >Computer Engineering</option>
                                    <option   value="ee"> Electrical Engineering</option>
                                    <option   value="ec"> Electronics Engineering</option>
                                    <option   value="it" >Information Technology</option>
                                    <option   value="is">Instrumentation Engineering </option>
                                    <option   value="rb"> Rubber Technology</option>
                                    <option   value="lt">Leather Technology </option>
                                    <option   value="me">Mechanical Engineering </option>
</select>                   
 </div>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    

      <!-- <div class="form-group has-feedback">
        <input type="text" class="form-control" id="contact" placeholder="Contact No." >
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> -->

      <div class="row">
      
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit"  id="btn-submit" name="register" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

 

    <!-- <a href="login.html" class="text-center">I already have a membership</a> -->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="  bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="  bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="  plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
  $(document).ready(function() { 
 
    $('#btn-submit').click(function() {  
 
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
         var passReg = /^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;
        //  var conReg = /\+[0-9]{2}+[0-9]{10}/;

        var emailaddressVal = $("#UserEmail").val();
        var name = $("#name").val();
        var pass = $("#pass").val();
        var repass = $("#repass").val();
        var contact = $("#contact").val();

if(name == ''){
             $("#name").after(alert('Please enter your name'));
            hasError = true;
        }

      else  if(emailaddressVal == '') {
            $("#UserEmail").after(alert('Please enter your email address'));
            hasError = true;
        }
 
        else if(!emailReg.test(emailaddressVal)) {
            $("#UserEmail").after(alert('Enter a valid email address'));
            hasError = true;
        }

else if(pass == ''){
     $("#pass").after(alert('Please enter the password'));
            hasError = true;
}

else if(!passReg.test(pass)){
     $("#pass").after(alert('Please enter valid password'));
            hasError = true;
}

else if(repass == ''){
     $("#repass").after(alert('Please confirm the password'));
            hasError = true;
}
else if(pass != repass){
     $("#repass").after(alert('password doesnt match'));
            hasError = true;
}
// else if(contact == ''){
//      $("#contact").after(alert('Please enter the Contact Number'));
//             hasError = true;
// }
// else if(!conReg.test(contact)){
//      $("#contact").after(alert('Please enter the valid Contact Number'));
//             hasError = true;
// }


        if(hasError == true) { return false; }
 
    });
});
</script>
</body>
</html>