<?php

$url = "http://zuerich.usgang.ch/events.php";

// Zeichenfolge vor relevanten Einträgen
$startstring = "<table width=\"610\" cellpadding=\"0\" cellspacing=\"0\" class=\"nomargin\">";

// bis zum nächsten html tag bzw. Zeichenfolge nach relevanten Einträgen
$endstring = "</table>";

$file = @fopen ($url,"r");

$i=0;
while (!feof($file)) {

// Wenn das File entsprechend groß ist, kann es unter Umständen
// notwendig sein, die Zahl 2000 entsprechend zu erhöhen. Im Falle
// eines Buffer-Overflows gibt PHP eine entsprechende Fehlermeldung aus.

$zeile[$i] = fgets($file,200000);
$i++;
}
fclose($file);


// Nun werden die Daten entsprechend gefiltert.
$resultat = "";
for ($j=0;$j<$i;$j++) {
if ($resa = strstr($zeile[$j],$startstring)) {
$resb = str_replace($startstring, "", $resa);
$endstueck = strstr($resb, $endstring);
$resultat .= str_replace($endstueck,"",$resb);

}
}

// Ausgabe der Daten
//echo print_r ($resa);
//echo ($resultat);

$string52 = fopen('Zwischenspeicher.txt',"w+") ;
fwrite($string52,implode($zeile));
print ($string52);

?>