<?php

declare(strict_types=1);

function integrateRecord(array $input): array {

    $id = (int)trim($input[0]);

    $email = strtolower(trim($input[1]));

    $memo = $input[2] ?? "(empty)";

    return [
        'id' => $id,
        'email' => $email,
        'memo'  => $memo
    ];
}

$input = [" 101 ", "eagle@COSMOS.com", null];
$result = integrateRecord($input);

echo "--- Integrated Result ---<br>";
echo "ID: " . $result['id'] . "(" . gettype($result['id']) . ")<br>";
echo "Email: " . $result['email'] . "<br>";
echo "Memo: " . $result['memo'] . "<br>";
?> 