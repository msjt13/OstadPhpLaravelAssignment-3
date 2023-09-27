<?php
$numbers = range(1, 10);

function removeEvenNumbers($numbers) {
    $result = array_filter($numbers, function($number) {
        return $number % 2 != 0;
    });
    print_r($result);
}

removeEvenNumbers($numbers);