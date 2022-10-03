<?php

class SubmittedContactModel extends PdoRepo
{
	public $tableName = 'gu_submitted_contact';
	public $id;
	public $name;
	public $filename;
	public $created_at;

	public function rules()
	{
		return array(
			'required' => 'name, filename, created_at',
			'unique' => array('filename', $this),
		);
	}
}