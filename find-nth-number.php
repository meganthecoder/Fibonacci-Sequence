<?php
$n = 12;
$one = 0;
$two = 1;
$answer = 0;

for ($i = 0; $i < $n+1; $i++) {
	if ($i == 0) {
		$answer = 0;
	} else if ($i == 1) {
		$answer = 1;
	} else {
		$answer = $one + $two;
		$one = $two;
		$two = $answer;
	}
	
}
echo $answer;