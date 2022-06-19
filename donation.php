
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
//mysql baglanti kodunu ekliyoruz 
include("config.php");
$zakat=$_POST['zakat'];
$sadaqah=$_POST['sadaqah'];
$relief=$_POST['releif'];
$orphan=$_POST['orphan'];
$amount=$_POST['amount'];


//sorguyu hazirliyoruz
$d="INSERT INTO donations". 
"(zakat,sadaqah,releif,orphan,amount)" . 
 "VALUES('$zakat','$sadaqah','$relief','$orphan','$amount')";
	   
echo "<br/>";
//sorguyu veritabanina gönderiyoruz.
$x=mysqli_query($con,$d);

//eger cevap FALSE ise hata yazdiriyoruz.      
if(!$x)
{
    echo '<br>Hata:' . mysqli_error($con);
}
else
{
 echo 'bagis yapildi';
}
header("location:thankyou.php");
//veritabani baglantisini kapatiyoruz.
mysqli_close($con);
?>
</body>
</html>
