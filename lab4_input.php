<?php

$json = file_get_contents('php://input');

$data = json_decode($json, true);

echo "Username: " . $data["username"] . "<br>";
echo "Password: " . $data["password"];

?>