<?php

namespace App\Controllers;

use App\Traits\PDOTrait;
use PDO;

/**
 * Páginas
 */
class Page extends Controller
{
	use PDOTrait;

	/**
	 * Página para controlar senhas
	 */
	public function control(): void
	{
		$stmt = $this->DB()->query("SELECT * FROM passwords ORDER BY id DESC");
		$stmt->setFetchMode(PDO::FETCH_OBJ);
		
		echo $this->view->render('page/control', [
			'passwords' => $stmt
		]);
	}

	/**
	 * Página para exibir senhas
	 */
	public function preview(): void
	{
		echo $this->view->render('page/preview'); 
	}
}