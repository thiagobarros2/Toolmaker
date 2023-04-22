<?php

namespace ThiagoBarros\Toolmaker;

final class DatabaseStringToStringArray
{
    public static function handle(string $databaseString): array
    {
        if (str_replace(' ', '', $databaseString) === '{}') {
            return [];
        }

        return explode(',', str_replace(['{', '}'], '', $databaseString));
    }
}
