<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forth Examples</title>
    </head>
    <body>

    <?php 

        // call straight up php script file
        include 'forth.php';
        echo "<br/><br/><br/>";

        // call forth class file
        include "forth.class.php";
        $summed = new Forth();
        $summed->sumStatus();
        echo "<br/><br/><br/>";

        // call forth apikey file
        include "forth.apikey.php";
    ?>

    </body>
</html>