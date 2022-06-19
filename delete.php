<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("config.php");
$l = "DELETE FROM donations WHERE donor_id=".$_GET['id'];
$do = mysqli_query($con,$l);
       
if(!$do )
{
    echo '<br>Hata:' . mysqli_error($con);
}
else
{
    echo "Kayıt Silindi!</br>";
    echo " <a href='deleteform.php'> Listele</a>\n";
}
mysqli_close($con);
?>
