<?php

class Validator
{
	private $data = array();
	private $errors = array();
	private $rules = array();
	private $success_message;

	public function input(array $data)
	{
		$this->data = $data;
	}

	public function getError($key)
	{
		return isset($this->errors[$key]) ? $this->errors[$key] : '';
	}

	public function getData($key)
	{
		return isset($this->data[$key]) ? $this->data[$key] : '';
	}

	public function clearData()
	{
		foreach ($this->data as $key => $value) {
			$this->data[$key] = '';
		}
	}

	public function getErrors()
	{
		return $this->errors;
	}

	public function setError($key, $message)
	{
		return $this->errors[$key] = $message;
	}

	public function hasError($key)
	{
		return isset($this->errors[$key]);
	}

	public function getSuccessMessage()
	{
		return $this->success_message;
	}

	public function setSuccessMessage($message)
	{
		return $this->success_message = $message;
	}

	public function hasSuccessMessage()
	{
		return !empty($this->success_message);
	}

	private function getLabel($field)
	{
		$field = ucfirst($field);
		$field = str_replace('_', ' ', $field);
		return $field;
	}

	public function setRule(array $rules)
	{
		$this->rules = $rules;
	}

	private function getFields($fields)
	{
		$args = array();
		foreach (explode(',', $fields) as $field) {
			$args[] = trim($field);
		}
		return $args;
	}

	public function isValid()
	{
		return empty($this->errors);
	}

	public function validate()
	{
		foreach ($this->rules as $name => $fields) {
			if (is_string($fields)) {
				$args = array($this->getFields($fields));
			} else {
				if (preg_match('/^([a-z]+)[0-9]+$/', $name, $match)) {
					$name = $match[1];
				}
				$args = array(
					$this->getFields($fields[0]),
					$fields[1]
				);
			}
			
			call_user_func_array(array($this, 'rule' . ucfirst($name)), $args);
		}
		return empty($this->errors);
	}

	private function ruleRequired($fields)
	{
		foreach ($fields as $field) {
			if (isset($this->errors[$field])) continue;
			$value = $this->data[$field];
			if (empty($value)) {
				$this->errors[$field] = $this->getLabel($field) . ' is required';
			}
		}
	}

	private function ruleChecked($fields)
	{
		foreach ($fields as $field) {
			if (isset($this->errors[$field])) continue;
			$value = isset($this->data[$field]);
			if (!$value) {
				$this->errors[$field] = $this->getLabel($field) . ' is not checked';
			}
		}
	}

	private function ruleEmail($fields)
	{
		foreach ($fields as $field) {
			if (isset($this->errors[$field])) continue;
			$value = $this->data[$field];
			if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
				$this->errors[$field] = $this->getLabel($field) . ' is not valid email address';
			}
		}
	}

	private function ruleUnique($fields, $model)
	{
		foreach ($fields as $field) {
			if (isset($this->errors[$field])) continue;
			$value = $this->data[$field];
			if($model->isExists($field, $value)){
				$this->errors[$field] = $this->getLabel($field) . ' is not unique';
			}
		}
	}

	private function ruleNone($fields, $model)
	{
		foreach ($fields as $field) {
			if (isset($this->errors[$field])) continue;
			$value = $this->data[$field];
			if (is_object($model)) {
				if(!$model->isExists($field, $value)){
					$this->errors[$field] = $this->getLabel($field) . ' is not found';
				}
			} else {
			}
		}
	}

	private function rulePattern($fields, $pattern)
	{
		foreach ($fields as $field) {
			if (isset($this->errors[$field])) continue;
			$value = $this->data[$field];
			if (!preg_match($pattern, $value)) {
				$this->errors[$field] = $this->getLabel($field) . ' does not match the pattern';
			}
		}
	}
}