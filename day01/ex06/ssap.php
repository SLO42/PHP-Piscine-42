#!/usr/bin/php
<?php
function ft_split($string)
{
    if ($string)
    {
        return (explode(" ", preg_replace('!\s+!', ' ', $string)));
    }
}
$i = 1;
$ret = array();
while ($i < $argc)
    $ret = array_merge($ret, ft_split($argv[$i++]));
sort($ret);
$count = count($ret);
$i = 0;
while ($i < $count)
    print $ret[$i++]."\n";
?>