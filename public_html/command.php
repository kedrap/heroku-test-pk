<?php

$who = $argv[1];
echo 'Hello ' . $who . "\n";

for ($nr = 0; $nr < 150; $nr++) {
    newrelic_start_transaction('PHP Application on Heroku');

    sleep(6);
    echo $nr . "\n";

    newrelic_end_transaction('PHP Application on Heroku');
}

