## Description    
A Sandbox for [grokking algorithms](https://www.manning.com/books/grokking-algorithms) exercises.

For each exercise a test class is written `src/` and is annotated with the chapter number and a quick definition of the exercise.
Code is written in PHP following the [TDD](https://en.wikipedia.org/wiki/Test-driven_development) principle.

## How to

##### Run all the tests
``` bash
# Run all the tests
./vendor/bin/phpunit --testdox src

# Run a particular test
./vendor/bin/phpunit --testdox src/MyTestCase
```
