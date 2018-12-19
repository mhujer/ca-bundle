<?php declare(strict_types = 1);

// https://curl.haxx.se/docs/caextract.html

$source = 'https://curl.haxx.se/ca/cacert.pem';

copy('https://curl.haxx.se/ca/cacert.pem', __DIR__ . '/../res/cacert.pem');
