<?php

session_start();

$counter = __DIR__ . '/hits.txt';
$counter_unique = __DIR__ . '/hits_unique.txt';

$hits = file_get_contents($counter);
$unique_hits = file_get_contents($counter_unique);

$hits++;
file_put_contents($counter, $hits);

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = true;
    $unique_hits++;
    file_put_contents($counter_unique, $unique_hits);
}
