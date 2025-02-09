# PHP Notice: Undefined Variable in Foreach Loop with Empty Array

This repository demonstrates a common PHP error: the "Undefined variable" notice that occurs within a foreach loop when dealing with potentially empty arrays.

The `bug.php` file contains code that reproduces this issue. The `bugSolution.php` file presents a solution to handle such situations gracefully, preventing the notice.

## Bug Description

The `buggyFunction` in `bug.php` attempts to process an array and extract names from objects within the array.  If the array is empty, the foreach loop does not execute, leading to a notice because the `$names` variable is undefined when it is returned.

## Solution

The solution, found in `bugSolution.php`, initializes `$names` as an empty array before the loop. This prevents the undefined variable notice.