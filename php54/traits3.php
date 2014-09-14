<?php

/**
 * If a class uses two traits that both provide a method with the same name,
 * a fatal error occurs.
 *
 * It is possible to use two traits that provide a method with the same name
 * by aliasing the method in one trait to a new method name. This is done
 * with the `insteadof` and `as` keywords.
 */

trait LeafGrower
{
	public function leave()
	{
		echo 'adding leaves';
		echo "\n";
	}
}

trait ConversationEnder
{
	public function leave()
	{
		echo 'leaving discussion';
		echo "\n";
	}
}

class Ent
{
	use LeafGrower, ConversationEnder {
		/**
		 * We say to use the `leave()` method of `LeafGrower` instead of
		 * `ConversationEnder`.
		 */
		LeafGrower::leave insteadof ConversationEnder;

		/**
		 * We alias the `ConversationEnder::leave()` method so it can also
		 * be used by the `Ent` class.
		 */
		ConversationEnder::leave as leaveConversation;
	}
}

$ent = new Ent();
$ent->leave();
$ent->leaveConversation();
