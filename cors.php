<?php
    header('Access-Control-Allow-Origin: https://johnfrncsbnfcio.github.io/practiceapi/*');
    header('Content-Type: application/json; charset=utf-8');
    die(file_get_contents('index.json'));
?>
