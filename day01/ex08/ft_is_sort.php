<?php
function ft_is_sort($array)
{
    $sorted = array_values($array);
    sort($sorted);
    foreach ($array as $key => $value)
        if ($sorted[$key] != $value)
            return (false);
    return (true);
}