<div id="gall">

<?php
$min = 1;
$max = 12;
$count = 8;
$numbers = array();
for ($i = 0; $i < $count; $i++) {
  $number = rand($min, $max - $i);
  sort($numbers);
  for($j = 0; $j < $i; $j++) {
    if ($numbers[$j] <= $number) {
      $number++;
    }
  }
  $numbers[] = $number;
}

for ($i = 1 ; $i <= 8 ; ++$i)
{
//var_dump($numbers);
//shuffle($numbers);
//print_r(array_keys($number));


	printf("<img src='img/origin/green_%s.jpg' tabindex='0' border='3'/>", $i);
}
	
?>
</div><!--gall-->