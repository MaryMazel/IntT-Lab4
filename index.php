<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lb4</title>
</head>
<body>
<h2>Счётчик показов страницы</h2>

<?php
$file = fopen('counter.txt', 'r');
$point = fgets($file,10);
$counter;
fclose($file);
if(!$point){
    $file = fopen('counter.txt', 'w');
    $counter = 1;
    fwrite($file,1,10);
    fclose($file);
}
else{
    $file = fopen('counter.txt', 'w');
    $counter = (int)$point;
    $counter++;
    fclose($file);
    $file = fopen('counter.txt', 'w');
    fwrite($file,$counter,10);
}

?>
    

<p>Данная страница была показана <?php echo $counter;?> раз(а)</p>
<form action="clean.php">
<button>Очистить счётчик</button>
</form>



</body>
</html>