<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserRegistered extends Event {

	use SerializesModels;

	public $to;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($user)
	{
		$this->to = $user->email;
	}

}
