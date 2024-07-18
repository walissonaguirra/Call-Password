<?php

namespace App\Controllers;

/**
 * 
 */
class Page extends Controller
{
	public function control(): void
	{
		echo $this->view->render('layout');
	}
}