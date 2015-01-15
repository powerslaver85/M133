<?php
/*=============================================================
| Title: Aufgabe_2ab.php / Name: Ramon Schenk / Date: 17/10/14  |
 ============================================================*/
echo "<h1>M133 AB6 Aufgabe 1c</h1>";
  //Begrüssungstext bzw. Einleitung
  $begruessung="Sie haben folgende Daten in der Anmeldung eingetragen:";
  echo $begruessung . "<br />";




    //Userdaten in Assoziativen Array ausgelagert
    $benutzerdaten = array(
      "Name"        =>  $name=$_POST["txtBenutzername"],
      "Vorname"     =>  $vorname=$_POST["txtBenutzervorname"],
      "Adresse"     =>  $adresse=$_POST["txtBenutzeradresse"],
      "Passwort"    =>  $pwd=$_POST["txtPasswort"]
);

//Ausgabe Usereingabe Array
foreach ($benutzerdaten as $key => $pair) {
echo "$key:  $pair" . "<br>";
}

?>


