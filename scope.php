<?php
    // IMPORTANT (Need study)
    
    // Global Scope, cannot be accessed inside a function! (strange!)
    $x = 1;
    $y = 2;

    function test() {
        global $x, $y; // to access global access inside a function
        
        echo "X = $x";
        echo "Global X = $x";
    }

    function test2() {
        
        $x = 3; // Local Scope
        $y = 4;
        
        echo "X = $x";
        echo "Global X = $x";
    }


    function printinDom($name) {
        echo "<p> Hello, $name</p>";
    }

    printinDom("Karim");

    