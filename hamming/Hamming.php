<?php

declare(strict_types=1);

/**
 * Calculate the hamming distance between two DNA strands
 *
 * @param string $strandA First DNA strand to compare.
 * @param string $strandB Second DNA strand to compare.
 * @throws InvalidArgumentException if the length of strands are not equal.
 * @return integer Returns the count of differences; that is, the "distance".
 */
function distance(string $strandA, string $strandB): int
{
    if (strlen($strandA) != strlen($strandB)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $arrayA = str_split($strandA);
    $arrayB = str_split($strandB);
    $distance = count(array_diff_assoc($arrayA, $arrayB));

    return $distance;
}
