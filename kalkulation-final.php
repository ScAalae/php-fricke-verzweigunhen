<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Übersicht Bestellung</title>
    <style>
        table { 
            border-collapse: collapse; 
        }

        td {
            padding: 10px;
        }

        .border-bottom td {
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>

<?php

$preis = null;
$anzahl = null;
$rabatt = null;
$steuersatz = null;
$raten = null;
$gesamtNetto = null;
$gesamtNettoRabbatiert = null;
$monatlich = null;
$warnung = "";

// Werte aus dem $_POST Array auslesen
$preis = (double) str_replace(",", ".", $_POST['preis']);
$rabatt = (double) str_replace(",", ".", $_POST['rabatt']);
$steuersatz = (double) str_replace(",", ".", $_POST['steuersatz']);

$anzahl = (int) $_POST['anzahl'];
$raten = (int) $_POST['raten'];

// Gesamtkosten vor Steuern berechnen
$gesamtNetto = $preis * $anzahl;
$gesamtNettoRabbatiert = $gesamtNetto - $rabatt;

// Den Steuerfaktor berechnen
$steuerFaktor = 1 + ($steuersatz / 100);

// Alternative Berechnung Steuer
$steuerBetrag = ($gesamtNettoRabbatiert / 100) * $steuersatz;

// Gesamtkosten nach Steuern berechnen 
$gesamt = $gesamtNettoRabbatiert * $steuerFaktor;

// Monatsraten berechnen
$monatlich = $gesamt / $raten;

// Eingaben überprüfen
if ($preis <= 0) {
    $warnung = "Bitte geben Sie einen gültigen Preis ein.<br> ";
    $preis = 0;
} 

if ($rabatt <= 0 || $preis <= $rabatt) {
    $warnung .= "Bitte geben Sie einen gültigen Rabatt ein.<br> ";
    $rabatt  = 0;
}

if ($steuersatz <= 0) {
    $warnung .= "Bitte geben Sie einen gültigen Steuersatz ein.";
    $steuersatz = 0;
} 

if ( !empty($warnung) ) {
    echo "<h3 style=\"color:red;\">$warnung</h3>";
} else {

?>

<h4>Ihre Berechnung:</h4>

<table>
    <tr>
        <td><?php echo $anzahl; ?></td>
        <td>Produkte</td>
    </tr>
    <tr class="border-bottom">
        <td><?php echo number_format($preis, 2, ',', ' '); ?> €</td>
        <td>Netto Einzelpreis</td>
    </tr>
    <tr>
        <td><?php echo number_format($gesamtNetto, 2, ',', ' '); ?> €</td>
        <td>Netto Gesamtpreis vor Rabatt</td>
    </tr>
    <tr class="border-bottom">
        <td><?php echo number_format($rabatt, 2, ',', ' '); ?> €</td>
        <td>Rabatt in €</td>
    </tr>
    <tr>
        <td><?php echo number_format($gesamtNettoRabbatiert, 2, ',', ' '); ?> €</td>
        <td>Netto Gesamtpreis nach Rabatt</td>
    </tr>
    <tr>
        <td><?php echo number_format($steuersatz, 2, ',', ' '); ?> %</td>
        <td>Mehrwertsteuer</td>
    </tr>
    <tr class="border-bottom">
        <td><?php echo number_format($steuerBetrag, 2, ',', ' '); ?> €</td>
        <td>Betrag Mehrwertsteuer</td>
    </tr>
    <tr>
        <td><?php echo number_format($gesamt, 2, ',', ' '); ?> €</td>
        <td>Brutto Gesamtpreis</td>
    </tr>
    <tr class="border-bottom">
        <td><?php echo $raten; ?></td>
        <td>Monatsraten</td>
    </tr>
    <tr>
        <td><?php echo number_format($monatlich, 2, ',', ' '); ?>€</td>
        <td>Monatliche Rate</td>
    </tr>
</table>
<?php } ?>
</body>
</html>