<?php

namespace App\Controllers;

use App\Core\Connect;
use App\Traits\PDOTrait;
use PDO;

/**
 * 
 */
class HandlePassword extends Controller
{
	use PDOTrait;

	/**
	 * Salva senha enviada no bando de dados
	 *
	 * @return     bool
	 */
	function save()
	{
		$code = filter_input(INPUT_POST, 'code', FILTER_VALIDATE_INT);

		if (!$code) {
			return false;
		}

		$data = [
			':code' 	  => $code,
			':created_at' => date('d-m-Y H:i:s')
		];

		$stmt = $this->DB()->prepare("INSERT INTO passwords(code, created_at) values (:code, :created_at)");
		$stmt->execute($data);

		header('Content-Type: application/json');
		http_response_code(200);
		echo json_encode($data);
	}
}
