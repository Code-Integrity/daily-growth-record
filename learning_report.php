<?php

function convertToHours(int $minutes): float {

    return $minutes / 60;
}

$studyMinutes = 150;
$hours = convertToHours($studyMinutes);

echo "Learning Report:" . $hours . "hours completed today.";

?>