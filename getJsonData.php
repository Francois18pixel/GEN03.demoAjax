<?php


function getJsonData(string $filename) {
    $contents = file_get_contents('$filename');
    $contents = utf8_encode($contents);
    $results = json_decode($contents);


    var_dump($results);
}