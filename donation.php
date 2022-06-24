
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

if(isset($_POST['insert'])){
    include "config.php";
if(!$con){
    echo"connection failed";
}  
else{
    $email=$_POST['email'];
    $zakat=$_POST['zakat'];
    $sadaqah=$_POST['sadaqah'];
    $relief=$_POST['releif'];
    $orphan=$_POST['orphan'];
    $amount=$_POST['amount'];

    $d = "INSERT INTO donations (email,zakat,sadaqah,releif,orphan,amount)
          VALUES('{$email}','{$zakat}','{$sadaqah}','{$relief}','{$orphan}','{$amount}')";
	   

if(mysqli_query($con,$d)){
        echo'<script type ="text/javascript">alert ("Donation Completed")</script>';
        include "thankyou.php";
}
else{
    echo"query failed";
}

}
mysqli_close($con);
}

?>
</body>
</html>
