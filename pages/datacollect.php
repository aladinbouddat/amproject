<?php

$url = "http://zuerich.usgang.ch/events.php";

// Zeichenfolge vor relevanten Einträgen
$startstring = "events.php\">";

// bis zum nächsten html tag bzw. Zeichenfolge nach relevanten Einträgen
$endstring = "<tr>";

$file = @fopen ($url,"r");

$i=0;
while (!feof($file)) {
$zeile[$i] = fgets($file,2000);
$i++;
}
fclose($file);

/*
// Nun werden die Daten entsprechend gefiltert.
$resultat = "";
for ($j=0;$j<$i;$j++) {
if ($resa = strstr($zeile[$j],$startstring)) {
$resb = str_replace($startstring, "", $resa);
$endstueck = strstr($resb, $endstring);
$resultat .= str_replace($endstueck,"",$resb);

}
}
*/
$string52 = fopen('Zwischenspeicher.txt',"w+") ;
fwrite($string52,implode($zeile));
print ($zeile[1016]);

/*$v =0;
$array = [];
for ($v=1016,$v<1047,$v++){


    }*/

?>