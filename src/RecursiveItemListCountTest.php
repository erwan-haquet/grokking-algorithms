<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Exercise 4.2 : Write a recursive item list count function.
 *
 * @param array $items an array of items.
 * @param int   $count the current element count.
 * @return int
 */
function countElements(array $items, int $count = 0): int
{
    // Base case
    if (empty($items)) {
        return $count;
    }

    // Recursive case
    array_pop($items);
    $count++;

    return countElements($items, $count);
}

final class RecursiveItemListCountTest extends TestCase
{
    public function testEmptyListReturnsZero(): void
    {
        $this->assertEquals(0, countElements([]));
    }

    public function testOneItemListReturnsOne(): void
    {
        $this->assertEquals(1, countElements([1]));
        $this->assertEquals(1, countElements([-2]));
        $this->assertEquals(1, countElements([403746]));
    }

    public function testMultipleItemsListReturnsItemListCount(): void
    {
        $this->assertEquals(2, countElements([1, 2]));
        $this->assertEquals(8, countElements([1, 2, 3, 4, 5, 6, 7, 8]));
    }
}
