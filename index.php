<?php
$base36 = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$first = '1';
$second = '9';
$firstCorrectValue = 0;
$secondCorrectValue = 0;
echo 'First symbol: ' . $first . '</br>';
echo 'Second symbol: ' . $second . '</br>';
for ($i = 0; $i < strlen($base36); $i++) {
    if ($first == $base36[$i]) {
        $first = $i;
        $firstCorrectValue++;
    }
    if ($second == $base36[$i]) {
        $second = $i;
        $secondCorrectValue++;
    }
}
if ($firstCorrectValue == 1 && $secondCorrectValue == 1) {
    $total = $first + $second;
    if ($total >= strlen($base36)) {
        $prefix = 0;
        while ($total >= strlen($base36)) {
            $total -= strlen($base36);
            $prefix++;
        }
        echo 'Sum: ' . $prefix . $base36[$total];
    } else {
        echo 'Sum: ' . $base36[$total];
    }
} else {
    echo 'Incorrect entered value(s)!';
}