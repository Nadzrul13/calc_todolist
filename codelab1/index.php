<?php
$star=10;
for( $a=$star;$a>0;$a--){
for($i=1; $i<=$a; $i++){
    echo "&nbsp";
}
for($a1=$star;$a1>=$a;$a1--){
    echo"*";
}
echo"<br>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="indeks.php">next</a>
</body>
</html>