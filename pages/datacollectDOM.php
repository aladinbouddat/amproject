<?php
$url = "http://zuerich.usgang.ch/events.php";

	$htmlContent = file_get_contents("http://zuerich.usgang.ch/events.php");

	$DOM = new DOMDocument();
	$DOM->loadHTML($htmlContent);

	$Detail = $DOM.getElementsByClassName("inhalthell");
    print($Detail);
?>