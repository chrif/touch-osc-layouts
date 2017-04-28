<?php

$file = $argv[1];

$command = 'plutil -convert xml1 -o - ' . escapeshellarg($file);

exec($command, $output);

$xml = implode("\n", $output);

echo $xml;