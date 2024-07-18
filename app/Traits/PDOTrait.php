<?php

namespace App\Traits;

use PDO;
use PDOException;

/**
 * 
 */
trait PDOTrait
{
	private PDO $pdo;

	/**
	 * Conexão PDO
	 *
	 * @return     PDO
	 */
	protected function DB(): PDO 
	{
		if (empty($this->pdo)) {
			$sqlite = dirname(__DIR__) . '/database.db';
			
			try {
		        $this->pdo = new PDO("sqlite:$sqlite");
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e) {
				var_dump('Erro na conexão com banco de dados:', $e->getMessage());
			}
		}

		return $this->pdo;
	}
}