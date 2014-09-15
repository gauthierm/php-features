<?php

/**
 * Variadic functions are a better way to write functions that have a variable
 * number of arguments, such as `sprintf()` or `array_diff()`.
 *
 * This was always possible using `func_get_args()` and `func_num_args()` but
 * the new syntax is easier to read and to write.
 */

/**
 * If a function argument is prefixed with the `...` operator, it is a
 * variable-length argument. Callers of the function may pass 0 or more
 * arugments for the variable-lenth argument.
 */
function sum(...$numbers) {
	$sum = 0;

	/**
	 * Inside the function, our variable-length argument is an array. We can
	 * iterate or perform any other array operations in our function
	 * implementation.
	 */
	foreach ($numbers as $number) {
		$sum += $number;
	}

	return $sum;
}

echo sum(1, 2, 3, 4), "\n";

/**
 * Mixing regular arguments and variable-lenth arguments is allowed. Only the
 * last argument may be a variable-lenth argument.
 */
function sum2($start, ...$numbers) {
	$sum = $start;

	foreach ($numbers as $number) {
		$sum += $number;
	}

	return $sum;
}
echo sum2(10, 2, 3, 4), "\n";
