#!/usr/bin/php
<?php
function ft_split($string)
{
    if ($string)
    {
        return (explode(" ", preg_replace('!\s+!', ' ', $string)));
    }
}
function ft_split2($string)
{
    if ($string)
    {
        return (explode(" ", preg_replace('!:!', ' ', $string)));
    }
}
    //NANI!!    # In French, the days of the week are: lundi (Monday), mardi (Tuesday), mercredi (Wednesday), jeudi (Thursday), vendredi (Friday), samedi (Saturday) and dimanche (Sunday)
    if ($argc > 1)
    {
        # / ^(?P<day>\w+) (?P<digit>\d+) /
		$regex = "(L/iundi|M/iardi|M/iercredi|J/ieudi|V/iendredi|S/iamedi|D/iimanche)([ ])(\d{1,2})([ ])(J/ianviere|F/ievrier|M/iars|A/ivril|M/iai|J/iuin|J/iuillet|A/iout|S/ieptembre|O/ictobre|N/iovembre|D/iecembre)([ ])(\d{4})([ ])(\d{2}[:]\d{2}[:]\d{4})";
		$attempt2  = "(L\i|M\i|J\i|V\i|S\i|D\i)\S{(7|5|4)}[ ]+(\d{1,2})[ ]+ ";
        if (preg_match("/^$regex$/", $argv[1]))
        {
            $array = ft_split($argv[1]);
            $timeformat = ft_split2($argv[4]);
            $day = date("j", $array[1]);
            $month = date("n", $array[2]);
            $year = date("Y", $argv[3]);
            $hour = date("H", $timeformat[0]);
            $minute = date("i", $timeformat[1]);
            $second = date("s", $timeformat[2]);
            $date = date("U", mktime($hour, $minute, $second, $month, $day,$year));
            print $date."\n";
        }
        else
        {
            print "Wrong Format\n";
            exit;
        }
    }
?>