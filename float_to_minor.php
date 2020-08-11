<?php

/**
 * function to convert float amount to minor units (12 - digits)
 * @param float $amount
 * @return integer
 */
function floatToMinor(float $amount):int
{
    $minor = "Amount should be of type float";
    $amount = number_format($amount, 2, '.', '');
    $number = $amount * 100;
    $zeros = 12 - strlen($number);
    $padding = '';

    for($i=0; $i<$zeros; $i++) {
        $padding .= '0';
    }
    $minor = $padding.$number;

    return $minor;
}