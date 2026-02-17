<?php
declare(strict_types=1);

function calculateTotal(int $price, float $taxRate): int {

    $total = $price * (1 + $taxRate);

    $roundedTotal = round($total);

    return (int)$roundedTotal;

} 

$result = calculateTotal(1000, 0.1);
echo "Price (tax included):" . $result . " JPY\n";
