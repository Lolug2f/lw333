<?php
function areAnagrams(string $a, string $b): bool
{
    $a = strtolower(str_replace(' ', '', $a));
    $b = strtolower(str_replace(' ', '', $b));

    if (strlen($a) !== strlen($b)) {
        return false;
    }

    $sortedA = str_split($a);
    $sortedB = str_split($b);

    sort($sortedA);
    sort($sortedB);

    return $sortedA === $sortedB;
}