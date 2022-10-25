<?php

declare(strict_types=1);

/**
 * Calculate the hamming distance between two DNA strands.
 *
 * @param string $strandA first DNA strand to compare
 * @param string $strandB second DNA strand to compare
 *
 * @return int returns the count of differences; that is, the "distance"
 *
 * @throws InvalidArgumentException if the length of strands are not equal
 */
function distance(string $strandA, string $strandB): int
{
	if (strlen($strandA) != strlen($strandB)) {
		throw new InvalidArgumentException('DNA strands must be of equal length.');
	}

	$arrayA = str_split($strandA);
	$arrayB = str_split($strandB);

	return count(array_diff_assoc($arrayA, $arrayB));
}
