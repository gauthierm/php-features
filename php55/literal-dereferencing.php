<?php

/**
 * Literal dereferencing lets you dereference a literal array or string
 * without first assigning it to a variable. This is similar to function
 * array dereferencing and makes the language feel more consistent.
 */

/**
 * You can dereference array literals to get values.
 */
$a = ['foo' => 1, 'bar' => 2, 'baz' => 3]['foo'];
var_dump($a);

/**
 * You can dereference string literals to get chars.
 */
$b = 'Hello, World!'[7];
var_dump($b);
