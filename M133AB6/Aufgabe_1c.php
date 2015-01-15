<?php
/*=============================================================
| Title: Aufgabe_1c.php / Name: Ramon Schenk / Date: 17/10/14  |
 ============================================================*/
echo "<h1>M133 AB6 Aufgabe 1c</h1>";

//Initialisiere Array mit Wochentagen => Assoziativ
$wochentag = array(
    "Mo"  => "Montag",
    "Di"  => "Dienstag",
    "Mi"  => "Mittwoch",
    "Do"  => "Donnerstag", //Do ist von PHP reserviert
    "Fr"  => "Freitag",
    "Sa"  => "Samstag",
    "So"  => "Sonntag",
    "911" => "Lord Schenk Gedenktag"
);

//Count Funktion gibt die Anzahl Array Einträge aus
$anzahl = count($wochentag);
echo "Anzahl Wochentage mit Count: $anzahl <br>";

//Ausgabe mit foreach
$index = 0; //index dient als Zähler
foreach ($wochentag as $key=>$val) {
    //Bei jedem Durchgang mit foreach wird index inkrementiert
    $index++;
}
//Ausgabe Wochentage foreach
echo "Anzahl Wochentag mit foreach: $index" . "<br>";

//Ausgabe mit var_dump
//var_dump($wochentag);

//Ausgabe mit print_r
//print_r ( $wochentag );

?>