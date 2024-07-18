<?php

namespace App\Controllers;

/**
 * Páginas
 */
class Page extends Controller
{
	/**
	 * Página para controlar senhas
	 */
	public function control(): void
	{
		echo $this->view->render('page/control');
	}
}