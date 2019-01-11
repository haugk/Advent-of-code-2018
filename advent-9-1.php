<?php

$t = <<<EOT

EOT;

$t = str_replace(' ','',$t);
$t = str_replace('>velocity=<',',',$t);
$t = str_replace('position=<','',$t);
$t = str_replace('>','',$t);

//echo $t;

$s = explode("\n", $t);
//print_r($s);


$a = [0];
$p = 468;
$n = 71843;
$n = 100;
// 468 players; last marble is worth 71843 points

$score=array_fill(0, $p, 0);
for ($i=1;$i<=$n;$i++)
{
	if (($i % 23) == 0)
	{
		$score[$i % $p] += $i;
		$e = array_pop($a);
		array_unshift($a, $e);
		$e = array_pop($a);
		array_unshift($a, $e);
		$e = array_pop($a);
		array_unshift($a, $e);
		$e = array_pop($a);
		array_unshift($a, $e);
		$e = array_pop($a);
		array_unshift($a, $e);
		$e = array_pop($a);
		array_unshift($a, $e);
		$e = array_pop($a);
		$score[$i % $p] += $e;
		echo "\nPlayer ", ($i % $p), " gets $i + $e = ",$i+$e;
	}
	else
	{
		$e = array_shift($a);
		array_push($a, $e);
		$e = array_shift($a);
		array_push($a, $e);
		array_unshift($a, $i);
	}
//	echo "\n$i-";
//	print_r($a);
}

print_r($score);
echo "\n", max($score);

?>