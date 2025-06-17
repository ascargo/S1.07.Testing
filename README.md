# S1.07.Testing
## 📄Description
Nivel 1
Task 1. Given the NumberChecker class, program the unit tests needed to certify that the class's source code does what it has to do.

Task 2. Let's practice some TDD. Remember exercise 5 of the Basic PHP level and think about tests that you could perform to test their correct functioning. Schedule them and then carry out the program to test step by step as you validate the previously created tests.

## 💻 Technologies Used

- PHP 8.4+
- Composer (Dependency Management)
- PHPUnit (Testing framework)
- Xdebug (Optional - for debugging)
- VS Code or any code editor

## 📋 Requirements

Make sure you have the following installed:

- PHP >= 8.0 (recommended: 8.4.x)
- Composer (https://getcomposer.org)
- PHPUnit (installed via Composer)
- Xdebug (optional, for step-debugging)
- A code editor (e.g. VS Code)

## 🛠️ Installation

1. Clone this repository:
   git clone 
   cd your-repo
   
2. Install project dependencies:
composer install

3. (Optional) Generate optimised autoloader:
composer dump-autoload -o

▶️ Running the Project
This project does not run in a browser — it is tested via the command line using PHPUnit.

To run tests:
./vendor/bin/phpunit

Or to run a specific test file:
./vendor/bin/phpunit tests/GradingTest.php
