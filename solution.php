<?php

/*
 * Complete the 'minOperations' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER n as parameter.
 */

function getBit($number, $i)
{
    return ($number & (1<<$i)) == 0 ? 0 : 1;
}

function minOperations($number) {
    // Write your code here
    $i = 100; // Enough to handle all positive 32-bit integers
    $bit = getBit($number, $i); // First bit
    $res = $bit;
    do
    {
        $i--;
        $bit ^= getBit($number, $i);
        $res = ($res<<1) + $bit;
    }
    while($i>0);
    return $res;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
