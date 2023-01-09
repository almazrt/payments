<?php

namespace App\Support\Traits\Enums;

trait Findable
{
    public static function fromString(string $value): ?self
    {
        foreach (self::cases() as $case) {
            if (strtolower($case->name) === strtolower($value)) {
                return $case;
            }
        }

        return null;
    }
}
