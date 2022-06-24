<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include 'config.php';
$username= $_POST['user'];
$pass= $_POST['password'];
$pass2 = hash('sha256', $pass); 
$s = "SELECT * FROM signin WHERE username='$username' && paassword='$pass2'";

$answer=mysqli_query($con,$s);

if(!$answer){
    echo '<br>Error:' . mysqli_error($con);
}

else{
    $row = mysqli_fetch_array($answer, MYSQLI_ASSOC);  
    $num=mysqli_num_rows($answer);
if($num==1){
       session_start();
       $_SESSION['username']=$username;
       include 'donationform.php';
}
else{
    echo'<script type ="text/javascript">alert ("Username or password is wrong")</script>';
    include 'login.php'; 
}
}
?>
</body>
</html>
