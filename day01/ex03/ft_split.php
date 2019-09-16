
<?php 
function ft_split($string)
{
    if ($string)
    {
        return (explode(" ", preg_replace('!\s+!', ' ', $string)));
    }
}
?>