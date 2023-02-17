<?php 

function app() {
	return App\Server\App::getInstance();
}

function alertWrap(string $string, BootstrapType $enumType) {
	$type = getBootstrapType($enumType);
	return "<div class=\"alert alert-{$type}\">{$string}</div>";
}


function getBootstrapType(BootstrapType $type): string {
	return match ($type) {
		BootstrapType::Success => 'success',
		BootstrapType::Danger => 'danger',
		BootstrapType::Warning => 'warning',
		BootstrapType::Primary => 'Primary',
		BootstrapType::Secondary => 'Secondary',
		BootstrapType::Info => 'Info',
	};
}


function testingDBConnection(App\Server\App $app) {
	try {
		$service = $app->getService(App\Server\MySQLConnectionService::class);
		$service->connect();
		return alertWrap('Connection to Database successfull!', BootstrapType::Success);
	} catch (\Exception $e) {
		return alertWrap($e->getMessage(), BootstrapType::Danger);
	}
}

function testRedisConnection(App\Server\App $app) {
	try {
		$service = $app->getService(App\Server\RedisConnectionService::class);
		$service->connect();
		return alertWrap('Connection to Redis successfull', BootstrapType::Success);
	} catch(\Exception $e) {
		return alertWrap($e->getMessage(), BootstrapType::Danger);
	}
}