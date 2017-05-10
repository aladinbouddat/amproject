<?php

$htmlContent = file_get_contents("http://zuerich.usgang.ch/events.php");
$DOM = new DOMDocument();
$DOM->loadHTML($htmlContent);

$content = $DOM->getElementsByTagName('td');

$j=0;
$c=0;

foreach($content as $NodeHeader)
{   $j+= 1;
    $Data[] = trim($NodeHeader->textContent);}
$Delete = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 20);

foreach ($Delete as $D)
{    unset($Data[$D]);}

$key = array_search("© cinergy in Partnerschaft mit usgang.ch, Kalendereinträge/-promotion über eventbooster.ch", $Data);

foreach ($Data as $D)
{    unset($Data[$key+$c]);
    $c+=1;}

$FinalData = array_values($Data);
?>