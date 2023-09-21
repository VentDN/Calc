<?php

function myCalculator($num1, $oper, $num2) {
    $sum;
    switch ($oper) {
        case "tambah":
            $sum = $num1 + $num2;
            break;
        case "kurang":
            $sum = $num1 - $num2;
            break;
        case "kali":
            $sum = $num1 * $num2;
            break;
        case "bagi":
            $sum = $num1 / $num2;
            break;
        case "eksp":
            $sum = $num1 ** $num2;
            break;
        default:
            $sum = "hitung sendiri";
            break;
    }
    return $sum;
}

$num1 = $_GET["num1"];
$oper = $_GET["oper"];
$num2 = $_GET["num2"];

echo "value: " . myCalculator($num1, $oper, $num2);

?>

