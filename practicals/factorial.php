<?php
function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Replace the number below with the one for which you want to calculate the factorial.
$number = 5;
$fact = factorial($number);
echo "Factorial of $number is $fact";
?>

