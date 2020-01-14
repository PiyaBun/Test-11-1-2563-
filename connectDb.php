<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "urlshort";
 
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName) or die('ไม่สามารถติดต่อได้'.mysqli_connect_error());
echo "Database Connected.";
?>