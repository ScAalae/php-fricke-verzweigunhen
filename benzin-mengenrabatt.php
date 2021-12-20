<?php

$liter = (double) $_POST["liter"];
$sorte = strip_tags($_POST["sorte"]);

if ( $sorte == "N" ) {
    $sorte = "Normal";
    $betrag = $liter * 1.38;
} else {
    $sorte = "Super";
    $betrag = $liter * 1.46;
}

if ( $liter >= 100 ) {
    $betrag = $betrag * 0.98;
}

echo "$liter Liter $sorte kosten " .  number_format($betrag, 2, ',', ' ') . " €.";

?>