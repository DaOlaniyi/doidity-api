<?php
$DB_HOST = "localhost";
$DB_USER = "appuser";
$DB_PASS = "Nm3i1=Fk1P@FZkci1O3?I@D";
$DB_NAME = "testdb";

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM people");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}

?>
