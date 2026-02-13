<?php
// db.php-style connection
$mysqli = new mysqli("127.0.0.1", "appuser", "Nm3i1=Fk1P@FZkci1O3?I@D", "testdb");
if ($mysqli->connect_error) {
    die("DB error");
}

// insert into people(name, age)
$stmt = $mysqli->prepare(
    "INSERT INTO `dates-active` (`date`, `status`) VALUES (?, ?)"
);

$date = date("n/j/Y g:ia", time());
$status  = "ACTIVE";


$stmt->bind_param("ss", $date, $status);

$stmt->execute();

$stmt->close();
$mysqli->close();
?>
