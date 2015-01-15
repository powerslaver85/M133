<?php
/*=============================================================
| Title: Aufgabe_2a.php / Name: Ramon Schenk / M133AB07       |
============================================================*/
$DB = "DB.txt";
$handle = fopen($DB, "r");


while (!feof($handle)) {

    $zeile = fgets($handle);
    print $zeile . "<BR>";

}



fclose($handle);
echo <<< EOT
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-0ord{text-align:right}
.tg .tg-ifyx{background-color:#D2E4FC;text-align:right}
.tg .tg-s6z2{text-align:center}
.tg .tg-vn4c{background-color:#D2E4FC}
</style>
<table class="tg">
  <tr>
    <th class="tg-s6z2" colspan="6">Benutzer aus DB.txt</th>
  </tr>
  <tr> <!-- Header -->
    <td class="tg-vn4c">Name</td>
    <td class="tg-vn4c">Vorname</td>
    <td class="tg-vn4c" colspan="4">Passwort</td>
  </tr>
  <tr> <!-- User 1 -->
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-0ord" colspan="4"></td>
  </tr>
  <tr> <!-- User 2 -->
    <td class="tg-vn4c"></td>
    <td class="tg-vn4c"></td>
    <td class="tg-ifyx" colspan="4"></td>
  </tr>
  <tr> <!-- User 3 -->
    <td class="tg-031e"></td>
    <td class="tg-031e"></td>
    <td class="tg-0ord" colspan="4"></td>
  </tr>
</table>
EOT;
?>