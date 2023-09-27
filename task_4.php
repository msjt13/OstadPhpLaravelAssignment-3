<?php
$studentGrades = [
    'John' => ['Math' => 80, 'English' => 85, 'Science' => 90],
    'Jane' => ['Math' => 70, 'English' => 95, 'Science' => 85],
    'Jim' => ['Math' => 90, 'English' => 80, 'Science' => 75],
];

function calculateAverageGrades($studentGrades) {
    foreach($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        echo "$student's average grade: $average\n";
    }
}

calculateAverageGrades($studentGrades);