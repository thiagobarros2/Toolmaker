<?php

use ThiagoBarros\Toolmaker\ArrayToDatabaseString;

it("should return '{}' when [] is given", function () {
    $input = [];

    $result = ArrayToDatabaseString::handle(array: $input);

    expect($result)->toBe('{}');
});

it("should return '{1}' when [1] is given", function () {
    $input = [1];

    $result = ArrayToDatabaseString::handle(array: $input);

    expect($result)->toBe('{1}');
});

it("should return '{1,2}' when [1, 2] is given", function () {
    $input = [1, 2];

    $result = ArrayToDatabaseString::handle(array: $input);

    expect($result)->toBe('{1,2}');
});
