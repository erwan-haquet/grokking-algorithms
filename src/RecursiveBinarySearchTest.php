<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Exercise 4.4 : Write a binary search using recursive function.
 *
 * @param int      $needle   The value to find.
 * @param array    $haystack An array of sorted values.
 * @param int|null $guess    Last guessed index.
 * @return int
 */
function binarySearch(int $needle, array $haystack, int $guess = null): int
{
    if (null === $guess) {
        $guess = intval(count($haystack) / 2);
    }

    // Recursive case
    if ($needle < $haystack[$guess]) {
        $newGuess = intval($guess * 0.5);
        return binarySearch($needle, $haystack, $newGuess);
    } else if ($needle > $haystack[$guess]) {
        $newGuess = intval($guess * 1.5);
        return binarySearch($needle, $haystack, $newGuess);
    }

    // Base case
    return $guess;
}

final class RecursiveBinarySearchTest extends TestCase
{
    public function testItReturnsCorrectValue(): void
    {
        $haystack = range(1, 100);
        $this->assertEquals(9, binarySearch(10, $haystack));

        $haystack = range(1, 1024);
        $this->assertEquals(21, binarySearch(22, $haystack));

        $haystack = range(4, 4);
        $this->assertEquals(0, binarySearch(4, $haystack));
    }
}
