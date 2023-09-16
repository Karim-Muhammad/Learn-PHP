<?php
    // 1#

    $ar = [1,1,2,3,4,5,5,51,1,1,3];
    $rs = [];
    foreach($ar as $a) {
        $rs[$a] = true;
    }

    print_r(array_keys($rs));


    // 2#
    $st = "eraasoft";
    // $array = explode("", $st); // Throw an Error, separator cannot be empty

    // so we use str_split() return array
    $array = str_split($st);

    // chunks_split() used with string and _return a string_ as well
    $chunk_st = chunk_split($st, 1, '-'); // 1 is the length of each chunk
    print_r($array);

    // array
    $arr = [1,2,3];
    // $arr2 = chunk_split($arr, 1, '-'); // Error, should string not array


    // array_chunk() return array