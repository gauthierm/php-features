<?php

/**
 * Shorthand-array syntax is a new syntax that lets you write arrays in a
 * form similar to JavaScript and JSON.
 *
 * Because PHP arrays are actually ordered hash-maps, the syntax is not
 * identical to JavaScript.
 */

/**
 * For ordinally indexed arrays, the syntax is the same as JavaScript with one
 * minor difference. In JavaScript, a trailing comma adds an empty element to
 * the end of an array. In PHP, a trailing comma has no effect.
 */
$array = [1, 2, 3, 4, 5];
var_dump($array);

/**
 * Because PHP arrays are ordered hash-maps, a key-value syntax is also needed.
 * This is not available in JavaScript.
 */
$array = [ 'foo' => 1, 'bar' => 2, 'baz' => 3 ];
var_dump($array);
