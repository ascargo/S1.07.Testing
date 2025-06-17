<?php
namespace AsierWC\N1E2;

class Grading {
    public function getGrade(int $percentageMark): string {
    if ($percentageMark >=60) {
        return "First Class";
    } elseif ($percentageMark >=45) {
        return "Second Class";
    } elseif ($percentageMark >=33) {
        return "Third Class";
    } elseif ($percentageMark < 33) {
        return "Fail";
    }
}
}
?>