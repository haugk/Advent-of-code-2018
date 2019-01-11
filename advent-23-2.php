<?php

$tt = <<<EOT
pos=<10,12,12>, r=2
pos=<12,14,12>, r=2
pos=<16,12,12>, r=4
pos=<14,14,14>, r=6
pos=<50,50,50>, r=200
pos=<10,10,10>, r=5
EOT;

/*
$tt = <<<EOT
EOT;
*/

$tt = str_replace(['<','>','=',' ','p','o','s','r'], '', $tt);

//echo $tt;

$t = explode("\n", $tt);
foreach ($t as $i => $l)
{
	$l = explode(',',$l);
	$t[$i] = $l;
}
//print_r($t);

// construct min and max disatnce from origin 0,0,0
$ranges = [];
$min = 0;
$max = 0;
$points = [];
for ($k=0;$k<count($t);$k++)
{
	$dist = abs($t[$k][0]) + abs($t[$k][1]) + abs($t[$k][2]);
	$range = abs($t[$k][3]);
	$ranges[] = [$dist-$range, $dist+$range];
	
	$points[] = $dist-$range;
	$points[] = $dist+$range;
}

//print_r($ranges);
//print_r($points);
$p = [];

foreach ($points as $pp) $p[$pp] = 0;
//print_r($p);

foreach ($points as $pp) 
{
	$p[$pp] += 1;
}
print_r($p);

$m = max($p);


echo "\nmin: $min / max: $max / diff = " , $m;





?>