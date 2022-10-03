<?php

class UserResetPasswordModel extends PdoRepo
{
	public $tableName = 'gu_user_reset_password';
	public $user_id;
	public $token;
	public $created_at;

	public function rules()
	{
		return array(
			'required' => 'user_id, token, created_at',
			'email' => 'email',
			'unique' => array('username, email', $this),
		);
	}
}