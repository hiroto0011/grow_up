<?php

class Router
{
	private $route;
	private $sections = array();
	private $data = array();
	private $current_section;

	public function __construct($route, array $data = array())
	{
		$this->route = $route;
		$this->data = $data;
	}

	public function run()
	{
		extract($this->data);
		$controller_path = 'data/controllers/' . $this->route . '.php';
		if (file_exists($controller_path)) {
			include($controller_path);
		}
		
		include('data/layouts/header.php');

		$view_path = 'data/views/' . $this->route . '.php';
		if (file_exists($view_path)) {
			include($view_path);
		}
		include('data/layouts/footer.php');
	}

	public function beginSection($name)
	{
		$this->current_section = $name;
		ob_start();
	}

	public function endSection()
	{
		$content = ob_get_clean();
		$this->sections[$this->current_section][] = $content;
	}

	public function yield($name)
	{
		if (!isset($this->sections[$name])) {
			return;
		}
		$section_parts = $this->sections[$name];
		$html = '';
		foreach ($section_parts as $part) {
			$html .= $part;
		}
		return $html;
	}

	public function layout($name, array $data = array())
	{
		$path = 'data/layouts/' . $name . '.php';
		if (file_exists($path)) {
			ob_start();
			extract($data);
			include($path);
			return ob_get_clean();
		} else {
			throw new Exception("Layout file is not found: $path", 500);
		}
	}

	public function controller($name, array $data = array())
	{
		$path = 'data/controllers/' . $name . '.php';
		if (file_exists($path)) {
			ob_start();
			extract($data);
			include($path);
			return ob_get_clean();
		} else {
			throw new Exception("Controller file is not found: $path", 500);
		}
	}

	public function view($name, array $data = array())
	{
		$path = 'data/views/' . $name . '.php';
		if (file_exists($path)) {
			ob_start();
			extract($data);
			include($path);
			return ob_get_clean();
		} else {
			throw new Exception("View file is not found: $path", 500);
		}
	}
}