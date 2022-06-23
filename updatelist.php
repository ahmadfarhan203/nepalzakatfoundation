<?php

include("config.php");
extract($_POST);

$sql ="UPDATE donations ".
      "SET zakat='$zakat',sadaqah='$sadaqah',releif='$releif',orphan='$orphan',amount='$amount' ".
      "WHERE donor_id=".$_GET['donorID'];

$ans = mysqli_query( $con,$sql);
      
if(!$ans){
    echo '<br>Hata:' . mysqli_error($con);
}
else{
    echo "Kayıt Güncellendi.";
    echo " <br><a href='list.php'> Listele</a>\n";
}

mysqli_close($con);
?>
