<?php
// db.php-style connection
$mysqli = new mysqli("127.0.0.1", "appuser", "Nm3i1=Fk1P@FZkci1O3?I@D", "testdb");
if ($mysqli->connect_error) {
    die("DB error");
}

// insert into people(name, age)
$stmt = $mysqli->prepare(
    "INSERT INTO people (name, age) VALUES (?, ?)"
);

$name = $_GET['name'] ?? null;
$age  = $_GET['age']  ?? null;

if ($name === null || $age === null) {
    die("Missing parameters");
}

$stmt->bind_param("si", $name, $age);

$stmt->execute();

$stmt->close();
$mysqli->close();
echo($name . " added to testdb");
?>
