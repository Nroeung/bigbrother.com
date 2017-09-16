<?php
$var1 = $_GET['user'];
$var2 = $_GET['pass'];
echo "$var1";
echo "$var2";
$user = "root";
$pass = "2wire";

echo "$user";
$URL="home.php";
if (($var1===$user) && ($var2===$pass)){
  $URL="home.php";
  header ("Location: $URL");
}else {
    $URL="login.php";
    header ("Location: $URL");
}
 ?>
