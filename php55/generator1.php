<?php

/**
 * Generators are a PHP language feature that enables creating light-weight
 * iterators. Generators are implemented as normal functions/methods except
 * instead of having a single return point, the generator function yields a
 * value and pauses its execution state.
 *
 * This is useful for creating iterators that are memory efficient, easy to
 * read and easy to write.
 */

function simpleGenerator()
{
	yield 1;
	yield 2;
	yield 3;

	/**
	 * If there are no more values to yield, the generator function is
	 * completed and iteration stops. This can also be triggered explicitly
	 * using an empty `return` statement in the generator function.
	 */
}

foreach (simpleGenerator() as $value) {
	echo $value, "\n";
}
echo "\n";


/**
 * This generator yields its value within a loop instead of manually yielding
 * each value.
 */
function loopingGenerator()
{
	$i = 0;
	while ($i < 4) {
		yield $i;
		$i++;
	}
}

foreach (loopingGenerator() as $value) {
	echo $value, "\n";
}
echo "\n";
