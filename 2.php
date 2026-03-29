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
var_dump(areAnagrams("listen", "silent"));     
var_dump(areAnagrams("hello", "world"));       
var_dump(areAnagrams("A gentleman", "Elegant man")); 