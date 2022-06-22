<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("config.php");
$sq = "SELECT * FROM donations";
$ans = mysqli_query($con,$sq);
if(!$ans )
{
    echo '<br>Hata:' . mysqli_error($con);
}
echo "<table border=1>";
echo "<tr><th>donorID</th><th>zakat</th><th>sadaqah</th><th>releif</th><th>orphan</th><th>amount</th></tr>";
while($com=mysqli_fetch_array($ans))
{
    echo "<tr><td>".$com['donorID']."</td>";
    echo "<tr><td>".$com['zakat']."</td>";
    echo "<td>".$com['sadaqah']."</td>";
    echo "<td>".$com['releif']."</td>";
    echo "<td>".$com['orphan']."</td>";
    echo "<td>".$com['amount']."</td></tr>";   
  echo "<td><a href=delete.php?id=".$com['donorID'].">Delete</a></td></tr>";    
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
