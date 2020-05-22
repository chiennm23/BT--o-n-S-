<?php

function binarySearch($numbers, $number)
{
    $low = 0;
    $high = count($numbers) - 1;

    while ($low < $high) {
        $mid = floor(($low + $high) / 2);
        if ($numbers[$mid] < $number) {
            $low = $mid + 1;
        } else if ($numbers[$mid] > $numbers) {
            $high = $mid - 1;
        } else {
            return true;
        }
    }
    return false;
}

