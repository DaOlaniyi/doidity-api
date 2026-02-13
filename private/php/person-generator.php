<?php

function get_data($url, $headers = []) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $response = curl_exec($ch);

    if ($response === false) {
        echo "Curl error: " . curl_error($ch);
        return null;
    }

     return $response;
}

$mysqli = new mysqli("127.0.0.1", "appuser", "Nm3i1=Fk1P@FZkci1O3?I@D", "testdb");
if ($mysqli->connect_error) {
    die("DB error");
}

$name_response = get_data("https://api.codetabs.com/v1/random/name");
$joke_response = get_data(
    "https://icanhazdadjoke.com/",
    ["Accept: application/json"]
);

$namedata = json_decode($name_response, true);
$jokedata = json_decode($joke_response, true);

$name = $namedata["name"];
$joke = $jokedata["joke"];
 
if (!$namedata || !$jokedata) {
    die("API failed");
}

// insert into people(name, age)
$stmt = $mysqli->prepare(
    "INSERT INTO jokes (name, joke) VALUES (?, ?)"
);


$stmt->bind_param("ss", $name, $joke);


$stmt->execute();

$stmt->close();
$mysqli->close();
?>

