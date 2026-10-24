<?php

function analyzeEvenNumbers(array $numbers): array
{
    $sum = 0;
    $count = 0;
    foreach ($numbers as $number) {
        if ( $number % 2 === 0) {
            $sum += $number;
            $count++;
        }
    }

    return [
        'sum' => $sum,
        'count' => $count,
    ];
}