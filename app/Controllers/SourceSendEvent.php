<?php

namespace App\Controllers;

use App\Core\Connect;
use App\Traits\PDOTrait;
use PDO;

/**
 * 
 */
class SourceSendEvent
{
	use PDOTrait;

	/**
	 * Enviar evento com a senha atual
	 */
	function password(): void
	{
		header('Content-Type: text/event-stream');
		header('Cache-Control: no-cache');
		
		while(true) {
			$stmt = $this->DB()->query("SELECT * FROM passwords ORDER BY id DESC LIMIT 1");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);

			echo "event: password\n";
			echo 'data: ', json_encode($stmt->fetch() ?? []), "\n\n";

			ob_flush();
            flush();

			usleep(300 * 1000); // 300 milisegundos
		}
	}
}