<html>
<head><meta charset="utf-8"></head>
<body>
<?php
if(isset($_POST['submit'])){
include "config.php";
if(!$con)
{
    echo "connection failed";
}
else{
    
$username= $_POST['username'];
$name= $_POST['name'];
$adress= $_POST['adress'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$confirmpass= $_POST['confirmpass'];
$pass4 = hash('sha256', $pass); 
$pass1 = hash('sha256', $confirmpass); 


if($pass==$confirmpass){
$c = "INSERT INTO signin (username,name,adress,phone,email,paassword,password2) 
     VALUES ('{$username}','{$name}','{$adress}','{$phone}','{$email}','{$pass4}','{$pass1}')";

  if(mysqli_query($con,$c)){
echo'<script type ="text/javascript">alert ("Registration Completed")</script>';
include "login.php";
}
else{
    echo"query failed";
}
}
else{
    
    echo'<script type ="text/javascript">alert ("Confirm password should be same of password")</script>';
    echo"<script> window.location.href= 'registrationform.php'</script>";
}
mysqli_close($con);
}
}
?>
</body>
</html>
