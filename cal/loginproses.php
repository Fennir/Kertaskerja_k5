<html>

<body bgcolor="">
<?php
include('can.php');
$username=$_POST['username'];
$password=$_POST['password'];



echo "<br>";

$query="insert into loginpengguna values
('$username','$password')";
if (mysql_query($query)){
echo'<script>';
echo'alert ("Berjaya");';
echo'window.location.href=("maklumat.php");';
echo'</script>';}
else
{
echo'<script>';
echo'alert ("Tidak diterima");';
echo'window.location.href=("signupadmin.php");';
echo'</script>';
}
?>
</body>
</html>