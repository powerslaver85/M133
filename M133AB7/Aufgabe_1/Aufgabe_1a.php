<?php

//Title: Aufgabe_1a.php / Author: Ramon Schenk / M133AB07


$title = "<h2>M133 AB7 Aufgabe 1a</h2>"; //Titelzeile
$DB = "DB.txt"; //Filename
$newline = "\r\n"; //Eine Zeile, ein Datensatz.
$handle = fopen($DB, 'a'); //Zugang DB.txt mit append
$delimiter="|"; //Trennzeichen
$account=
            $_POST["txtBenutzername"] .
            $delimiter . $_POST["txtBenutzervorname"] .
            $delimiter . $_POST["txtPasswort"] . $newline;


echo $title;

//User in Datenbank aufnehmen
//Prüfe ob Datei beschreibbar ist mit is_writable
if (is_writable($DB)) {

    //Oeffne DB.txt und prüfe ob erfolgreich
    if (!$handle = fopen($DB, 'a')) {
        echo "($DB) konnte nicht geöffnet werden!";
        exit;
    }

    //starte fwrite und prüfe ob erfolgreich
    if (fwrite($handle, $account) === FALSE) {
        echo "Keine Schreibrechte auf ($DB)!";
        exit;
    }
    //Wenn fopen & fwrite erfolgreich waren rückmeldung an User geben.
    echo "Ihre Benutzerdaten: ($account) wurden erfolgreich in ($DB) geschrieben";
    //Schliesse DB File
    fclose ($handle);
    } else {
        //Rückmeldung an User wenn is_writable -> false
        echo "Die Datei $DB konnte nicht beschrieben werden";
}
?>