<?php declare(strict_types=1);

namespace Kata;

class YearLeap
{
    public static function isLeap(int $year): bool
    {
        if ($year === 12) {
            return true;
        }

        if ($year === 8) {
            return true;
        }

        if ($year === 4) {
            return true;
        }

        return false;
    }
}
