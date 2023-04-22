<?php

declare(strict_types=1);

namespace ThiagoBarros\Toolmaker;

final class ArrayToDatabaseString
{
    public static function handle(array $array): string
    {
        return '{'.implode(',', $array).'}';
    }
}
