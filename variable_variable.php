<?php

    // Variable Variable
    $variableName = '_variable';
    $$variableName = 'variable-value1';
    
    echo $_variable;
    echo "<br />";


    // NOTICE
    echo "$variableName| $$variableName| {$$variableName}| ${$variableName}| $_variable";
    