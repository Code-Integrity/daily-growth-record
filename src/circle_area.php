<?php

declare(strict_types=1);

function calculateCircleArea(float $radius): float{
    if ($radius <= 0) {
        return 0.0;
    }
    return ($radius ** 2) * M_PI;
}

$radius = 5.0;
$area = calculateCircleArea($radius);

echo "Radius: " . $radius . " -> Area: " . number_format($area, 4) . "\n";

echo "Invalid Radius (-1.0) -> Result: " . calculateCircleArea(-1.0) . "\n";