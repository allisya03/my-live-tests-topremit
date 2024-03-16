<?php

$input = 'Knutt-Morris-Pratt';
$explode = explode('-', $input);
foreach ($explode as $string) {
    $output[] = $string[0];
}

$output = strtoupper(implode('', $output));
echo $output;
