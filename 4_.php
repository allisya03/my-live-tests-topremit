<?php

$message = "E HHHeellloWooorrrrlld!!";

function encode($message)
{
    $encoded = '';
    $count = 1;

    for ($i = 1; $i < strlen($message); $i++) {
        if ($message[$i] === $message[$i - 1]) {
            $count++;
        } else {
            $encoded .= $message[$i - 1] . $count;
            $count = 1;
        }
    }

    $encoded .= $message[$i - 1] . $count;

    return $encoded;
}

function decode($encoded)
{
    $decoded = '';

    for ($i = 0; $i < strlen($encoded); $i += 2) {
        $decoded .= str_repeat($encoded[$i], intval($encoded[$i + 1]));
    }

    return $decoded;
}

$text = explode(' ', $message, 2);
$operation = $text[0];
$message = $text[1];

if ($operation === 'E') {
    $output = encode($message);
} elseif ($operation === 'D') {
    $output = decode($message);
}

echo $output;
