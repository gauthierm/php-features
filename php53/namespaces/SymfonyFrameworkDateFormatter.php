<?php

namespace Symfony\Framework;

/**
 * Import the Date class from the PEAR namespace.
 *
 * You can also import entire namespaces. This can be used to make code
 * cleaner. You can alias a lengthy complicated namespace to a two-letter
 * namespace that's still easy to understand but reduces code clutter. For
 * example:
 *
 *   use silverorange\HotDate as so;
 */
use PEAR\Date as Date;

/**
 * This DateFormatter in the Symfony\Framework namespace formats
 * PEAR\Date objects.
 */
class DateFormatter
{
	/**
	 * We don't need to fully qualify the date class because it has been
	 * imported into the current namespace. Note, if we tried to define
	 * our own Date class in the Symfony\Framework in this file after the Date
	 * class was imported we would get a compiler error.
	 *
	 * Note, this is an anti-pattern because we aliased the class name without
	 * leaving any identifier of its origins. At a glance, there is no way to
	 * tell if this a PEAR\Date or a Symfony\Framework\Date. A better pattern
	 * is to import and alias the namespace, or to use a prefixed class name
	 * if yo uare importing a specific class from a namespace.
	 */
	public function format(Date $date)
	{
		return 'Formatted: '.$date;
	}
}
