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

    /** @test */
    public function given_8_then_it_is_leap(): void
    {
        $result = YearLeap::isLeap(8);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_12_then_it_is_leap(): void
    {
        $result = YearLeap::isLeap(12);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_100_then_it_is_not_leap(): void
    {
        $result = YearLeap::isLeap(100);

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_200_then_it_is_not_leap(): void
    {
        $result = YearLeap::isLeap(200);

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_300_then_it_is_not_leap(): void
    {
        $result = YearLeap::isLeap(300);

        self::assertEquals(false, $result);
    }

    /** @test */
    public function given_400_then_it_is_leap(): void
    {
        $result = YearLeap::isLeap(400);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_800_then_it_is_leap(): void
    {
        $result = YearLeap::isLeap(800);

        self::assertEquals(true, $result);
    }

    /** @test */
    public function given_1200_then_it_is_leap(): void
    {
        $result = YearLeap::isLeap(1200);

        self::assertEquals(true, $result);
    }
}
