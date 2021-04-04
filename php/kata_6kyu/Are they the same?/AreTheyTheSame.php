<?php

function comp($a1,$a2) {
    $same = false;
    $square = function($n)
    {
        return $n * $n;
    };

    if(!is_null($a1) && !is_null($a2) && sizeof($a1) == sizeof($a2)){
        $a1 = array_map($square, $a1);
        sort($a1);
        sort($a2);

        if($a1 == $a2){
            $same = true;
        }
    }

    return $same;
}