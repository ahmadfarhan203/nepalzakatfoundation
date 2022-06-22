<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
include("config.php");
$email=$_POST['email'];
$zakat=$_POST['zakat'];
$sadaqah=$_POST['sadaqah'];
$relief=$_POST['releif'];
$orphan=$_POST['orphan'];
$amount=$_POST['amount'];

$d="INSERT INTO donations". 
"(email,zakat,sadaqah,releif,orphan,amount)" . 
 "VALUES('$email','$zakat','$sadaqah','$relief','$orphan','$amount')";
	   
echo "<br/>";
$x=mysqli_query($con,$d);     
if(!$x)
{
    echo '<br>Error:' . mysqli_error($con);
}
else
{
 echo '';
}
header("location:thankyou.php");
mysqli_close($con);
?>
</body>
</html>
