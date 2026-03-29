<?php
function calculateTotal(array $cart): float
{
    $total = 0.0;

    foreach ($cart as $item) {
        $price = $item['price'] ?? 0;
        $quantity = $item['quantity'] ?? 0;
        $total += $price * $quantity;
    }

    return $total;
}