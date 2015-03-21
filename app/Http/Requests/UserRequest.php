<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name'  => ['required'],
			'email' => ['required', 'email']
		];
	}


	/**
	 * Get the validation rules messages
	 * 
	 * @return array
	 */
	public function messages()
	{
		return [
			'name.required' => 'Nome é obrigatório',
			'email.required' => 'Email é obrigatório',
			'email.email' => 'Email precisa ser válido',
		];
	}

}
