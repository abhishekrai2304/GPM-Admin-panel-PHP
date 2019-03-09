<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Send email via Gmail SMTP server in PHP</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="robots" content="noindex, nofollow">
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43981329-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script');
ga.type = 'text/javascript';
ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ga, s);
})();
</script>
</head>
<body>

<?php
require 'PHPMailerAutoload.php';
$name=$_SESSION['name'];
$emailNoti=$_SESSION['email'];
$enroll=$_SESSION['enroll'];
$file=$_SESSION['filename'];
$email = 'affanmohhd@gmail.com';
$password = '8097862247';
$to_id = $emailNoti;
echo 'email : '.$emailNoti;
$message = 'Dear student '. $name  .'<br/> and your enrolment number\'s <br/>'.$enroll.'<br/> your concession request is verified you can collect it from office at student section ';
$subject = 'application for concession request';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}


?>
</body>
</html>