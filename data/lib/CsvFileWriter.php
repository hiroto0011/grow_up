<?php

class CsvFileWriter
{
	private $name;
	private $resource;

	public function __construct($name)
	{
		$this->name = $name;
		$this->resource = fopen($this->name, 'a');
	}

	public function addRowData(array $data)
	{
		mb_convert_variables('SJIS', 'UTF-8', $data);
		fputcsv($this->resource, $data);
	}

	public function close()
	{
		fclose($this->resource);
	}
}