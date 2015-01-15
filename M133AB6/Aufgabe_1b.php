<?php
/*=============================================================
| Title: Aufgabe_1b.php / Name: Ramon Schenk / Date: 17/10/14  |
 ============================================================*/
echo "<h1>M133 AB6 Aufgabe 1b</h1>";
//Initialisiere Array mit Wochentagen => Assoziativ
$wochentag = array(
    "Mo"  => "Montag",
    "Di"  => "Dienstag",
    "Mi"  => "Mittwoch",
    "Do"=> "Donnerstag", //Do ist von PHP reserviert
    "Fr"  => "Freitag",
    "Sa"  => "Samstag",
    "So"  => "Sonntag",
    "911" => "Lord Schenk Gedenktag"
);

//Ausgabe mit var_dump
var_dump($wochentag);

//Ausgabe mit print_r
print_r ($wochentag);

//Ausgabe mit foreach
foreach ($wochentag as $value) {
    echo $value . "<br>";
}

?>