<?php

use ThiagoBarros\Toolmaker\DatabaseStringToStringArray;

it("should return [] when '{}' is given", function () {
    $input = '{}';

    $result = DatabaseStringToStringArray::handle(databaseString: $input);

    expect($result)->toBe([]);
});

it("should return ['foo'] when '{foo}' is given", function () {
    $input = '{foo}';

    $result = DatabaseStringToStringArray::handle(databaseString: $input);

    expect($result)->toBe(['foo']);
});

it("should return ['foo', 'bar'] when '{foo,bar}' is given", function () {
    $input = '{foo,bar}';

    $result = DatabaseStringToStringArray::handle(databaseString: $input);

    expect($result)->toBe(['foo', 'bar']);
});
