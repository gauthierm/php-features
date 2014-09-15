<?php

/**
 * Generators can be assigned to variables. The variables will be instances
 * of the built-in `Generator` class and implement the `Iterator` interface.
 */

function myGenerator()
{
	for ($i = 0; $i < 5; $i++) {
		yield $i;
	}
}

$g = myGenerator();
var_dump(get_class($g)); // Generator
var_dump($g instanceof Iterator); // true

foreach ($g as $value) {
	echo $value, "\n";
}
echo "\n";

/**
 * Once a generator is "used" it can't be used again. You can clone the
 * generator or assign the generator function again to repeat the iteration.
 *
 * Generators only maintain the current execution state before the yield
 * statement so it is not possible for PHP to rewind to the original function
 * state.
 *
 * This will cause a fatal error.
 */
foreach ($g as $value) {
	echo $value, "\n";
}
