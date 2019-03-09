<?php

    if(isset($_POST['login'])){
        $connection =  new mysqli("localhost", "root", "", "abc") ;
        $email = $connection->real_escape_string( $_POST['email']);
        $password = md5($connection->real_escape_string($_POST['password']));

        $data = $connection->query("SELECT id FROM users WHERE email='$email' AND password='$password'");
        if ($data->num_rows > 0) {
			// $_SESSION["email"] = $email;
			// $_SESSION["loggedIn"] = 1;
			
			// header("Location: login.php");
			exit('<p>Login succes</p>');

		} else {
			
			exit('<p> not Login succes</p>');
		}
        // exit($email . " = ".$password);
    }
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

    <form method="post" action="login.php">
        <input type="text" id="email" name="email" placeholder="Email..." ><br>

        <input type="password" id="password" name="password" placeholder="password..." ><br>

        <input type="submit" id="login" name="login" value="login id" ><br>
    </form>
    <p id="response">

    </p>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript" >

    $(document).ready(function(){
        $("#login").on('click',function() {
            var email = $('email').val();
            var password = $('password').val();

            if(email == "" || password == "")
                alert("Please check");
            
            else {
                $.ajax({
                url : 'login.php',
                method : 'POST',
                data : {
                    login : 1,
                    email : email,
                    password : password
                },
                success : function(response) {

                    $("#response").html(response);
                },
                dataType : 'text'
            });
            }
           
        });
    });
</script>

</body>
</html>