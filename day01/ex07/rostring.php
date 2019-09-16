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
$count = count($ret);
$rotate = array($count - 1 => $ret[0]);
$end = array_replace($ret, $rotate);
array_shift($end);
print implode(" ", $end);
?>