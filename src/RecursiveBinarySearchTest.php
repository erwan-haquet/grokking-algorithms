<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Exercise 4.4 : Write a binary search using recursive function.
 *
 * @param int   $search  The value to find.
 * @param array $values  An array of sorted values.
 * @param array $guesses An array with all values guessed.
 * @return array
 */
function binarySearch(int $search, array $values, array $guesses = []): array
{
    $guess = floor(count($values) / 2);

    // Base case
    if ($guess === $search) {
        return [
            'result' => $guess,
            'iterations' => count($guesses)
        ];
    }

    // Recursive case
    // TODO: do the recursive case by extracting the undesired values from the array
//    if ($search < $values[$guess]) {
//        return binarySearch($search, $values, $newGuess, $i);
//    } else if ($search > $values[$guess]) {
//        $newGuess = intval($guess * 1.5);
//        if ($search === 22) {
//            var_dump($newGuess);
//        }
//        return binarySearch($search, $values, $newGuess, $i);
//    }

    // Base case

}

final class RecursiveBinarySearchTest extends TestCase
{
    public function testItReturnsCorrectValue(): void
    {
        $values = range(1, 100);
        $expected = ['result' => 9, 'iterations' => 5];
        $this->assertEquals($expected, binarySearch(10, $values));

        //TODO: fix iteration assertion
        $values = range(1, 1024);
        $expected = ['result' => 21, 'iterations' => 1];
        $this->assertEquals($expected, binarySearch(22, $values));

        //TODO: fix iteration assertion
        $values = range(4, 4);
        $expected = ['result' => 0, 'iterations' => 1];
        $this->assertEquals($expected, binarySearch(4, $values));
    }
}
