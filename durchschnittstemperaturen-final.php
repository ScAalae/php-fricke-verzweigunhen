<?php

$durchschnittApril = 12;

$durchschnittKW14 = (9 + 11 + 10 + 12 + 10 + 9 + 8) / 7;
$durchschnittKW15 = (11 + 13 + 10 + 11 + 12 + 11 + 13) / 7;
$durchschnittKW16 = (11 + 13 + 12 + 14 + 10 + 13 + 11) / 7;
$durchschnittKW17 = (13 + 15 + 15 + 13 + 14 + 15 + 16) / 7;

echo $durchschnittKW14;
echo "<br>";
echo number_format($durchschnittKW14, 2, ",", "");
echo "<br>";
echo $durchschnittKW15;
echo "<br>";
echo number_format($durchschnittKW15, 2, ",", "");
echo "<br>";
echo $durchschnittKW16;
echo "<br>";
echo number_format($durchschnittKW16, 2, ",", "");
echo "<br>";
echo $durchschnittKW17;
echo "<br>";
echo number_format($durchschnittKW17, 2, ",", "");

echo "<hr>";

if ($durchschnittKW14 < $durchschnittApril) {
    echo "Dieser Wert liegt unter dem Durchschnittswert im April: " . number_format($durchschnittKW14, 2, ",", "");
} else if ($durchschnittKW14 > $durchschnittApril) {
    echo "Dieser Wert liegt über dem Durchschnittswert im April: " . number_format($durchschnittKW14, 2, ",", "");
} else if ($durchschnittKW14 == $durchschnittApril) {
    echo "Dieser Wert entspricht dem Durchschnittswert im April: " . number_format($durchschnittKW14, 2, ",", "");
} 

echo "<br>";

if ($durchschnittKW15 < $durchschnittApril) {
    echo "Dieser Wert liegt unter dem Durchschnittswert im April: " . number_format($durchschnittKW15, 2, ",", "");
} else if ($durchschnittKW15 > $durchschnittApril) {
    echo "Dieser Wert liegt über dem Durchschnittswert im April: " . number_format($durchschnittKW15, 2, ",", "");
} else if ($durchschnittKW15 == $durchschnittApril) {
    echo "Dieser Wert entspricht dem Durchschnittswert im April: " . number_format($durchschnittKW15, 2, ",", "");
} 

echo "<br>";

if ($durchschnittKW16 < $durchschnittApril) {
    echo "Dieser Wert liegt unter dem Durchschnittswert im April: " . number_format($durchschnittKW16, 2, ",", "");
} else if ($durchschnittKW16 > $durchschnittApril) {
    echo "Dieser Wert liegt über dem Durchschnittswert im April: " . number_format($durchschnittKW16, 2, ",", "");
} else if ($durchschnittKW16 == $durchschnittApril) {
    echo "Dieser Wert entspricht dem Durchschnittswert im April: " . number_format($durchschnittKW16, 2, ",", "");
} 

echo "<br>";

if ($durchschnittKW17 < $durchschnittApril) {
    echo "Dieser Wert liegt unter dem Durchschnittswert im April: " . number_format($durchschnittKW17, 2, ",", "");
} else if ($durchschnittKW17 > $durchschnittApril) {
    echo "Dieser Wert liegt über dem Durchschnittswert im April: " . number_format($durchschnittKW17, 2, ",", "");
} else if ($durchschnittKW17 == $durchschnittApril) {
    echo "Dieser Wert entspricht dem Durchschnittswert im April: " . number_format($durchschnittKW17, 2, ",", "");
} 

?>