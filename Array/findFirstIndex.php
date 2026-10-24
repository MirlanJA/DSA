<?php

function findFirstIndex(array $numbers, int $target): ?int
{
    foreach ($numbers as $index => $number) {
        if ($number === $target) {
            return $index;
        }
    }

    return null;
}