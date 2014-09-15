<?php

/**
 * Finally is an extension to the try/catch exception handling construct
 * in PHP. Any code in the `finally` stanza is always executed even if an
 * exception is caught.
 *
 * This is useful for cleaning up any resources that may have been open at the
 * time an exception was thrown.
 */

try {

	echo "opening file.\n";
	$f = fopen(__DIR__.'/test.txt', 'w');
	throw new Exception('error error');

} catch (Exception $e) {

	echo "Something went terribly wrong!\n";
	throw $e;

} finally {

	/**
	 * This finally block is always executed after any of the catch blocks but
	 * before normal execution returns. If this was just normal code outside
	 * the try/catch block it would never run.
	 */
	echo "closing file.\n";
	fclose($f);

}
