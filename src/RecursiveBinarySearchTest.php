<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Exercise 4.4 : Write a binary search using recursive function.
 *
 * @param int      $search The value to find.
 * @param array    $values An array of sorted values.
 * @param int|null $guess  Last guessed index.
 * @param int      $i      The number of iterations to find the value.
 * @return array
 */
function binarySearch(int $search, array $values, int $guess = null, $i = 0): array
{
    $i++;

    // Initialize guess if it is the first loop.
    if (null === $guess) {
        $guess = intval(count($values) / 2);
    }

    // Recursive case
    if ($search < $values[$guess]) {
        $newGuess = intval($guess * 0.5);
        return binarySearch($search, $values, $newGuess, $i);
    } else if ($search > $values[$guess]) {
        $newGuess = intval($guess * 1.5);
        return binarySearch($search, $values, $newGuess, $i);
    }

    // Base case
    return [
        'result' => $guess,
        'iterations' => $i
    ];
}

final class RecursiveBinarySearchTest extends TestCase
{
    public function testItReturnsCorrectValue(): void
    {
        $values = range(1, 100);
        $expected = ['result' => 9, 'iterations' => 5];
        $this->assertEquals($expected, binarySearch(10, $values));

        //TODO: fix assertion, since binary search should result in O(log n)
        $values = range(1, 1024);
        $expected = ['result' => 21, 'iterations' => 1];
        $this->assertEquals($expected, binarySearch(22, $values));

        $values = range(4, 4);
        $expected = ['result' => 0, 'iterations' => 1];
        $this->assertEquals($expected, binarySearch(4, $values));
    }
}
