<?php ob_start(); ?>
<div class="d-flex flex-wrap">
<?php
//	$this->render('components/simple_card', slot: fn() => apache_get_version());
	$this->render('components/simple_card', slot: fn() => 'PHP ' . phpversion());
	$this->render('components/simple_card', slot: function (App\Server\RenderService $service) {
		try {
			$mysqlService = $service->getApp()->getService(App\Server\MySQLConnectionService::class);
			$mysqlService->connect();
			echo "MySQL " . $mysqlService->getServerVersion();
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	});
?>
</div>

<?php

$body = ob_get_clean();

$this->render('components/card', ['title' => 'Module versions', 'body' => $body]);
