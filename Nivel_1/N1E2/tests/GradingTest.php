<?php
use PHPUnit\Framework\TestCase;
use AsierWC\N1E2\Grading;

require_once __DIR__ . '/../vendor/autoload.php';

class GradingTest extends TestCase {
    public function testReturnsFirstFor60Plus() {
        $grading = new Grading();
        $this->assertEquals("First Class", $grading->getGrade(75));
    }

    public function testReturnsSecondFor45Plus() {
        $grading = new Grading();
        $this->assertEquals("Second Class", $grading->getGrade(56));
    }

    public function testReturnsThirdFor33Plus() {
        $grading = new Grading();
        $this->assertEquals("Third Class", $grading->getGrade(40));
    }

    public function testReturnFailFor33minus() {
        $grading = new Grading();
        $this->assertEquals("Fail", $grading->getGrade(24));

    }
}
?>