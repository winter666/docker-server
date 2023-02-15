<?php

namespace App\Server;

use \PDO;

class MySQLConnectionService implements IService {

	protected $connection;

	public function __construct(protected string $dns, protected string $db_username, protected string $db_password) {}

	public function connect() {
		$conn = new PDO($this->dns, $this->db_username, $this->db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection = $conn;
	}

	public function getServerVersion() {
		return $this->connection?->getAttribute(PDO::ATTR_SERVER_VERSION);
	}

}