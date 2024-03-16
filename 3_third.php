<?php

$x = intval(trim(fgets(STDIN)));
$y = intval(trim(fgets(STDIN)));

if ($x > 0) {
    $output = ($y > 0) ? "1" : "4";
} else {
    $output = ($y > 0) ? "2" : "3";
}

echo $output;
