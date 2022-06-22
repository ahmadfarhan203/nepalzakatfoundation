<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("config.php");
$e = "SELECT * FROM donations";
$ans= mysqli_query($con,$e);
if(!$ans)
{
    echo '<br>Hata:' . mysqli_error($con);
}
echo "<table border=1>";
echo "<tr><th>ID</th><th>Zakat Type</th><th>Sadaqah Jariyah</th><th>Releif</th><th>Orphan</th><th>Amount</th></tr>";
while($com=mysqli_fetch_array($ans))
{

    echo "<tr><td>".$com['donorID']."</td>";
    echo "<tr><td>".$com['zakat']."</td>";
    echo "<td>".$com['sadaqah']."</td>";
    echo "<td>".$com['releif']."</td>";
    echo "<td>".$com['orphan']."</td>";
    echo "<td>".$com['amount']."</td></tr>";    
}

echo "</table>";
mysqli_close($con);

?>

</body>
</html>
