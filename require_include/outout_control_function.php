<?php

    // 1#
    // $navbar = include "./partials/nav.php";

    // var_dump($navbar); int(1)
    // echo $navbar; // 1

    // 2#
    ob_start();
    include "./partials/nav.php";
    $navbar = ob_get_clean();

    var_dump($navbar);

    // because we may need replace some part of this string to another string