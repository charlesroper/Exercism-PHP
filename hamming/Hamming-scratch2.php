<?php

declare(strict_types=1);

function distance(string $strandA, string $strandB): int
{
	$arrayA = str_split($strandA);
	$arrayB = str_split($strandB);

	return count(array_diff_assoc($arrayA, $arrayB));
}

echo distance('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');
