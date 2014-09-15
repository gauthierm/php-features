<?php

/**
 * Generators support key-value iteration just like key-value arrays. Instead
 * of yielding a single value, yield a tuple. This tuple syntax is specific to
 * generators and can not be used elsewhere in PHP.
 */

function keyValueGenerator()
{
	yield 'foo' => 1;
	yield 'bar' => 2;
	yield 'baz' => 3;
}

foreach (keyValueGenerator() as $key => $value) {
	echo $key, ' => ', $value, "\n";
}
echo "\n";
