<?php

/**
 * A closure is an anonymous function that *closes over* its parent scope. What
 * this means practically speaking is variables in the parent scope may be
 * copied into the function scope and used in the function without declaring
 * or passing extra arguments to the function at call-time.
 *
 * A closure is a function + state. This is very similar to an object
 * (methods + state) and is how closures are implemented internally in PHP. In
 * fact, closures are automatically created as an object of type `Closure`
 * with an `__invoke()` method.
 *
 * Closures have their roots in lambda-calculus and were first implemented in
 * functional programming languages. They allow more expressive code to be
 * written with less boiler-plate syntax.
 *
 * Blocks are an implementation of closures used in Objective-C.
 */

$foo = 'foo';
$bar = 'bar';

/**
 * The `use` keyword copies a variable from the current scope into the
 * closure scope. In this case, the closure has access to the value of `$foo`.
 * Because the value is copied, if it is modified later on in the current
 * scope, the closure function is unaffected.
 */
$closure = function ($arg) use ($foo) {
	/**
	 * Inside the closure, we have access to passed arguments as well as the
	 * values we imported into the closure scope.
	 */
	echo $arg.'-'.$foo."\n";

	/**
	 * `$foo` is copied into the function scope. Modifying it here does not
	 * affect the value outside the closure.
	 */
	$foo = 'baz';
};
/**
 * Closures are assigned as normal PHP expressions. PHP expressions muse be
 * terminated with a semi-colon.
 */

$closure('charles');
$closure('isaac');

/**
 * The value of `$foo` outside the closure is unaffected by the closure.
 */
echo $foo, "\n";

$foo = 'twip';

/**
 * If we call our closure again it still uses the original `foo` value.
 */
$closure('mike');

?>
