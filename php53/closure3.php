<?php

/**
 * Where are good places to use closures? The functional array constructs in
 * PHP lend themselves well to using closures. Sorting functions also work
 * well with closures.
 *
 * Functional-style operations can easily be performed on PHP arrays using
 * closures. Here we define a handy function to sort and format company
 * information using functional array constructs and sorting.
 */
function companySummary($separator, $array, $executive = array()) {
	/**
	 * Sort company with executives first.
	 */
	usort(
		$array,
		/**
		 * Comparision says exec > non-exec and otherwise use string comparison.
		 * Without closures, this would likely by a public method on a class
		 * that can access the `$executive` array. With a closure, the public
		 * interface doesn't need to be polluted.
		 */
		function ($a, $b) use ($executive) {
			if (in_array($a, $executive)) {
				if (in_array($b, $executive)) {
					return strcmp($a, $b);
				}
				return -1;
			}
			if (in_array($b, $executive)) {
				return 1;
			}
			return strcmp($a, $b);
		}
	);

	/**
	 * This counter is going to be used by our `array_map()` function to
	 * assign an index value to each value in the array. It will be passed
	 * by reference to the closure.
	 */
	$count = 0;

	/**
	 * The rest of our formatting function is a single PHP expression. This is
	 * common in functional programming (i.e. bracket hell in LISP).
	 */
	return 'silverorange is '.array_reduce(
		array_map(
			/**
			 * We use `array_map()` to format each name in the list and
			 * automatically assign it an index value. The `$count` variable
			 * is passed by reference so it can be incremented.
			 */
			function ($value) use ($executive, &$count) {
				if (in_array($value, $executive)) {
					$value = $value.'(exec)';
				}
				$value = ucfirst($value);
				$count++;
				return array($count, $value);
			},
			/**
			 * Because of the way we will reduce the array, we reverse it
			 * first.
			 */
			array_reverse(
				$array
			)
		),
		/**
		 * Our `array_reduce()` function prepends each element of the array to
		 * the left side of a string. the second element is joined with an
		 * *and* and the other elements are joined with `$separator`. The first
		 * element has a *.* appended to it.
		 */
		function ($carry, $item) use ($separator) {
			$index = $item[0];
			$value = $item[1];

			if ($carry == '') {
				return $value.'.';
			}

			if ($index === 2) {
				return $value.' and '.$carry;
			}

			return $value.$separator.$carry;
		},
		/**
		 * The initial value we pass to our reduce function is an empty
		 * string.
		 */
		''
	);
};

echo companySummary(
	', ',
	array(
		'mike', 'isaac', 'charles', 'steven', 'dan', 'nick',
		'nathan', 'stephen', 'kelly', 'keith'
	),
	array(
		'dan', 'steven', 'nathan'
	)
);

echo "\n";
