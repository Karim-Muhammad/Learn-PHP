if your file is PHP code only, so you not needed to close tag with ?>

just <?php

why?
because after ?> if there is new lines of spaces
it may be occur some issue in something called 'output Buffer'

in general don't close php tag, if it is just PHP code

like in file.php

<!-- Short Tag -->
<?="Echo with short-tag"> but maybe this feature is disabled
so you should enable it in configuration file, but it is not recommended to use it