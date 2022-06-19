<?php
//mysql$con kodunu ekliyoruz
include("config.php");

//degiskenleri formdan aliyoruz
extract($_POST);

//sorguyu hazirliyoruz
$sql ="UPDATE donations ".
      "SET zakat='$zakat',sadaqah='$sadaqah',releif='$releif',orphan='$orphan',amount='$amount' ".
      "WHERE donor_id=".$_GET['donor_id'];
//sorguyu veritabanina gönderiyoruz.
$ans = mysqli_query( $con,$sql);

//eger ans FALSE ise hata yazdiriyoruz.      
if(!$ans){
    echo '<br>Hata:' . mysqli_error($con);
}
else{
    echo "Kayıt Güncellendi.";
    echo " <br><a href='list.php'> Listele</a>\n";
}

//veritabani$consini kapatiyoruz.
mysqli_close($con);
?>
