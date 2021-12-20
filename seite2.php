<?php
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];
    
    if ($benutzername == "Sven" && $passwort == "Hallo") {
        echo "Herzlich Willkommen";
    } else {
        echo "Login fehlgeschlagen";
    }

    // Simuliert gehashtes Passwort aus Datenbank
    // $passwortAusDatenbank = password_hash("Test", PASSWORD_DEFAULT);

    // echo $passwortAusDatenbank;
    
    // if ($benutzername == "Sven" && password_verify($passwort, $passwortAusDatenbank)) {
    //     echo "Herzlich Willkommen";
    // } else {
    //     echo "Login fehlgeschlagen";
    // }
?>