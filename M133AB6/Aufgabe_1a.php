<?php
/*=============================================================
| Title: Aufgabe_1a.php / Name: Ramon Schenk / Date: 17/10/14  |
 ============================================================*/
echo "<h1>M133 AB6 Aufgabe 1a</h1>";
//Initialisiere Array mit Wochentagen
$wochentag = array( "Montag",
                    "Dienstag",
                    "Mittwoch",
                    "Donnerstag",
                    "Freitag",
                    "Samstag",
                    "Sonntag",
                    "Lord Schenk Gedenktag"
);
/*
 * Lösung mit foreach
 *
foreach ($wochentag as $value) {
    echo $value . "\r\n";
}
*/

//Lösung mit for
for ($i=0; $i<8; $i++) {
    echo $wochentag[$i] . "\r\n<br>"; //\r\n -> Zeilenumbruch
}
?>