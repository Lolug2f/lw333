<?php
function flipArray(array $arr): array
{
    $flipped = [];
    foreach ($arr as $key => $value) {
    
        if (isset($flipped[$value])) {
            if (!is_array($flipped[$value])) {
                $flipped[$value] = [$flipped[$value]];
            }
            $flipped[$value][] = $key;
        } else {
            $flipped[$value] = $key;
        }
    }
    return $flipped;
}
$array = [
    'name' => 'Alex',
    'age'  => 25,
    'city' => 'Moscow'
];
print_r(flipArray($array));
