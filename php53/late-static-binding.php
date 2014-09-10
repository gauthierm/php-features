<?php

/**
 * Late static bindings allow static method calls to know the class name
 * from which they were called at run time. Prior to LSB in PHP, static
 * methods only knew about the class in which they were defined.
 */

abstract class Shape
{
	public static function name()
	{
		return 'I\'m a Shape!';
	}

	public static function className()
	{
		/**
		 * This new function gets the name of the calling class. Before
		 * PHP 5.3, only the name of the defining class was available.
		 */
		return get_called_class();
	}

	public static function display()
	{
		echo self::name();
	}

	public static function displayWithLateStaticBindings()
	{
		/**
		 * This is a late-static-binding. It is differentiated from a regular
		 * static call by the use of `static` instead of `self`.
		 */
		echo static::name();
	}

	public static function displayCalledClass()
	{
		echo static::className();
	}
}

class Rect extends Shape
{
	public static function name()
	{
		return 'I\'m a Rectangle!';
	}
}

class Ellipse extends Shape
{
	public static function name()
	{
		return 'I\'m an Elipse!';
	}
}

Ellipse::display();
echo "\n";
Rect::display();
echo "\n";
echo "\n";

Ellipse::displayWithLateStaticBindings();
echo "\n";
Rect::displayWithLateStaticBindings();
echo "\n";
echo "\n";

Ellipse::displayCalledClass();
echo "\n";
Rect::displayCalledClass();
echo "\n";
echo "\n";
