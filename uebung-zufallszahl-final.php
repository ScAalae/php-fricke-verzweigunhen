<?php
    $zufallszahl = rand(0, 10);

    if ($zufallszahl < 5) {
        $vergleich = "<b>kleiner</b> als";
    } else if ($zufallszahl > 5) {
        $vergleich = "<b>grösser</b> als";
    } else {
        $vergleich = "<b>gleich</b>";
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zufallszahl</title>
    </head>
    <body>
    <h1>Zufallszahl</h1>
    <?php
        echo "Die Zahl " . $zufallszahl . " ist " . $vergleich . " 5.";
    ?>
    </body>
</html>