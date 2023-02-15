<?php

namespace App\Server;

use Predis\Client;
use Predis\Autoloader;

class RedisConnectionService implements IService {
	
	public function __construct(protected string $dns) {

	}

	public function connect() {
		Autoloader::register();
		$client = new Client($this->dns);
		$client->connect();
	}
}