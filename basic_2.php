<?php
function positiveNegativeZero($arr)
{
    $len = count($arr);

    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] > 0) {
            $positiveCount++;
        } else if ($arr[$i] < 0) {
            $negativeCount++;
        } else if ($arr[$i] == 0) {
            $zeroCount++;
        }
    }

    echo number_format($positiveCount / $len, 4) . " ";
    echo number_format($negativeCount / $len, 4) . " ";
    echo number_format($zeroCount / $len, 4);
}

$a1 = [2, -1, 5, 6, 0, -3];
positiveNegativeZero($a1);
$a2 = [4, 0, -2, -9, -7, 1];
positiveNegativeZero($a2);

?>
