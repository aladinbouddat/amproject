<?php

$htmlContent = file_get_contents("http://zuerich.usgang.ch/events.php");

$DOM = new DOMDocument();
$DOM->loadHTML($htmlContent);

$content = $DOM->getElementsByTagName('td');

$j=0;
foreach($content as $NodeHeader)
{
    $j+= 1;
    $Data[] = trim($NodeHeader->textContent);
    if ($j==106){break;}
}


$Delete = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 20);

foreach ($Delete as $D)
{
    unset($Data[$D]);
}

$FinalData = array_values($Data);

print_r($FinalData);


?>