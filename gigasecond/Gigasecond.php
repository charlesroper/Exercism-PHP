<?php

declare(strict_types=1);

/**
 * Given a DateTimeImmutable, return the DateTimeImmutable that would be after a
 * gigasecond has passed.
 *
 * @param DateTimeImmutable $date The date on which to add a gigasecond.
 * @return DateTimeImmutable Returns the $date with a gigasecond added.
 */
function from(DateTimeImmutable $date): DateTimeImmutable
{
    // A gigasecond is 10^9 (1,000,000,000) seconds.
    $gigasecond = 10 ** 9;
    $interval = new DateInterval("PT{$gigasecond}S");
    return $date->add($interval);
}
