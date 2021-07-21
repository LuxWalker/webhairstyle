<html>
<body>
<?php 
include "koneksi.php";
$query="SELECT * FROM whspay";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0)
{
 while($row =mysqli_fetch_array($result))
 {
  echo "NISN: " . $row["nisn"]."<br>";
 }
}
?>
</body>
</html>


" . $row["saldo"]."