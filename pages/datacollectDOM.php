<?php

$htmlContent = file_get_contents("http://zuerich.usgang.ch/events.php");

$DOM = new DOMDocument();
$DOM->loadHTML($htmlContent);

$content = $DOM->getElementsByTagName('tbody');
?>