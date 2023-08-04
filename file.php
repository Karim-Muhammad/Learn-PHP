<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "HTML File" ?> 
    <!-- Don't forget to close, else it will compile </body> as PHP code! -->
</body>
</html>

<!-- <?php echo "Don't need to close tag"?> -->
<?php echo "Don't need to close tag";

// since it is just PHP code, so you don't need closing tag
// but we notice this comment of PHP not HTML

// in fact you shouldn't close your tag when your file 100% php code

// because if you write some things, or whitespaces, newlines after close tag
// it will mess your website, because all of that will be appear in page as well, although it is outside php tag

// that's called output buffer
// so to avoid this, don't close your tag, if your code 100% php