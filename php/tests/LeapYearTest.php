<?php declare(strict_types=1);

namespace KataTests;

use Kata\YearLeap;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /** @test */
    public function given_1_then_it_is_not_leap(): void
    {
        $result = YearLeap::isLeap(1);

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_4_then_it_is_leap(): void
    {
        $result = YearLeap::isLeap(4);

        self::assertEquals(true, $result);
    }
}
