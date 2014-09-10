<?php

/**
 * We set the current namespace to `PEAR`. All classes that are referenced
 * without explicitly specifiying a namespace are assumed to be in the `PEAR`
 * namespace.
 */
namespace PEAR;

require_once __DIR__.'/PEARTimeZone.php';

/**
 * Our fully qualified class name is: \PEAR\Date
 */
class Date
{
	protected $time_zone = null;

	public function __construct()
	{
		/**
		 * Since `\PEAR\TimeZone` is in the same namespace as the current
		 * namespace, no namespace needs to be specified for this class
		 * name.
		 */
		$this->time_zone = new TimeZone();
	}

	public function unimplemented()
	{
		/**
		 * Any class name without a namespace is assumed to be in the current
		 * namespace (`PEAR`). For native PHP classes that don't belong to a
		 * namespace, you must prefix them with the empty namespace, or `\`.
		 * This tells PHP the class is in the global namespace, not the current
		 * namespace.
		 *
		 * If you don't define any namespace for a file, this is not necessary.
		 * This allows legacy code to run.
		 */
		throw new \BadMethodCallException('This method isn\'t done yet!');
	}

	public function __toString()
	{
		return 'a \PEAR\Date with '.$this->time_zone;
	}
}
