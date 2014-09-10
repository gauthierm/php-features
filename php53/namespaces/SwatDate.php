<?php

/**
 * Now our declared namespace is `silverorange\Swat`.
 */
namespace silverorange\Swat;

require_once __DIR__.'/PEARTimeZone.php';
require_once __DIR__.'/PEARDate.php';

/**
 * In our class extension, we need to use fully qualified namespace for
 * `\PEAR\Date` since it is a different NS than the currently defined NS.
 *
 * Our fully qualified class name is `\silverorange\Swat\Date`.
 */
class Date extends \PEAR\Date
{
	protected $time_zone = null;

	public function __construct()
	{
		/**
		 * Again we need to use fully qualified namespace since it is a
		 * different namespace than the currently defined namespace.
		 */
		$this->time_zone = new \PEAR\TimeZone();
	}

	public function __toString()
	{
		return 'a \silverorange\Swat\Date with '.$this->time_zone;
	}
}
