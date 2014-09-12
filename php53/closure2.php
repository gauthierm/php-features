<?php

$foo = 'foo';

/**
 * We can use pass-by-reference with closures to make it so the closure can
 * modify the value in the parent scope.
 */
$closure = function ($arg) use (&$foo) {
	echo $arg.'-'.$foo."\n";

	/**
	 * Since we used pass-by-reference in our closure definition, the value
	 * of `$foo` is shared between the parent scope and the closure scope.
	 * Modifying the value here will affect the parent scope.
	 */
	$foo = 'baz';
};

$closure('charles');
$closure('isaac');

/**
 * The value of `$foo` outside the closure was modified by calling the closure.
 */
echo $foo, "\n";

$foo = 'blorp';

/**
 * If we call our closure again it still uses the updated `$foo` value.
 */
$closure('mike');

?>
