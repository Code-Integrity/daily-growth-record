<?php

declare(strict_types=1);

function formatUserRecord(array $rawData): array {

    $id = (int)$rawData['id'];

    $username = trim($rawData['username']);

    $role = $rawData['role'] ?? 'guest';

    return [
        'id'       => $id,
        'username' => $username,
        'role'     => $role,
        'synced_at' => date('Y-m-d  H:i:s')

    ];
}

$rawData = [
    'id' => "101",
    'username' => " EAGLE_Sovereign ",
    'role' => null
];

$cleanData = formatUserRecord($rawData);

echo "---Cleaned Data ---<br>";
echo "ID: " . $cleanData['id'] . "(" . gettype($cleanData['id']) . ")<br>";
echo "Username: [" . $cleanData['username'] . "]<br>";
echo "Role: " . $cleanData['role'] . "<br>";