<html>
<head><meta charset="utf-8"></head>
<body>
<?php
session_start();
include("config.php");
$username= $_POST['username'];
$name= $_POST['name'];
$adress= $_POST['adress'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$confirmpass= $_POST['confirmpass'];

$s = "SELECT * FROM `signin` WHERE";
$s= $sql . "username='username' and password='$password'";


$sonuc=mysqli_query($con,$s);
if(!$answer){
    echo '<br>Error:' . mysqli_error($con);
}

$num=mysqli_num_rows($sonuc);
if($num==0){
    
        $_SESSION['username']=$username;
        header('location:donationform.php');
}
else{
    echo'<script type ="text/javascript">alert ("Username or password is wrong")</script>';
    header('location:login.php');   
}
?>
</body>
</html>
