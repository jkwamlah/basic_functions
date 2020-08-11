<?php

/**
 * function to read .csv file and return row with corresponding columns
 */
function read_bank_code()
{
    $file = fopen('file.csv', 'r');

    while (!feof($file)) {

        [$code, $bank] = explode(',' , fgets($file));

        if($code) {
            echo $code .' => '. $bank;
        }
    }

    fclose($file);
}