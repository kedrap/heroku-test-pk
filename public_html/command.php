<?php

$who = $argv[1];
echo 'Hello ' . $who . "\n";

for ($nr = 0; $nr < 150; $nr++) {
    sleep(6);
    echo $nr . "\n";
}
