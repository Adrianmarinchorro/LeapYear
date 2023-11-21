<?php declare(strict_types=1);

namespace KataTests;

use Kata\YearLeap;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /**
     * @dataProvider providerIsDivisibleBy4
     * @dataProvider providerIsDivisibleBy100
     * @dataProvider providerIsDivisibleBy400
     */
    public function test_given_a_year_then_return_bool(int $year, bool $expected) {
        self::assertEquals($expected, YearLeap::isLeap($year));
    }


    public function providerIsDivisibleBy4() {

        return array(
            'given_1_then_it_is_not_leap' => array(1, false),
            'given_4_then_it_is_leap' => array(4, true),
            'given_8_then_it_is_leap' => array(8, true),
            'given_12_then_it_is_leap' => array(12, true),
        );
    }

    public function providerIsDivisibleBy100() {

        return array(
            'given_100_then_it_is_not_leap' => array(100, false),
            'given_200_then_it_is_not_leap' => array(200, false),
            'given_300_then_it_is_not_leap' => array(300, false),
        );
    }

    public function providerIsDivisibleBy400() {

        return array(
            'given_400_then_it_is_leap' => array(400, true),
            'given_800_then_it_is_leap' => array(800, true),
            'given_1200_then_it_is_leap' => array(1200, true),
        );
    }

}
