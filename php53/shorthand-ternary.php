<?php

/**
 * The short-hand ternary lets you omit the middle part of the ternary
 * expression. If the first value is truthy, it is returned, othewise the
 * provided false value is returned.
 *
 * Unfortunately the best use-case for this would be variable initilization
 * from super-global arrays but accessing an undefined array index causes a
 * PHP notice.
 */

$truthy = 'Hello, world!';

$response = $truthy ?: false;

var_dump($response);

