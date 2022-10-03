<?php

class Breadcrumb
{
	public static function show($list)
	{
		$html = null;
		if (is_array($list)) {
			$html .= '<nav class="breadcrumbs">';
			$count = count($list) - 1;
			$i = 0;
			foreach ($list as $label => $url) {
				if ($i == 0) {
					$html .= '<a href="">' . $url . '</a>';
				} else if (is_string($label)) {
					$html .= '<a href="' . $url . '">' . $label . '</a>';
				} else {
					$html .='<span>' . $url . '</span>';
				}
				if ($i < $count) {
					$html .= ' &raquo; ';
				}
				$i++;
			}
			$html .= '</nav>';
		}
		return $html;
	}
}
