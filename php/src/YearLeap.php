<?php declare(strict_types=1);

namespace Kata;

class YearLeap
{
    public static function isLeap(int $year): bool
    {
        if ($year === 400) {
            return true;
        }

       if ($year % 100 === 0) {
           return false;
       }

       if ($year % 4 === 0) {
            return true;
       }

       return false;
    }
}
