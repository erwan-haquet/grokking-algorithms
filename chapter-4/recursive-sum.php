<?php

function sum($array)
{
    if (empty($array)) {
        return 0;
    }

    if (count($array) === 1) {
        return $array[0];
    }

    $firstValue = array_pop($array);


    return $firstValue + sum($array);
}

// remove the name of the script
array_shift($argv);
print_r(sum($argv));
