<?php

/**
 * Traits are a method of horizontal code reuse. Classical inheritance is an
 * example of vertical code reuse. In classical inheritance, there is a
 * hierarchy of classes and code can be shared with between ancestors and
 * children in the hierarchy. If you have two similar classes that do not share
 * a common ancestor there is no way to share code in classical inheritance.
 *
 * For example, given the class hierarchy:
 *
 * ```
 * Animal
 *  |
 *  +- Mammal
 *  |   |
 *  |   +- Bat
 *  |   |
 *  |   +- Mouse
 *  |
 *  +- Bird
 * ```
 *
 * Both `Bat` and `Bird` should have a `fly()` method but the nearest common
 * ancestor is `Animal`. If we add `fly()` to `Animal` we end up with flying
 * mice.
 *
 * The solution in PHP 5.4 is traits. In this example, you would create a
 * `Flyer` trait that has a `fly()` method and say `Bird` and `Bat` both
 * extend the trait.
 *
 * In this way, traits are similar to interfaces. The key difference is that
 * traits can contain method implementations and interfaces can not.
 *
 * Like interfaces, a single class can use multiple traits.
 */

abstract class Animal
{
	abstract public function name();
}

abstract class Mammal extends Animal
{
}

trait Flyer
{
	public function fly()
	{
		/**
		 * Trait methods can call methods of the class they are used by. These
		 * are checked at call time rather than compile time.
		 */
		echo 'I\'m a flying ', $this->name();
		echo "\n";
	}
}

class Bat extends Mammal
{
	/**
	 * The `use` keywords lets a class use a trait. In this case, the `Bat`
	 * class will use the `Flyer` trait.
	 */
	use Flyer;

	public function name()
	{
		return 'Bat';
	}
}

class Mouse extends Mammal
{
	public function name()
	{
		return 'Mouse';
	}
}

class Bird extends Animal
{
	use Flyer;

	public function name()
	{
		return 'Bird';
	}
}

$bird = new Bird();
$bird->fly();

$bat = new Bat();
$bat->fly();

/**
 * The `Mouse` class is not using the `Flyer` trait and has no `fly()` method.
 * This will throw an exception.
 */
$mouse = new Mouse();
$mouse->fly();
