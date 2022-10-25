<?php

declare(strict_types=1);

function distance(string $strandA, string $strandB): int
{
	$arrayA = str_split($strandA);
	$arrayB = str_split($strandB);
	$distance = 0;
	foreach ($arrayA as $key => $value) {
		echo "Key: {$key}\n";
		echo "  A: {$value}\n";
		echo "  B: {$arrayB[$key]}\n";
		if ($value != $arrayB[$key]) {
			echo "different!\n\n";
			++$distance;
		}
	}

	return $distance;
}

echo distance('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');
