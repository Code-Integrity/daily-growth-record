<?php

$energy = 100;
$hour = 1;

while ($energy >= 20) {

    $energy -= 15;

    echo $hour . "時間目: 残りエネルギー" . $energy . "<br>\n";

    if ($energy < 20) {
        echo "健康第一！休息が必要です<br>\n";

    }

    $hour++;
}