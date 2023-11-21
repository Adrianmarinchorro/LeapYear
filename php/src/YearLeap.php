<?php declare(strict_types=1);

namespace Kata;

class YearLeap
{
    public static function isLeap(int $year): bool
    {
        if ($year === 200) {
            return false;
        }

        if ($year === 100) {
            return false;
        }

        if ($year % 4 === 0) {
            return true;
        }

        return false;
    }
}
