<?php
header('Content-Type: application/json');

echo json_encode([
  "ok" => true,
  "status" => "alive",
  "time" => date("c")
]);
