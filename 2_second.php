<?php

$text = "SEND MORE MONKEYS";
$key = "ACMSENDMOREMONK";

function encrypt($text, $key)
{
    $keyLength = strlen($key);
    $textLength = strlen($text);
    $output = '';

    for ($i = 0; $i < $textLength; $i++) {
        $output .= chr(((ord($text[$i]) + ord($key[$i % $keyLength])) % 26) + ord('A'));
    }

    return $output;
}

$output = encrypt($text, $key);
echo $output;
