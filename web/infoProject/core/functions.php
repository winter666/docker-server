<?php 

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


function dbConnection(string $dns, string $db_username, string $db_password) {
	try {
		$conn = new \PDO($dns, $db_username, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return alertWrap('Connection to Database successfull!', BootstrapType::Success);
		phpinfo();
	} catch (\Exception $e) {
		return alertWrap($e->getMessage(), BootstrapType::Danger);
	}
}