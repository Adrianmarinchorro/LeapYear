<?php declare(strict_types=1);

namespace Kata;

class YearLeap
{
    public static function isLeap(int $year): bool
    {
       if (self::isDivisibleBy100($year) && self::isNotDivisibleBy400($year)) {
           return false;
       }

       if (self::isDivisibleBy4($year)) {
            return true;
       }

       return false;
    }

    /**
     * @param int $year
     * @return bool
     */
    public static function isDivisibleBy4(int $year): bool
    {
        return $year % 4 === 0;
    }

    /**
     * @param int $year
     * @return bool
     */
    public static function isDivisibleBy100(int $year): bool
    {
        return $year % 100 === 0;
    }

    /**
     * @param int $year
     * @return bool
     */
    public static function isNotDivisibleBy400(int $year): bool
    {
        return $year % 400 !== 0;
    }
}
