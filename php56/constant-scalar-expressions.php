<?php

/**
 * Constant scalar expressions allow you to define constants as the result of
 * a scalar expression. The expression may involve other constants.
 *
 * All arithmetic operators are supported. Many `__MAGIC__` constants are also
 * supported in expressions.
 */

const PI = 3.141592653589793238;
const PI_2 = PI * 2;

const SECOND = 1;
const MINUTE = 60 * SECOND;
const HOUR = 60* MINUTE;
const DAY = 24 * HOUR;
const WEEK = DAY * 7;

echo WEEK, "\n";
echo PI_2, "\n";

/**
 * Long string constants can be wrapped on multiple lines to enhance
 * readability.
 */
const LONG_TEXT = 'This is a string that is pretty long ' .
	'so was wrapped at a certain length into another string '.
	'such that is it easier to read.';

echo LONG_TEXT, "\n";

/**
 * Bitwise constants get a lot more readable.
 */
const ERROR_MODE = E_STRICT ^ E_ALL;
echo ERROR_MODE, "\n";
