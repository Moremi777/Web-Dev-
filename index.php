<?php

$newvar = "My name is Olebogeng";
$check = 2;

if ($check == 4)
{
	echo $newvar;
}
elseif ($check >= 5) {
	echo "second result";
}
else
{
	echo "third result";
}

echo "<br>";

while ($check < 7)
{	
	echo "<br>";
	echo $check."<br>";
	$check++;
}

?>