<?php

$htmlContent = file_get_contents("http://zuerich.usgang.ch/events.php");

$DOM = new DOMDocument();
$DOM->loadHTML($htmlContent);

$content = $DOM->getElementsByTagName('td');


foreach($content as $NodeHeader)
{
    $Data[] = trim($NodeHeader->textContent);
}


$delete[] = [0,1,2,3,4,5,6,7,8,9,20];

foreach ($delete as $d)
{
    unset($Data[$d]);
}

//unset($Data[0], $Data[1], $Data[2], $Data[3], $Data[4], $Data[5], $Data[6], $Data[7], $Data[8], $Data[9], $Data[20], $Data[31], $Data[32], $Data[33], $Data[34], $Data[35], $Data[36], $Data[47], $Data[56], $Data[136], $Data[236], $Data[276], $Data[321] );

print_r($Data);

$header =  array('Party','Location','Musikstil','Acts','Zeit');

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