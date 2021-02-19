<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Exercise 4.1 : Write a recursive sum function.
 *
 * @param array $array an array of numbers.
 * @return int
 */
function sum(array $array): int
{
    // Base case
    if (empty($array)) {
        return 0;
    }

    // Recursive case
    if (count($array) === 1) {
        return $array[0];
    }

    $value = array_pop($array);
    return $value + sum($array);
}

final class RecursiveSumFunctionTest extends TestCase
{
    public function testEmptyArrayReturnsZero(): void
    {
        $this->assertEquals(0, sum([]));
    }

    public function testOneElementArrayReturnsElementValue(): void
    {
        $this->assertEquals(1, sum([1]));
        $this->assertEquals(-2, sum([-2]));
        $this->assertEquals(403746, sum([403746]));
    }

    public function testMultipleElementsArrayReturnsCorrectSum(): void
    {
        $this->assertEquals(10, sum([1, 2, 3, 4]));
        $this->assertEquals(12, sum([10, -2, 4]));
    }
}
