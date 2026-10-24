<?php

function insertAt(array $numbers, int $index, int $value): array
{
    if (empty($numbers)) {
        return [$value];
    }

    if ($index >= count($numbers)) {
        $numbers[] = $value;

        return $numbers;
    }

    $arr = [];

    foreach ($numbers as $key => $number) {
        if ($key === $index) {
            $arr[] = $value;
        }

        $arr[] = $number;
    }

    return $arr;
}