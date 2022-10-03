<?php

class UserModel extends PdoRepo
{
	public $tableName = 'gu_users';
	public $email;
	public $name;
	public $password;
	public $token;
	public $input_password;
	public $address;
	public $username;

	public function rules()
	{
		return array(
			'required' => 'name, email, username, input_password, address',
			'email' => 'email',
			'unique' => array('username, email', $this),
		);
	}
}