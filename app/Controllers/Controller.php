<?php

namespace App\Controllers;

use League\Plates\Engine;

/**
 * 
 */
abstract class Controller
{
	protected Engine $view;
	function __construct()
	{
		$this->view = new Engine(dirname(__DIR__) . '/Views');
	}
}