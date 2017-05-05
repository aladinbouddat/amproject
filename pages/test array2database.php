<?php
$servername = "localhost";
$username = "user";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$test = array(
    "0" => array("name0", "location0", "musicstyle0"),
    "1" => array("name1", "location1", "musicstyle1"),
    "2" => array("name2", "location2", "musicstyle2"),
);



?>