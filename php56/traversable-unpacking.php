<?php

/**
 * Traversable unpacking allows passing arrays other traversable objects into
 * a function as individual function arguments.
 *
 * This replaces the need for separate functions for variable-length arguments
 * vs array arguments.
 *
 * Like variable-length arguments, the `...` operator is used.
 */

echo sprintf(
	'%s is a %s of traversable %s.',
	/**
	 * We can pass an array to the regular `sprintf()` function and have it
	 * unpacked into separate arguments using the `...` operator. No more
	 * need for `vsprintf()`.
	 */
	...array('This', 'demo', 'unpacking')
);
