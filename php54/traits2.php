<?php

/**
 * For a class, method resolution precedence is as follows:
 *
 * 1. ancestor classes
 * 2. used traits
 * 3. current class
 */

class Animal
{
	protected function name()
	{
		return 'animal';
	}
}

trait Flyer
{
	public function fly()
	{
		echo 'I\'m a flying ', $this->name();
		echo "\n";
	}

	/**
	 * Traits can have protected and private methods like regular classes. Like
	 * regular classes, protected and public methods may be overridden by
	 * classes using the trait.
	 */
	protected function name()
	{
		return 'flyer';
	}
}

class Bat extends Animal
{
	use Flyer;

	/**
	 * The class using a trait can override the trait methods. If we did not
	 * override the `name()` method, the trait implementation would be used
	 * and `'flyer'` would be returned.
	 */
	protected function name()
	{
		/**
		 * `parent` is still the parent class in the class hierarchy, not
		 * the trait.
		 */
		return parent::name().' bat';
	}
}

$bat = new Bat();
$bat->fly();
