<?php

namespace App\Server;


class App {

	protected array $services;
	protected static App $instance;

	protected function __construct() {}

	public static function getInstance() {
		if (empty(static::$instance)) {
            static::$instance = new static();
        }

        return static::$instance;
	}

	public function create() {
		$renderService = $this->getService(RenderService::class);
		$renderService->renderIndex();
	}

	public function service(string $key, IService $service) {
		$this->services[$key] = $service;
	}

	public function getService(string $key) {
		return $this->services[$key];
	}

}