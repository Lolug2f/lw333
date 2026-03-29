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