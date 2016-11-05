<?php 
$string = $_POST['campo'];
$md5 = md5($string);
header("Location: index.php?md5=$md5");
?>