<html>
<head><meta charset="utf-8"></head>
<body>
<?php

include("config.php");
$e = "SELECT * FROM donations";
$ans= mysqli_query($con,$e);
if(!$ans )
{
    echo '<br>Hata:' . mysqli_error($con);
}

//sorgudan com tüm kayitlari tablo içinde yazdiriyoruz.
//önce tablo başlıkları oluşturalım
echo "<table border=1>";
echo "<tr><th>Zakat Type</th><th>Sadaqah Jariyah</th><th>Releif</th><th>Orphan</th><th>Amount</th></tr>";

//veritabanından com cevabı satır satır alıyoruz.
while($com=mysqli_fetch_array($ans))
{
    // veritabanından com değerlerle tablo satırları oluşturalım
    echo "<tr><td>".$com['donor_id']."</td>";
    echo "<tr><td>".$com['zakat']."</td>";
    echo "<td>".$com['sadaqah']."</td>";
    echo "<td>".$com['releif']."</td>";
    echo "<td>".$com['orphan']."</td>";
    echo "<td>".$com['amount']."</td></tr>";    
}
// tablo kodunu bitirelim.
echo "</table>";

//veritabani baglantisini kapatiyoruz.
mysqli_close($con);

echo "To do more Donation please follow the link <a href='donationform.php'></a>\n";
?>

</body>
</html>
