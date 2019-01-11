<?php
ini_set('memory_limit','512M');

function dump($d, $idx)
{
	$d->rewind();
	echo "<p>";
	while($d->valid()){
		if ($d->key() == $idx)
		    echo '<b>(', $d->current(),')</b>&nbsp;';
		else
			echo $d->current(),'&nbsp;';
	    $d->next();
	}
    echo $d->current().'<br />';
}


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
$p = 9;
$n = 7184300;
$n = 25;
// 468 players; last marble is worth 71843 points
$score=array_fill(0, $p, 0);

$date = date("h:i:sa");
echo "\n", $date;

$l=new SplDoublyLinkedList();

//a push inserts data at the end of the list 
$l->push(0);
$idx  = 0;
dump($l, $idx);

for ($i=1;$i<=$n;$i++)
{
	if ($i % 71843 == 0) echo "\n", round($i / 71843), "%";
	if ($i == 1)
	{
		$l->push(1);
		$idx = 1;
	}
	elseif (($i % 23) == 0)
	{
		$score[$i % $p] += $i;
		$idx = ($idx - 7 + $l->count()) % $l->count();
		$score[$i % $p] += $l->offsetGet($idx);
		$l->offsetUnset($idx);
		
//		echo "\nPlayer ", ($i % $p), " gets $i + $e = ",$i+$e;
	}
	else
	{
		$idx = ($idx + 2) % $l->count();
		if ($idx == 0) {
			$l->push($i);
			$idx = $l->count()-1;
		}
		else {
			$l->add($idx, $i);
		}
	}
//	echo "\n$i-";
//	print_r($a);
	dump($l, $idx);
	
}


echo "\n", $date;
echo "\n", date("h:i:sa");

echo "\n", max($score);



?>