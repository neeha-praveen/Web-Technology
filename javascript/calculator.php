<?php
$a = $_POST['tb1'];
$a = (int)$a;
$b = $_POST['tb2'];
$b = (int)$b;
$op = $_POST['operation'];

switch($op){
    case 'sum':
        echo $a+$b;
        break;
    case 'diff':
        echo $a-$b;
        break;
    case 'prod':
        echo $a * $b;
        break;
    case 'quot':
        echo $a / $b;
        break;
    default:
        echo 'invalid';
}
?>