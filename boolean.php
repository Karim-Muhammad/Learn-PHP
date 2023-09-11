<?php

    $is_complete = true;

    // Falsy Values
    // 0, -0, 0.0, -0.0, "", '', null, false, array(), $var(undefined), '0'

    if ($is_complete) {
        echo "Complete";
    } else {
        echo "Not Complete";
    }