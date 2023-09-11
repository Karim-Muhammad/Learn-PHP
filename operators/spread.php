<?php

    /**
     * Spread Operator
     * Article: https://stackoverflow.com/questions/45419150/php-spread-syntax-in-array-declaration
     * Syntax: ...$array
     */


    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];
    $result = [...$arr1, ...$arr2];
    print_r($result);

    echo "<br/>";


    function add(...$array) {
        foreach($array as $value) {
            echo $value . "<br/>";
        }
    }

