<?php 
$file = fopen('counter.txt', 'w');
fclose($file);
$file = fopen('counter.txt', 'w');
fwrite($file,0,10);
fclose($file);
header('location:index.php');  
?>