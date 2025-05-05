<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forth Examples</title>
    </head>
    <body>

    <?php 
        include 'forth.php';
        echo "<br/><br/><br/>";

        include "forth.class.php";
        $summed = new Forth();
        $summed->sumStatus();
        echo "<br/><br/><br/>";
    ?>

    </body>
</html>