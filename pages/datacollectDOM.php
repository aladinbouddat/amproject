<?php

$htmlContent = file_get_contents("http://bern.usgang.ch/events.php");

$DOM = new DOMDocument();
$DOM->loadHTML($htmlContent);

$content = $DOM->getElementsByTagName('td');

$header =  array('Party','Location','Musikstil','Acts','Zeit');

foreach($content as $NodeHeader)
{
    $aDataTableDetailHTML[] = trim($NodeHeader->textContent);
}
print_r($aDataTableDetailHTML);

foreach ($header as $tableheader)
{
    $aDataTableHeaderHTML[] = trim($tableheader->textContent);
}

$i = 0;
$j = 0;
foreach($content as $tablecontent)
{
    $aDataTableContentHTML[$j][] = trim($tablecontent->textContent);
    $i = $i + 1;
    $j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
}
print_r($aDataTableContentHTML); die();
?>