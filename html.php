<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
        <!-- <?php echo "Karim's Site" ?>     -->
        <?php
            $x = 10;
            $y = 20;

            echo "$x + $y = ".($x+$y)."<br/>";
        ?>
        <?= "Karim's Site" ?> <!-- Shorthand for above -->    
    </h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, natus accusantium aut saepe labore ratione quia sit et optio odio dolor, assumenda a explicabo eligendi ab adipisci? Hic, quidem aperiam!</p>

    <!-- It is not good idea to mix your php with html -->
    <!-- you should separate your presentaion logic(HTML) and business logic(PHP) -->
    
</body>
</html>