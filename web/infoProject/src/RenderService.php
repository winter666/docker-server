<?php

namespace App\Server;

class RenderService implements IService {
	public function __construct(protected App $app, protected string $mainTemplate) {}

	public function renderIndex() {
		$this->render('index', renderOnce: true);
	}

	public function render(string $template, array $data = [], ?callable $slot = null, bool $renderOnce = false) {
		foreach ($data as $name => $value) {
			$$name = $value;
		}

		if ($renderOnce) {
			require_once '../templates/' . $this->mainTemplate . '/' . $template . '.php';
		} else {
			require '../templates/' . $this->mainTemplate . '/' . $template . '.php';
		}
	}

	public function getApp() {
		return $this->app;
	}

}