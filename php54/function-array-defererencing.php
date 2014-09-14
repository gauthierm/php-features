<?php

/**
 * Function array dereferencing lets you dereference an array returned by a
 * function or method without assigning it to a variable first.
 *
 * Dereferencing an array means getting an element out of the array. Before
 * PHP 5.4 you could only dereference arrays through variables.
 */

function dereferenceMe()
{
	return array('foo' => 'bar');
}

/**
 * In PHP < 5.4 you need to do the following:
 */
$a = dereferenceMe();
echo $a['foo'];
echo "\n";


/**
 * In PHP >= 5.4, you can deference the function-call directly.
 */
echo dereferenceMe()['foo'];
echo "\n";
