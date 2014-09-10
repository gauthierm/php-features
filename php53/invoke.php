<?php

/**
 * The __invoke() magic method lets you treat an object as a function. This
 * can be nice syntax sugar in some cases.
 *
 * Invokable objects can also be passed to any function that expects a
 * callback.
 */

class InvokableReverser
{
	public function __invoke($value)
	{
		return strrev($value);
	}
}


$reverse = new InvokableReverser();

echo $reverse('Hello, World!'), "\n";
echo "\n";


/**
 * Here is an example of using an invokable class as a callback. Before
 * PHP 5.3, you would need a separate callback function defined for each
 * replacement in this example.
 *
 * Note, invokable classes are very similar to closures. They have a contained
 * state and are callable.
 */
class Replacer
{
	protected $replacement = '';

	public function __construct($replacement)
	{
		$this->replacement = $replacement;
	}

	public function __invoke(array $matches)
	{
		return $this->replacement;
	}
}

$replacer = new Replacer('bar');
echo preg_replace_callback('/foo/', $replacer, 'foo bar baz'), "\n";

$replacer = new Replacer('baz');
echo preg_replace_callback('/foo/', $replacer, 'foo bar baz'), "\n";

echo "\n";
