<?php

namespace silverorange\PHPFeatures;

require_once __DIR__.'/PEARDate.php';
require_once __DIR__.'/PEARTimeZone.php';
require_once __DIR__.'/SwatDate.php';
require_once __DIR__.'/SymfonyFrameworkDateFormatter.php';

/**
 * Import namespaces from our library and assign handy aliases.
 */
use Symfony\Framework as sf;
use silverorange\Swat as sw;
use PEAR as pear;

class Application
{
	public function __invoke()
	{
		echo "Running app.\n\n";

		/**
		 * Create a \silverorange\Swat\Date
		 */
		$date1 = new sw\Date();
		echo $date1, "\n\n";

		/**
		 * Create a \PEAR\Date
		 */
		$date2 = new pear\Date();
		echo $date2, "\n";

		/**
		 * Again, the built-in classes need to be referenced with an empty
		 * namespace. Otherwise we'll get an error message:
		 * `undefined class \silverorange\PHPFeatures\Exception`.
		 */
		try {
			$date2->unimplemented();
		} catch (\Exception $e) {
			echo $e->getMessage(), "\n";
		}
		echo "\n";

		/**
		 * Create our date formatter and format our date objects
		 */
		$formatter = new sf\DateFormatter();
		echo $formatter->format($date1), "\n";
		echo $formatter->format($date2), "\n";
		echo "\n";

		echo "done\n\n";
	}
}

$app = new Application();
$app();
