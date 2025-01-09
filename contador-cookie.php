<?php
$count = $_COOKIE['count'];
if (isset($count)) {
    $count++;
} else {
    $count = 0;
}
setcookie('count', $count);
echo $count;
?>

contador-session.php

<?php
session_start(); //start session

$num = 0;
if (isset($_SESSION['num'])) {
    $num = $_SESSION['num'];
}

$_SESSION['num'] = ++$num;

echo $num;
?>

