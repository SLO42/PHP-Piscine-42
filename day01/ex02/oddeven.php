#!/usr/bin/php
<?php
loop:
	print   "enter a number: ";
	$f = fopen("php://stdin", "r");
	$input = trim(fgets($f));
	if (is_numeric($input) == true)
	{
		if ($input % 2 == 0)
		print "The number $input is even\n";
		else if ($input % 2 == 1)
		Print "THe number $input is odd\n";
		goto loop;
	}
	if (feof($f))
	{
		echo "\n";
		exit();
	}
	else
	{
		print "'$input' is not a number\n";
		goto loop;
	}
?>