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
$cart = [
    ['name' => 'Phone', 'price' => 1000, 'quantity' => 2],
    ['name' => 'Case', 'price' => 50, 'quantity' => 1],
];
echo calculateTotal($cart);