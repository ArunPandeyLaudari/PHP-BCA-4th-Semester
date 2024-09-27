<?php

// function squre($val)
// {
//     return sqrt($val);
// }

// echo squre(16);


function factorial()
{
    $fact = 1;
    for ($i = 1; $i <= 5; $i++) {

        $fact = $fact * $i;
    }
    echo $fact;
}

factorial();
