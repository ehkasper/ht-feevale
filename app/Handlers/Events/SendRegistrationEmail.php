<?php namespace App\Handlers\Events;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Mail;

class SendRegistrationEmail implements ShouldBeQueued {


	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Handle the event.
	 *
	 * @param  UserRegistered  $event
	 * @return void
	 */
	public function handle(UserRegistered $event)
	{
		Mail::send('users.registration', [], function ($message) use ($event) {
			$message->to($event->to);
			$message->subject('Usuário Registrado');
		});
	}

}
