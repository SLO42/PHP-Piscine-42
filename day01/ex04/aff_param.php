#!/usr/bin/php
<?php 
$i = 1;
if ($i < $argc)
{
    while ($i < $argc)
    {
        Print $argv[$i++];
        Print "\n";
    }
}
?>