<?php

session_start();

$counter = fopen(__DIR__ . '/hits.txt', 'c+');
$counter_unique = fopen(__DIR__ . '/hits_unique.txt', 'c+');

$hits = stream_get_contents($counter);
$unique_hits = stream_get_contents($counter_unique);

rewind($counter);
rewind($counter_unique);

$hits++;
if (flock($counter, LOCK_EX)) {
    fwrite($counter, $hits);
}
fclose($counter);

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = true;
    $unique_hits++;
    if (flock($counter_unique, LOCK_EX)) {
        fwrite($counter_unique, $unique_hits);
    }
}

fclose($counter_unique);
