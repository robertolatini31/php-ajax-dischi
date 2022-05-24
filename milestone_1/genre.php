<?php

$genres = [
    "jazz",
    "metal",
    "pop",
    "rock",
];


header ('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($genres);