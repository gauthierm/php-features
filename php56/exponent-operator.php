<?php

/**
 * Exponentiation operator allows you to raise *a* to the *b*th power using
 * only arethmetic expressions.
 *
 * This was previously possible using the `pow()` function. The addition of
 * an operator makes expressions easier to read and write.
 *
 * The ** operator has higher precedence than all other arethmetic operators.
 * It will be evaluated before +, -, *, / and %.
 */

echo 2 ** 4; // 16
echo "\n";

/**
 * The ** operator works on floats as well. We need to use parenthesis around
 * our exponent because the ** operator has precedence.
 */
echo 16 ** (1 / 2); // 4
echo "\n";

/**
 * Without using parentheses, we get 16 to the power of 1, divided by 2.
 */
echo 16 ** 1 / 2; // 8
echo "\n";


/**
 * There's no logarithmic operator in PHP yet, probably because it's usually
 * expressed as a function in mathematical expressions.
 */
echo M_E ** log(16); // 16
echo "\n";

/**
 * No exponentiation operator demonstration is complete without a pie are
 * square joke.
 */
function pieCrust($panWidth)
{
	return M_PI * ($panWidth / 2) ** 2;
}

echo "I need ", pieCrust(8), " sq inches of pie crust for an 8 inch pan.\n";
