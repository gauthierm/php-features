<?php

/**
 * The `Generator` class provides a `send()` method that can be used to
 * send a signal to a generator. The `yield` keyword provides double duty. It
 * is responsible for both receiving signals and yielding the next value.
 */

function signalableGenerator()
{
	for ($i = 0; $i < 10000; $i++) {
		/**
		 * Here we receive any signals sent to the generator as well as
		 * yielding the next value.
		 */
		$signal = (yield $i);
		if ($signal === 'stop') {
			return; // terminate the generator
		}
	}
}

$generator = signalableGenerator();
foreach ($generator as $value) {
	echo $value, "\n";

	/**
	 * The consumer of the generator can signal the generator based on its
	 * own logic. This depends on the generator implementing a signal handler
	 * that responds appropriately to the signal being sent.
	 */
	if ($value >= 3) {
		$generator->send('stop');
	}
}
