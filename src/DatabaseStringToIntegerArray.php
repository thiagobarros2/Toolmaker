<?php

namespace ThiagoBarros\Toolmaker;

final class DatabaseStringToIntegerArray
{
    public static function handle(string $databaseString): array
    {
        if (str_replace(' ', '', $databaseString) === '{}') {
            return [];
        }
        $array = explode(',', str_replace(['{', '}'], '', $databaseString));

        return array_map(fn ($valor): int => intval($valor), $array);
    }
}
