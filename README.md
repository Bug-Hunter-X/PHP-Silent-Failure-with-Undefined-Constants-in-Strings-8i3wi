# PHP Silent Failure with Undefined Constants in Strings

This repository demonstrates a subtle bug in PHP related to the handling of undefined constants within string concatenation.  PHP does not throw an error if you try to use an undefined constant in a string; instead, it silently treats the undefined constant as a literal string. This can lead to hard-to-debug issues, especially in larger applications.

The `bug.php` file contains the buggy code.  The `bugSolution.php` file provides a corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` and compare the output.