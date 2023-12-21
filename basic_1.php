<?php 

function miniMaxSum($arr)
{
    $sum = array_sum($arr);
    $min = $sum;
    $max = 0;
    foreach ($arr as $key => $val) {
        $excluded_sum = $sum - $val;
        if ($max < $excluded_sum) {
            $max = $excluded_sum;
        }
        if ($min > $excluded_sum) {
            $min = $excluded_sum;
        }
    }
    echo $min . ' ' . $max;
}

$arr = [1, 2, 3, 4, 5];
miniMaxSum($arr);
?>
