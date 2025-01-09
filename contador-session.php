<?php
session_start(); //start session

$num = 0;
if (isset($_SESSION['num'])) {
    $num = $_SESSION['num'];
}

$_SESSION['num'] = ++$num;

echo $num;
?>

contador-fitxer.php
<?php
$contador = 0;

if ($fd = fopen('counter.txt', 'r')) {
    $contador = fgets($fd);
    fclose($fd);
}

$fd2 = fopen('counter.txt', 'w');
$contador = $contador + 1;
fwrite($fd2, $contador);
fclose($fd2);

echo $contador;
?>

