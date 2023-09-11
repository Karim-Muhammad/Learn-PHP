<?php

    // Variable Variable
    $variableName = '_variable';
    $$variableName = 'variable-value1';

    echo $_variable;
    echo "<br />";

    // Variable Function
    function greeting() {
        echo "Hello World";
    }

    $functionName = 'greeting';
    $functionName();

    echo "<br />";


    $func = "echo";