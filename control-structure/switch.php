<?php
    /**
     * Supported in PHP 8.0
     */

    $score = 95;
    switch ($score) {
        case $score > 95 || $score == 100:
            echo "A+";
            break;
        case $score > 85:
            echo "A";
            break;
        case $score > 75:
            echo "B";
            break;
        case $score > 65:
            echo "C";
            break;
        case $score > 50:
            echo "D";
            break;
        default:
            echo "F";
            break;
    }


    // Match expression
//    $grade = match($score) {
//        $score > 95 => "A+",
//        $score > 85 => "A",
//        $score > 75 => "B",
//        $score > 65 => "C",
//        $score > 50 => "D",
//        default => "F"
//    };

    $grade = match($score) {
        100, 95 => "A+",
        90 => "A",
        85 => "B",
        75 => "C",
        65 => "D",
        default => "F"
    };

    echo $grade;

    /**
     * Difference between switch and match
     * 1. Match is an expression, switch is a statement
     * 2. Match is more strict than switch, match will throw an error if no match found (so you have to list all possible cases)
     * 3.1 Switch must have `default`, and if not cases found, execute default
     * 3.2 Match must have `default` keyword as well, to handle unmatched cases
     * 4. Match does not support fallthrough
     * 5. Switch supports fallthrough
     * 6. Match supports only values, switch supports values and expressions
     * 7. Match supports only equality `comparison`, switch supports `equality` and `comparison`
     * 8 Match compare with strict comparison `===`, switch compare with loose comparison `==`
     */

    // Match expression
    $b = 2;
    $a = match($b) {
        $b > 1 => "Greater than 1",
        $b > 2 => "Greater than 2",
        $b > 3 => "Greater than 3",
        default => "Less than 1"
    };


    echo $a;

