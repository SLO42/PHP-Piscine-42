#!/usr/bin/php
<?php
    if ($argc != 2)
        exit;
    $i = 1;
    $string = trim(preg_replace('!\s+!', ' ', $argv[$i]));
    print $string."\n";
?>