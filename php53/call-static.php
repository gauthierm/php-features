<?php

/**
 * __callStatic is a new magic method that resolves undefined static method
 * calls.
 */

class CallStaticExample
{
	public static function __callStatic($name, $args)
	{
		echo 'You called ', $name, ' with args ', implode(', ', $args), "\n";
	}
}


CallStaticExample::foo('Hello', 'World!');
